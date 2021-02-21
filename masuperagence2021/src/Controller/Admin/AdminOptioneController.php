<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminOptioneController extends AbstractController
{
    /**
     * @Route("/admin/admin/optione", name="admin_admin_optione")
     */
    public function index(): Response
    {
        return $this->render('admin/optione/index.html.twig', [
            'controller_name' => 'AdminOptioneController',
        ]);
    }
}
