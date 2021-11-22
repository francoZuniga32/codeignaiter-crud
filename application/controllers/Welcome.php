<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
                $this->load->model('Personas');
                $this->load->helper('url_helper');
	}
	public function index(){	
		$query = $this->Personas->getPersonas(TRUE);
		$data = array('personas' => $query);
		$this->load->view('welcome_message', $data);
	}

	public function edit($id){
		$query = $this->Personas->getPersona($id, TRUE);
		$data = array('persona' => $query);
		$this->load->view('edit', $data);
	}

	public function editprocess(){
		$this->Personas->updatePersona($_POST['id'], $_POST['dni'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['direccion']);
		redirect('/', 'refresh');
	}

	public function insert(){
		$this->load->view('insert');
	}

	public function insertprocess(){
		$this->Personas->insertPersona($_POST['dni'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['direccion']);
		redirect('/', 'refresh');
	}

	public function delete($id){
		$this->Personas->activePersona($id, FALSE);
		redirect('/', 'refresh');
	}
}
