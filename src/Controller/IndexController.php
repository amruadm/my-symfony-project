<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends AbstractController {

    /**
     * Вывод главной страницы
     *
     * @Route("/")
     */
    public function index() {
        return $this->render('base.html.twig');
    }

}