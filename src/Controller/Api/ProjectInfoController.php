<?php

namespace App\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class ProjectInfoController
 * @package App\Controller\Api
 */
class ProjectInfoController {

    /**
     * @Route(
     *     "/api/project/dir/{target}",
     *     defaults={"_format": "json"}
     * )
     *
     * @param string $target
     *
     * @return JsonResponse
     */
    public function dir($target = __DIR__ . '/../../../') {
        $finder = new Finder();
        $finder->depth('== 0');
        $finder->in($target);
        $result = [];

        foreach ($finder as $file) {
            array_push($result, $file->getFilename());
        }
        return new JsonResponse($result);
    }

}