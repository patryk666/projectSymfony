<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller {

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request) {
        return $this->render('default/contact.html.twig', [
        ]);
    }

}
