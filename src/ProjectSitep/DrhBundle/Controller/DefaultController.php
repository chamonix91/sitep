<?php

namespace ProjectSitep\DrhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectSitepDrhBundle:Default:index.html.twig');
    }


}
