<?php

namespace ProjectSitep\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectSitepUserBundle:Default:index.html.twig');
    }
}
