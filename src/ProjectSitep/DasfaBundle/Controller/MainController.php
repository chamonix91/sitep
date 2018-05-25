<?php

namespace ProjectSitep\DasfaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function DasfaAction()
    {
        return $this->render('@ProjectSitepDasfa/Dasfa.html.twig');
    }
}
