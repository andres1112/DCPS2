<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Controller {

  	public function index(){

      $people['persona1']  = array('Nombre' =>'Daniel','Sexo' =>'M','Salario' =>1000000);
      $people['persona2']  = array('Nombre' =>'Felipe','Sexo' =>'M','Salario' =>900000);
      $people['persona3']  = array('Nombre' =>'Carlos','Sexo' =>'M','Salario' =>1500000);
      $people['persona4']  = array('Nombre' =>'Andrea','Sexo' =>'F','Salario' =>2000000);
      $people['persona5']  = array('Nombre' =>'Manuela','Sexo' =>'F','Salario' =>1000000);
      $people['persona6']  = array('Nombre' =>'Daniela','Sexo' =>'F','Salario' =>800000);

      $ganancias_totales = 0;

      $salario = "Salario";


      foreach ($people as $pers) {
        foreach ($pers as $salario => $value) {
            $ganancias_totales =   $ganancias_totales + $value;
        }
      }
      $people['Total_ganancias'] = $ganancias_totales;
      $this->load->view('resultado',$people);
    }




}
 ?>
