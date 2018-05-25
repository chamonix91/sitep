<?php

namespace ProjectSitep\GlobalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectSitepGlobalBundle:Default:index.html.twig');
    }
}
