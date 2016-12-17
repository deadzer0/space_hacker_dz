<?php

namespace GameBundle\Controller;

use GameBundle\Entity\Planets;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 *
 * @Route("/admin/planets")
 */
class PlanetsController extends Controller
{
    /**
     * Lists all planet entities.
     *
     * @Route("/", name="planets_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $planets = $em->getRepository('GameBundle:Planets')->findAll();

        return $this->render('GameBundle:planets:index.html.twig', array(
            'planets' => $planets,
        ));
    }

    /**
     * Creates a new planet entity.
     *
     * @Route("/new", name="planets_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $planet = new Planets();
        $form = $this->createForm('GameBundle\Form\PlanetsType', $planet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($planet);
            $em->flush($planet);

            return $this->redirectToRoute('planets_show', array('id' => $planet->getId()));
        }

        return $this->render('GameBundle:planets:new.html.twig', array(
            'planet' => $planet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a planet entity.
     *
     * @Route("/{id}", name="planets_show")
     * @Method("GET")
     */
    public function showAction(Planets $planet)
    {
        $deleteForm = $this->createDeleteForm($planet);



            return $this->render('GameBundle:planets:show.html.twig', array(
                'planet' => $planet,
                'delete_form' => $deleteForm->createView(),
            ));

    }

    /**
     * Displays a form to edit an existing planet entity.
     *
     * @Route("/{id}/edit", name="planets_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Planets $planet)
    {
        $deleteForm = $this->createDeleteForm($planet);
        $editForm = $this->createForm('GameBundle\Form\PlanetsType', $planet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('planets_edit', array('id' => $planet->getId()));
        }

        return $this->render('GameBundle:planets:edit.html.twig', array(
            'planet' => $planet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a planet entity.
     *
     * @Route("/{id}", name="planets_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Planets $planet)
    {
        $form = $this->createDeleteForm($planet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($planet);
            $em->flush($planet);
        }

        return $this->redirectToRoute('planets_index');
    }

    /**
     * Creates a form to delete a planet entity.
     *
     * @param Planets $planet The planet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Planets $planet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('planets_delete', array('id' => $planet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
