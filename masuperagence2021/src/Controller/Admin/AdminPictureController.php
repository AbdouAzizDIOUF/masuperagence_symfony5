<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPictureController extends AbstractController
{
    /**
     * @Route("/admin/admin/picture", name="admin_admin_picture")
     */
    public function index(): Response
    {
        return $this->render('admin/picture/index.html.twig', [
            'controller_name' => 'AdminPictureController',
        ]);
    }
}
