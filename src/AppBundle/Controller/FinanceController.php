<?php
/**
 * Created by PhpStorm.
 * User: Mitko
 * Date: 6/24/16
 * Time: 10:37 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FinanceController extends Controller
{
    /**
     * @Route("/finance")
     */
    public function showAction() {
        return $this->render('/finance/view.html.twig');
    }

}