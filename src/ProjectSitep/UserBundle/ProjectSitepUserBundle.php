<?php

namespace ProjectSitep\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ProjectSitepUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
