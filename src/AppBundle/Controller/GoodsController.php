<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GoodsController extends Controller
{
    /**
     * @Route("/goods/showgoods")
     */
    public function showGoodsAction()
    {
        $data = $this->getDoctrine()->getRepository('AppBundle:Goods')->queryGoodsWithPriceAndPictures(1);
        return $this->render('goods/show_goods.html.twig', array('data' => $data));
    }
}
