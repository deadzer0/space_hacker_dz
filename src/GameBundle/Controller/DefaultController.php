<?php

namespace GameBundle\Controller;

use GameBundle\Entity\Planets;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="wellcome")
     */
    public function indexAction()
    {
        $gameusers = $this->getDoctrine()->getRepository('GameBundle:User')->findAll();



        return $this->render('@Game/Default/index.html.twig', array('gameusers' => $gameusers));
    }

    /**
     * @Route("/admin/", name="admin")
     */
    public function adminAction()
    {
        return $this->render('@Game/admin/index.html.twig');

    }

    /**
     * @Route("/admin/view", name="admin_view_list")
     */
    public function adminListAction()
    {
        return $this->render('GameBundle:admin:view.html.twig');

    }
}
