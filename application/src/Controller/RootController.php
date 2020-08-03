<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class RootController extends AbstractController
{
    /**
     * @Route("/", name="root")
     */
    public function index(Request $request)
    {
      return $this->render('root/index.html.twig', [
          'course_name' => 'Python Essentials'
      ]);
    }

}
