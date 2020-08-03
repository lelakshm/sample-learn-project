<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PythonController extends AbstractController
{
    /**
     * @Route("/python/{chapter}", name="python")
     */
    public function index($chapter)
    {

      $routes = $this->get_navigation($chapter);

        return $this->render('python/index.html.twig', [
          'course_name' => 'Python',
          'chapter' => $chapter,
          'location' => 'chapters/' . $chapter . '.html.twig',
          'previous' => $routes['previous'],
          'next' => $routes['next']
        ]);
    }

    private function get_navigation($chapter)
    {

      $navigation = [];

      switch ($chapter) {
        case 'welcome':
          $navigation['previous'] = 'welcome';
          $navigation['next'] = 'variables';
          break;
        case 'variables':
          $navigation['previous'] = 'welcome';
          $navigation['next'] = 'lists';
          break;
        case 'lists':
          $navigation['previous'] = 'variables';
          $navigation['next'] = 'operators';
          break;
        case 'operators':
          $navigation['previous'] = 'lists';
          $navigation['next'] = 'string_formatting';
          break;
        case 'string_formatting':
          $navigation['previous'] = 'operators';
          $navigation['next'] = 'string_operations';
          break;
        case 'string_operations':
          $navigation['previous'] = 'string_formatting';
          $navigation['next'] = 'conditions';
          break;
        case 'conditions':
          $navigation['previous'] = 'string_operations';
          $navigation['next'] = 'loops';
          break;
        case 'loops':
          $navigation['previous'] = 'conditions';
          $navigation['next'] = 'functions';
          break;
        case 'functions':
          $navigation['previous'] = 'loops';
          $navigation['next'] = 'classes';
          break;
        case 'classes':
          $navigation['previous'] = 'functions';
          $navigation['next'] = 'dictionaries';
          break;
        case 'dictionaries':
          $navigation['previous'] = 'classes';
          $navigation['next'] = 'modules';
          break;
        case 'modules':
          $navigation['previous'] = 'dictionaries';
          $navigation['next'] = 'quiz';
          break;
        case 'quiz':
          $navigation['previous'] = 'modules';
          $navigation['next'] = 'quiz';
          break;
      }

      return $navigation;
    }
}
