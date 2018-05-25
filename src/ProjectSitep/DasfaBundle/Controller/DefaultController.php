<?php

namespace ProjectSitep\DasfaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectSitepDasfaBundle:Default:index.html.twig');
    }
}
