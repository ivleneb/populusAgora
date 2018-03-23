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
        //Initial page
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/acerca-de-nosotros", name="about")
     */
    public function aboutAction(Request $request)
    {
        //Statements, history and official information
        return $this->render('default/about.html.twig');
    }

    /**
     * @Route("/contactanos", name="contact")
     */
    public function contactAction(Request $request)
    {
        //Email us
        return $this->render('default/contactus.html.twig');
    }

    /**
     * @Route("/cuenta/registro", name="signup")
     */
    public function signUpAction(Request $request)
    {
        //SingUp or registration
        return $this->render('default/register.html.twig');
    }

    /**
     * @Route("cuenta/ingreso", name="login")
     */
    public function loginAction(Request $request)
    {
        //Log in to account or intranet
        return $this->render('default/login.html.twig');
    }

    /**
     * @Route("/discursos-publicos", name="gallery")
     */
    public function galleryAction(Request $request)
    {
        //Show image repository of agora
        return $this->render('default/gallery.html.twig');
    }

    /**
     * @Route("/actividades-eventos", name="activity")
     */
    public function activityAction(Request $request)
    {
        //List of events from us and friend org 
        return $this->render('default/activity.html.twig');
    }

    /**
     * @Route("/revista", name="magazine")
     */
    public function magazineAction()
    {
        //Magazine science social and abstract section
        return $this->render('default/magazine.html.twig');
    }

    /**
     * @Route("/prensa", name="press")
     */
    public function pressAction()
    {
        //Newsṕaper and press section
        return $this->render('default/press.html.twig');
    }

    /**
     * @Route("/foro", name="forum")
     */
    public function forumAction()
    {
        //Forum to interact
        return $this->render('default/forum.html.twig');
    }

    /**
     * @Route("/aplicaciones", name="apps")
     */
    public function appsAction()
    {
        //See the apps available of agora developers and friends
        return $this->render('default/apps.html.twig');
    }

    /**
     * @Route("/busqueda-articulos-noticias", name="search")
     */
    public function searchAction()
    {
        //Search engine
        return $this->render('default/search.html.twig');
    }
}
