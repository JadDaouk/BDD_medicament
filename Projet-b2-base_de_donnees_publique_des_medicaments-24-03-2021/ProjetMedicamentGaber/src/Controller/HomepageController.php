<?php

namespace App\Controller;

use App\Entity\CisBdpm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        return $this->render('homepage/index.html.twig', [
            'commercializedDrugsNumber' => $this->getDoctrine()->getRepository(CisBdpm::class)->FindCommercializedDrugsNumber(),
            'commercializedDrugsOnReinforcedSurveillanceNumber' => $this->getDoctrine()->getRepository(CisBdpm::class)->FindCommercializedAndReinforcedSurveillanceDrugsNumber()
        ]);
    }
}
