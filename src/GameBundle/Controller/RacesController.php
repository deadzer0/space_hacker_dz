<?php

namespace GameBundle\Controller;

use GameBundle\Entity\Races;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Race controller.
 *
 * @Route("/admin/races")
 */
class RacesController extends Controller
{
    /**
     * Lists all race entities.
     *
     * @Route("/", name="races_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $races = $em->getRepository('GameBundle:Races')->findAll();

        return $this->render('GameBundle:races:index.html.twig', array(
            'races' => $races,
        ));
    }

    /**
     * Creates a new race entity.
     *
     * @Route("/new", name="races_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $race = new Races();
        $form = $this->createForm('GameBundle\Form\RacesType', $race);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($race);
            $em->flush($race);

            return $this->redirectToRoute('races_show', array('id' => $race->getId()));
        }

        return $this->render('GameBundle:races:new.html.twig', array(
            'race' => $race,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a race entity.
     *
     * @Route("/{id}", name="races_show")
     * @Method("GET")
     */
    public function showAction(Races $race)
    {
        $deleteForm = $this->createDeleteForm($race);

        return $this->render('@Game/races/show.html.twig', array(
            'race' => $race,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing race entity.
     *
     * @Route("/{id}/edit", name="races_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Races $race)
    {
        $deleteForm = $this->createDeleteForm($race);
        $editForm = $this->createForm('GameBundle\Form\RacesType', $race);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('races_edit', array('id' => $race->getId()));
        }

        return $this->render('GameBundle:races:edit.html.twig', array(
            'race' => $race,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a race entity.
     *
     * @Route("/{id}", name="races_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Races $race)
    {
        $form = $this->createDeleteForm($race);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($race);
            $em->flush($race);
        }

        return $this->redirectToRoute('races_index');
    }

    /**
     * Creates a form to delete a race entity.
     *
     * @param Races $race The race entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Races $race)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('races_delete', array('id' => $race->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
