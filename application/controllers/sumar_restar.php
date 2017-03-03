<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sumar_restar extends CI_Controller {
	
	public function index()
	{
	$this->load->helper('form');
	$this->load->view('sumar_restar');
	}
	

	public function result()
	{
	$this->load->helper('form');
	$numero1=$this->input->post("number1");
	$numero2=$this->input->post('number2');
	$error["error"] ="error";
		if( ($numero1>=-1000 and $numero1<=1000) and ($numero2>=-1000 and $numero2<=1000))
		{
			if ($this->input->post('resta')){
				$resultado=$numero1-$numero2;
			}
			elseif($this->input->post('suma')){
				$resultado=$numero1+$numero2;
			}
			$data['result']=$resultado;
			$this->load->vars($data);
			$this->load->view('sumar_restar');
		}else{
		$data['result']="Error: Los Numeros no se encuentran en el rango";
		$this->load->vars($data);
		$this->load->view('sumar_restar');
		}
	}
	
}

?>
