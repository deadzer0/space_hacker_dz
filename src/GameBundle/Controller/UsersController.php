<?php

namespace GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 * @Route("/admin/users")
 */
class UsersController extends Controller
{
    /**
     * Lists all race entities.
     *
     * @Route("/", name="users_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('GameBundle:User')->findAll();

        return $this->render('GameBundle:users:index.html.twig', array(
            'users' => $users,
        ));
    }

}
