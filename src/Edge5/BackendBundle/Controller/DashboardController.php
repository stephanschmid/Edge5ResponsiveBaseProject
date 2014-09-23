<?php

namespace Edge5\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="_dashboardIndex")
     * @Template
     */
    public function indexAction()
    {
        $data = array();

        return $data;
    }
}
