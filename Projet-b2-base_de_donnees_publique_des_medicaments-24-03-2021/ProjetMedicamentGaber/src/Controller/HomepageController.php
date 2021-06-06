<?php

namespace App\Controller;

use App\Entity\CisBdpm;
use App\Entity\CisCipBdpm;
use App\Entity\CisHas;
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
            'commercializedDrugsOnReinforcedSurveillanceNumber' => $this->getDoctrine()->getRepository(CisBdpm::class)->FindCommercializedAndReinforcedSurveillanceDrugsNumber(),
            'avgPriceByRefundPercent' => $this->getDoctrine()->getRepository(CisCipBdpm::class)->FindAvgPriceByRefundPercent(),
            'ASMRSuggestNumberByYear' => $this->getDoctrine()->getRepository(CisHas::class)->FindASMRSuggestNumberByYear(),
            'SMRSuggestNumber' => $this->getDoctrine()->getRepository(CisHas::class)->FindSMRSuggestNumber(),
            'FindASMRSuggestNumberLevelV' => $this->getDoctrine()->getRepository(CisHas::class)->FindASMRSuggestNumberLevelV(),
            'FindNumberByRefundPercent' => $this->getDoctrine()->getRepository(CisCipBdpm::class)->FindNumberByRefundPercent(),
            'FindCommercializedDrugsByYears' => $this->getDoctrine()->getRepository(CisBdpm::class)->FindCommercializedDrugsByYears()
        ]);
    }
}
