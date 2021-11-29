<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

/**
 * Description of CalculatorController
 *
 * @author Daw
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculatorController extends Controller {
    
    function indexAction($age) {

        $current_year = date('Y');

        return new Response('<html><body><h1> Año Actual' . $current_year . '</h1>'
                             . '<br><br><br><h1> Año de nacimiento : ' . ($current_year - $age)
                             . '</h1></body></html>');
    }
    
    
}
