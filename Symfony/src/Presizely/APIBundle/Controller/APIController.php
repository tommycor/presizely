<?php

namespace Presizely\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

use Presizely\UserBundle\Entity\User;

class APIController extends Controller
{
    //controleur de l'API
    public function indexAction(Request $request)
    {

        $logged = true;
        $article = null;
        $lastUsername = null;
        $error = null;
        $csrfToken = null;
        $results = array();

    	$user = $this->container->get('security.context')->getToken()->getUser();

        //on gère le cas où l'utilisateur est anonyme
    	if($user === "anon."){
            $logged = false;

            $session = $request->getSession();

            //formulaire de connexion inspiré du controller de FOSUserBundle
            if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
                $error = $request->attributes->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            } elseif (null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
                $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
                $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
            } else {
                $error = null;
            }

            if (!$error instanceof AuthenticationException) {
                $error = null; // The value does not come from the security component.
            }

            // last username entered by the user
            $lastUsername = (null === $session) ? ' ' : $session->get(SecurityContextInterface::LAST_USERNAME);

            $csrfToken = $this->has('form.csrf_provider')
                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;
        }
        else{
            $manager = $this
              ->getDoctrine()
              ->getManager()
            ;

            //On récupère l'article et le client envoyé en get
            $repository =  $manager->getRepository('PresizelyProductsBundle:Article');
            $articles = $request->query->get('article');
            //On récupère tout les article avec le même nom, pour connaitre ses différentes tailles
            $articles = $repository->findBy(array('name' => $articles));

            $repository =  $manager->getRepository('PresizelyProductsBundle:Partener');
            $idClient = $request->query->get('client');
            $client = $repository->find($idClient);


            if($articles != null && $client != null){

                $measurement = $user->getMeasurement();

                foreach ($articles as $article) {

                    $totalCompare = null;
                    $valueClothe = null;

                    if($article->getTeteTete()!=null && $measurement->getTeteTete()!=null){
                        $totalCompare++;
                        if($article->getTeteTete() >= $measurement->getTeteTete())
                            $valueClothe++;
                    }
                    if($article->getTeteCou()!=null && $measurement->getTeteCou()!=null){
                        $totalCompare++;
                        if($article->getTeteCou() >= $measurement->getTeteCou())
                            $valueClothe++;
                    }
                    if($article->getBusteEpaule()!=null && $measurement->getBusteEpaule()!=null){
                        $totalCompare++;
                        if($article->getBusteEpaule() >= $measurement->getBusteEpaule())
                            $valueClothe++;
                    }
                    if($article->getBustePoitrine()!=null && $measurement->getBustePoitrine()!=null){
                        $totalCompare++;
                        if($article->getBustePoitrine() >= $measurement->getBustePoitrine())
                            $valueClothe++;
                    }
                    if($article->getMainPoignet()!=null && $measurement->getMainPoignet()!=null){
                        $totalCompare++;
                        if($article->getMainPoignet() >= $measurement->getMainPoignet())
                            $valueClothe++;
                    }
                    if($article->getMainMain()!=null && $measurement->getMainMain()!=null){
                        $totalCompare++;
                        if($article->getMainMain() >= $measurement->getMainMain())
                            $valueClothe++;
                    }
                    if($article->getJambeHanche()!=null && $measurement->getJambeHanche()!=null){
                        $totalCompare++;
                        if($article->getJambeHanche() >= $measurement->getJambeHanche())
                            $valueClothe++;
                    }
                    if($article->getJambeFesse()!=null && $measurement->getJambeFesse()!=null){
                        $totalCompare++;
                        if($article->getJambeFesse() >= $measurement->getJambeFesse())
                            $valueClothe++;
                    }
                    if($article->getPiedLongueur()!=null && $measurement->getPiedLongueur()!=null){
                        $totalCompare++;
                        if($article->getPiedLongueur() >= $measurement->getPiedLongueur())
                            $valueClothe++;
                    }
                    if($article->getPiedLargeur()!=null && $measurement->getPiedLargeur()!=null){
                        $totalCompare++;
                        if($article->getPiedLargeur() >= $measurement->getPiedLargeur())
                            $valueClothe++;
                    }

                    $val = $valueClothe/$totalCompare;
                    //On choisit le vêtement le plus petitde ceux qui ont des mesures supérieurs à l'utilisateur
                    if($val >= 0.5){
                        if($article->getSizeFrLetter()!=null){
                            switch ($article->getSizeFrLetter()) {
                                case 'XXS':
                                    $results[$article->getId()] = 32;
                                    break;
                                case 'XS':
                                    $results[$article->getId()] = 34;
                                    break;
                                case 'S':
                                    $results[$article->getId()] = 36;
                                    break;
                                case 'M':
                                    $results[$article->getId()] = 38;
                                    break;
                                case 'L':
                                    $results[$article->getId()] = 40;
                                    break;
                                case 'XL':
                                    $results[$article->getId()] = 42;
                                    break;
                                case 'XXL':
                                    $results[$article->getId()] = 44;
                                    break;
                                case 'XXXL':
                                    $results[$article->getId()] = 46;
                                    break;
                                case 'XXXXL':
                                    $results[$article->getId()] = 48;
                                    break;
                                
                                default:
                                    $results[$article->getId()] = 0;
                                    break;
                            }
                        }
                        else if(isset($article->getSizeFr))
                            $results[$article->getId()] = $article->getSizeFr;
                    }
                }

            
                $idSmallest = array_keys($results, max($results));

                foreach ($articles as $item) {
                    if($item->getId() == $idSmallest[0])
                        $article = $item;
                }
            }
            
        }



        return $this->render('PresizelyAPIBundle:Default:index.html.twig', array( 
        	'logged'	    =>	$logged,
            'user'          =>  $user,
            'last_username' =>  $lastUsername,
            'error'         =>  $error,
            'csrf_token'    =>  $csrfToken,
            'article'       =>  $article
        ));
    }
}
