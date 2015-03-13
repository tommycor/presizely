<?php

namespace Presizely\ProductsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Presizely\ProductsBundle\Entity\Article;
use Presizely\ProductsBundle\Entity\Partener;
use Symfony\Component\HttpFoundation\Request;


class ProductsController extends Controller
{
	//Controller pour ajouter un article
    public function addArticleAction(Request $request)
    {

		$article = new Article();

		$formBuilder = $this->get('form.factory')->createBuilder('form', $article);

		$formBuilder
			->add('name', 'text')
			->add('type', 'text')
			->add('coupe', 'text')
			->add('sizeFrLetter', 'text')
			->add('sizeUsLetter', 'text')
			->add('sizeFr', 'text')
			->add('sizeUs', 'text')
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
			->add('brand', 'text')
			->add('save', 'submit')
		;

		$form = $formBuilder->getForm();

		$form->handleRequest($request);

		if($form->isValid())
		{

			$em=$this->getDoctrine()->getManager();
			$em->persist($article);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Article enregistrée!.');
		}

		return $this->render('PresizelyProductsBundle:Products:addArticle.html.twig', array(
			'form' => $form->createView(),
	    ));
    }
    //Controlleur pour voir tout les articles
    public function viewAllArticlesAction(Request $request)
    {

		$manager = $this
		  ->getDoctrine()
		  ->getManager()
		;

		$repository = $manager
		  ->getRepository('PresizelyProductsBundle:Article')
		;

		$articles = $repository->findAll();

		return $this->render('PresizelyProductsBundle:Products:viewAllArticles.html.twig', array(
			'articles' => $articles,
	    ));
    }

    //Controller pour ajouter un partenaire
    public function addPartenerAction(Request $request)
    {

		$partener = new Partener();

		$formBuilder = $this->get('form.factory')->createBuilder('form', $partener);

		$formBuilder
			->add('name', 'text')
			->add('domain', 'text')
			->add('URL', 'text')
			->add('siret', 'text')
			->add('mail', 'text')
			->add('nom_contact', 'text')
			->add('save', 'submit')
		;

		$form = $formBuilder->getForm();

		$form->handleRequest($request);

		if($form->isValid())
		{
			$em=$this->getDoctrine()->getManager();
			$em->persist($partener);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Partener enregistrée!.');
		}


		return $this->render('PresizelyProductsBundle:Products:addPartener.html.twig', array(
			'form' => $form->createView(),
	    ));
    }

    //Controller pour lier un partenaire à un article
    public function PartenerToArticleAction(Request $request)
    {

		$manager = $this
		  ->getDoctrine()
		  ->getManager()
		;

		$repository = $manager
		  ->getRepository('PresizelyProductsBundle:Partener')
		;

		$partener = $repository->find(2);

		$formBuilder = $this->get('form.factory')->createBuilder('form', $partener);

		$formBuilder
			->add('Article', 'entity', array(
				'class'    => 'PresizelyProductsBundle:Article',
				'property' => 'name',
				'multiple' => true,
				'expanded' => true
			))
			->add('save', 'submit')
		;

		$form = $formBuilder->getForm();

		$form->handleRequest($request);

		if($form->isValid())
		{			
			//$manager->persist($partener);
			$manager->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Partener enregistrée!.');
		}


		return $this->render('PresizelyProductsBundle:Products:partener-to-article.html.twig', array(
			'form' => $form->createView(),
			'partener' => $partener
	    ));
    }
}
