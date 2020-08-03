<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GradePassBackController extends AbstractController
{
    /**
     * @Route("/gradepassback", name="grade_pass_back")
     */
    public function index()
    {
        return $this->render('grade_pass_back/index.html.twig', [
            'controller_name' => 'GradePassBackController',
        ]);
    }
}
