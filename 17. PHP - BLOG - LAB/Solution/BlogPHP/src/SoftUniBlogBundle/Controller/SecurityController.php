<?php

namespace SoftUniBlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function login()
    {
        return $this->render("security/login.html.twig");
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout() {

    }

}
