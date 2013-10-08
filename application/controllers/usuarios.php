<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuarios extends CI_Controller {


	public function crear()
	{
		
		$this->load->view('crear'); 
}
	public function modificar()
	{
		
		$this->load->view('modificar'); 
}

public function listar()
	{
		
		$this->load->view('listar'); 
}
	public function eliminar()
	{
		
		$this->load->view('eliminar'); 
}

public function changepassword()
	{
		
		$this->load->view('changepassword'); 
}

public function salir()
	{
		
		$this->load->view('salir'); 
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
