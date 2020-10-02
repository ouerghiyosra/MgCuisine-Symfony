<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
//    public function index()
//    {
//        return $this->render('admin/index.html.twig', [
//            'controller_name' => 'AdminController',
//        ]);
//    }

    public function index(){
        return $this->render('front/index.html.twig');
    }
}
