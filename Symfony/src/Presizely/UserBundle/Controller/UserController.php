<?php
// src/Presizely/UserBundle/Controller/UserController.php



namespace Presizely\UserBundle\Controller;
//import des composants symfony
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
//import des composants de bundle externes
use FOS\ElasticaBundle\Manager\RepositoryManager;
use FOS\ElasticaBundle\Repository;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
//import des compostants de bundle presizely
use Presizely\ProductsBundle\Entity\Article;
use Presizely\UserBundle\Entity\User;
use Presizely\UserBundle\Entity\Measurement;
use Presizely\UserBundle\Entity\History;




class UserController extends Controller
{
	//Controlleur Page d'accueil
	public function IndexAction(Request $request)
	{

		//etat du log de l'utilisateur
        $logged = true;

        //On récupère l'utilisateur authentifié
		$user = $this->container->get('security.context')->getToken()->getUser();

		//Test du log de l'utilisateur
    	if($user === "anon."){
            $logged = false;

            
            $session = $request->getSession();

            //Inscrutions du formulaire d'authentification
            if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
                $error = $request->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            } elseif (null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
                $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
                $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
            } else {
                $error = null;
            }

            if (!$error instanceof AuthenticationException) {
                $error = null;
            }

            $lastUsername = (null === $session) ? ' ' : $session->get(SecurityContextInterface::LAST_USERNAME);

            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;

	        return $this->render('PresizelyUserBundle:User:Index.html.twig', array( 
	            'user'          =>  $user,
	            'last_username' =>  $lastUsername,
	            'error'         =>  $error,
	            'csrf_token'    =>  $csrfToken,
        		'logged'		=>	$logged
	        ));
        }

