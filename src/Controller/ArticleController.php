<?php
/**
 * Created by PhpStorm.
 * User: ssangole
 * Date: 5/5/18
 * Time: 7:21 AM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{

    /**
     * @Route("/")
     *
     */
    public function homepage(){
        return new Response('My First symfony page');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug){
        return new Response(
            sprintf(
                "Show one page article on %s",
                $slug));
    }
}