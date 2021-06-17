<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("supplier_model");
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'StepSiscer';
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('blank', $data);
		$this->load->view('_partials/foot', $data);
	}

	public function profil()
	{
		$data['title'] = 'User Profile';
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('profil', $data);
		$this->load->view('_partials/foot', $data);
	}

	public function supplier()
	{
		$data['title'] = 'Data Supplier';
		$data['supplier'] = $this->supplier_model->getAll();
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('supplier', $data);
		$this->load->view('_partials/foot', $data);
	}
	
	public function add_supplier()
	{
		$data['title'] = 'Tambah Data Supplier';
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('add_supplier', $data);
		$this->load->view('_partials/foot', $data);
	}
	
	public function create_data_supplier()
	{
		$data['title'] = 'Tambah Data Supplier';
		$query = $this->supplier_model->create();

		if($query){
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data tersimpan</div>');
			redirect('welcome/supplier');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak tersimpan</div>');
			redirect('welcome/supplier');
		}
		
	}
	
	public function update_supplier($id)
	{
		$data['title'] = 'Ubah Data Supplier';
		$data['supplier'] = $this->db->get_where('tb_supplier', ['id_anggota'=>$id])->row_array();
		$this->load->view('_partials/head', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/topbar', $data);
		$this->load->view('update_supplier', $data);
		$this->load->view('_partials/foot', $data);
	}
	
	public function delete_supplier($id)
	{
		$data['title'] = $id;
		
		$this->supplier_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data terhapus</div>');		
		redirect('welcome/supplier');
	}
}
