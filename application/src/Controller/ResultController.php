<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ResultController extends AbstractController
{

  const results = [

    'q1' => 'True',
    'q2' => 'Error',
    'q3' => 'True'

  ];
    /**
     * @Route("/result", name="result")
     */
    public function index(Request $request)
    {

        return $this->render('result/index.html.twig', [
            'score' => $this->score($request),
        ]);
    }

    private function score(Request $request) {

      $correct = 0;
      $questions = ['q1', 'q2', 'q3'];

      foreach ($questions as $question) {

        if ($request->request->get($question) === self::results[$question]) {
          $correct += 1;
        }

      }

      return ($correct / count(self::results) * 100). '%';

    }
}
