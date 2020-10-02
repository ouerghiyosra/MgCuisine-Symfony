<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
//    public function index()
//    {
//        return $this->render('admin/index.html.twig', [
//            'controller_name' => 'HomeController',
//        ]);
//    }

    public function index(){
        return $this->render('admin/index.html.twig');
    }
}