		return $this->render('PresizelyUserBundle:User:Index.html.twig', array(
        	'logged'	=>	$logged,
	      	'user'		=>	$user,
	    ));
	}

	//Controleur du dashboard
	public function dashboardAction(Request $request){

		//On récupère l'utilisateur authentifié
		$user = $this->container->get('security.context')->getToken()->getUser();

		$measurement = $user->getMeasurement();
		//normalement, tout les utilisateurs ont des mensurations générées à leur création. ce test est juste une précaution
		if($measurement == null)
			$measurement = new Measurement();

		//On récupère le formulaire pour modifier les mensurations via les slider
		$formBuilder = $this->get('form.factory')->createBuilder('form', $measurement);

		//predict_size() va renvoyer un objet measurement avec les prédictions calculées
		$predicted = $this->predict_Size($user);

		$formMeasurement = $formBuilder
			->add('tetetete', 'text')
			->add('tetecou', 'text')
			->add('busteepaule', 'text')
			->add('bustepoitrine', 'text')
			->add('mainpoignet', 'text')
			->add('mainmain', 'text')
			->add('jambehanche', 'text')
			->add('jambefesse', 'text')
			->add('piedlongueur', 'text')
			->add('piedlargeur', 'text')
			->add('Valider', 'submit')
			->getForm()
		;

		$formMeasurement = $formBuilder->getForm();

		//On récupère les informations de la réponse au formulaire
		$formMeasurement->handleRequest($request);

		//Instrution si les formulaire est complété
		if($formMeasurement->isValid())
		{
			$em=$this->getDoctrine()->getManager();
			$em->persist($measurement);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Mensurations enregistrée!.');
		}


		return $this->render('PresizelyUserBundle:User:dashboard.html.twig', array(
			'user' => $user,
			'measurement' => $measurement,
			'predicted' => $predicted,
			'formMeasurement' => $formMeasurement->createView(),
	    ));
	}

	//Controleur pour créer un utilisateur
	//Il est inspiré du controleur de FOSUserBundle, et permet de gérer les spécifications de presizely
	public function registerAction(Request $request)
	{
		//On récupère des éléments du controleur de FOSUserBundle
        $formFactory = $this->get('fos_user.registration.form.factory');
        $userManager = $this->get('fos_user.user_manager');
        $dispatcher = $this->get('event_dispatcher');

		$user = $userManager->createUser();
		//L'utilisateur est autorisé par défaut
        $user->setEnabled(true);
		$measurement = new Measurement();
		$user->setMeasurement($measurement);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

            $userManager->updateUser($user);

			$em=$this->getDoctrine()->getManager();

			$em=$this->getDoctrine()->getManager();
			$em->persist($measurement);
			$em->flush();



            if (null === $response = $event->getResponse()) {
            	//On redirige l'utilisateur vers son dashboard
                $url = $this->generateUrl('presizely_user_dashboard');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('PresizelyUserBundle:User:register.html.twig', array(
            'form' => $form->createView(),
        ));
	}
	//Controleur qui permet de gérer l'historique
	public function HistoAction(Request $request)
	{
		$em=$this->getDoctrine()->getManager();
     	
     	//On récupère l'utilisateur authentifié   
		$user = $this->container->get('security.context')->getToken()->getUser();

		$history = new History();

		$formBuilder = $this->get('form.factory')->createBuilder('form', $history);

		$formBuilder
			->add('Article', 'entity', array(
				'class'    => 'PresizelyProductsBundle:Article',
				'property' => 'name',
				'multiple' => false,
				'expanded' => true
			))
			->add('Grade', 'text')
			->add('date', 'date', array(
			    'input'  => 'datetime',
			    'widget' => 'choice',
			))
			->add('save', 'submit')
		;

		$form = $formBuilder->getForm();


		$form->handleRequest($request);

		if($form->isValid())
		{
			$history->setUser($user);

			$em=$this->getDoctrine()->getManager();
			$em->persist($history);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Done!');
		}


		return $this->render('PresizelyUserBundle:User:Histo.html.twig', array(
			'user' => $user,
			'form' => $form->createView()
	    ));
	}

	//Algorithme de prédiction de la taille
	public function predict_Size($user)
	{
		//On récupère l'historique de l'utilisateur
		$histories = $user->getHistories();

		//On créer un tableau qui va stocker le numérateur pour chaque mesure permettant de calculer la moyenne arithmétique pondérée
		$num = array(
			'tete_tete' => 0,
			'tete_cou' => 0,
			'buste_epaule' => 0,
			'buste_poitrine' => 0,
			'main_poignet' => 0,
			'main_main' => 0,
			'jambe_hanche' => 0,
			'jambe_fesse' => 0,
			'pied_longueur' => 0,
			'pied_largeur' => 0,
		);

		//Le dénumérateur est le même pour toutes les mesure, une varible suffit à le stocker
		$denum = 0;

		$predicted = new Measurement();
		
		foreach ($histories as $history) {
			$now = new \Datetime();
			$date = $history->getDate();
			//On calcule l'age de l'achat
			$age = intval(date_diff($date, $now)->days/30);
			//On récupère l'article de l'historique
			$article = $history->getArticle();

			//facteur de la note sur la pondération
			switch ($history->getGrade()) {
				case 1:
					$val_grade = 0;
					break;
				case 2:
					$val_grade = 0.1;
					break;
				case 3:
					$val_grade = 0.4;
					break;
				case 4:
					$val_grade = 0.75;
					break;
				case 5:
					$val_grade = 1;
					break;				
				default:
					$val_grade = 0;
					break;
			}

			//facteur de la date sur la pondération
			if($age >= 40)
				$poids = 0;
			else
				$poids = (((-2.5)*$age) + 100) * $val_grade;

			//calcule du numérateur pour chaque mesure
			$num['tete_tete'] += $article->getTeteTete() * $poids;
			$num['tete_cou'] += $article->getTeteCou() * $poids;
			$num['buste_epaule'] += $article->getBusteEpaule() * $poids;
			$num['buste_poitrine'] += $article->getBustePoitrine() * $poids;
			$num['main_poignet'] += $article->getMainPoignet() * $poids;
			$num['main_main'] += $article->getMainMain() * $poids;
			$num['jambe_hanche'] += $article->getJambeHanche() * $poids;
			$num['jambe_fesse'] += $article->getJambeFesse() * $poids;
			$num['pied_longueur'] += $article->getPiedLongueur() * $poids;
			$num['pied_largeur'] += $article->getPiedLargeur() * $poids;

			//calcule du dénumérateur
			$denum += $poids;

		}

		//si le dénumérateur vaut zéro, l'algorithme explose, donc on esquive le cas
		if($denum != 0){
			//Cacule de la taille caulculée
			$predicted->setTeteTete(intval($num['tete_tete']/$denum));
			$predicted->setTeteCou(intval($num['tete_cou']/$denum));
			$predicted->setBusteEpaule(intval($num['buste_epaule']/$denum));
			$predicted->setBustePoitrine(intval($num['buste_poitrine']/$denum));
			$predicted->setMainPoignet(intval($num['main_poignet']/$denum));
			$predicted->setMainMain(intval($num['main_main']/$denum));
			$predicted->setJambeHanche(intval($num['jambe_hanche']/$denum));
			$predicted->setJambeFesse(intval($num['jambe_fesse']/$denum));
			$predicted->setPiedLongueur(intval($num['pied_longueur']/$denum));
			$predicted->setPiedLargeur(intval($num['pied_largeur']/$denum));
		}

		return $predicted;
	}
}