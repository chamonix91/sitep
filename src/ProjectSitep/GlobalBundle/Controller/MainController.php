<?php

namespace ProjectSitep\GlobalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function DashboardAction()
    {
        return $this->render('ProjectSitepGlobalBundle:Template:Dashboard.html.twig');
    }
}
