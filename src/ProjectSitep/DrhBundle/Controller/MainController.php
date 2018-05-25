<?php

namespace ProjectSitep\DrhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
    public function drhAction()
    {
        return $this->render('@ProjectSitepDrh/Drh.html.twig');
    }

}
