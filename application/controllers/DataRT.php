<?php 
 
class DataRT extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('RT_model');
	}
 
	function index(){
		$data['role'] = $this->session->userdata('role');
        $data['judul'] = 'Data RT';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('rt/datart');
		$this->load->view('templates/footer');
	}

	function tambah(){
		$data['wilayah']=$this->RT_model->Wilayah();
		$data['role'] = $this->session->userdata('role');
        $data['judul'] = 'Data RT';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('rt/tambaheditrt',$data);
		$this->load->view('templates/footer');
	}

	function get_kabupaten()
	{
		$id_provinsi=$this->input->post('id');
		$data=$this->RT_model->Wilayah_kabupaten($id_provinsi);
		echo json_encode($data);
	}

	function get_kecamatan()
	{
		$id_kabupaten=$this->input->post('id');
		$data=$this->RT_model->Wilayah_kecamatan($id_kabupaten);
		echo json_encode($data);
	}

	function get_desa()
	{
		$id_kecamatan=$this->input->post('id');
		$data=$this->RT_model->Wilayah_desa($id_kecamatan);
		echo json_encode($data);
	}
}