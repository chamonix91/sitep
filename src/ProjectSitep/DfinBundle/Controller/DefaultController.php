<?php

namespace ProjectSitep\DfinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectSitepDfinBundle::Dfin.html.twig');
    }
}
