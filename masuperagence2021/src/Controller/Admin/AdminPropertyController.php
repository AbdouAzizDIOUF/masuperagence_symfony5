<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPropertyController extends AbstractController
{
    /**
     * @Route("/admin/admin/property", name="admin_admin_property")
     */
    public function index(): Response
    {
        return $this->render('admin/property/index.html.twig', [
            'controller_name' => 'AdminPropertyController',
        ]);
    }
}
