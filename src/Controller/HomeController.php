<?php


namespace App\Controller;

use App\Entity\Argaunote;
use App\Form\ArgonautType;
use App\Repository\ArgaunoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Controller
 * @Route ("/", name="app_")
 */
class HomeController extends AbstractController
{
    /**
     * @param ArgaunoteRepository $repository
     * @param Request $request
     * @return Response
     * @Route("/", name="index")
     */
    public function index(ArgaunoteRepository $repository, Request $request): Response
    {
        $argonaut = new Argaunote();
        $form = $this->createForm(ArgonautType::class, $argonaut);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->getDoctrine()->getManager()->persist($argonaut);
            $this->getDoctrine()->getManager()->flush();
        }

        $argonauts = $repository->findAll();

        return $this->render('index.html.twig',
        [
            'argonauts' => $argonauts,
            'form' => $form->createView()
        ]);
    }
}
