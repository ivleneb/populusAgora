<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        /*return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);*/

        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
        return new Response("Who are us?");
    }

    /**
     * @Route("/statements", name="statements")
     */
    public function statementsAction(Request $request)
    {
        return new Response("Mission and Vision");
    }

    /**
     * @Route("/gallery", name="gallery")
     */
    public function galleryAction(Request $request)
    {
        return new Response("Fotos");
    }

    /**
     * @Route("/join", name="join")
     */
    public function joinUsAction(Request $request)
    {
        return new Response("Unete!");
    }

    /**
     * @Route("/activity", name="activity")
     */
    public function activitiesAction(Request $request)
    {
        return new Response("Actividades!");
    }
}
