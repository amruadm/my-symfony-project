<?php

namespace App\Controller\Api;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductController extends Controller
{
    /**
     * @param null $id
     *
     * @Route("/api/product/{id}", name="product")
     *
     * @return JsonResponse
     */
    public function get($id = null)
    {
        $entityManager = $this->getDoctrine()->getManager();

        return new JsonResponse();
    }

}