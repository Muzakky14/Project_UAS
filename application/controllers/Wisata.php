<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

	//check user sudah login atau belum
	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
	public function index()
	{	
		$this->load->model('wisata_model');
		$data['wisata_depok'] = $this->wisata_model->getAllData();
		$this->load->view('wisata/index',$data);
	}

	public function delete($id){
		//delete * from pasien where id = id
		$this->load->model('wisata_model');//load model
		$where = array('id' => $id);
		$this->wisata_model->delete(array('id'=>$id),'wisata_depok');// query delete(delete from pasien where id = $id)
		redirect('wisata/index');


	}

	public function save(){
		
		$this->load->view('wisata/tambah_wisata');
	}
	
	public function tambah(){
		
		//panggil model
		$this->load->model('wisata_model');
		
		//tambah data
		$data['nama'] = $this->input->post('nama');
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['fasilitas'] = $this->input->post('fasilitas');
		$data['bintang'] = $this->input->post('bintang');
		$data['kontak'] = $this->input->post('kontak');
		$data['email'] = $this->input->post('email');
		$data['alamat'] = $this->input->post('alamat');
		
		$data['foto'] = $this->wisata_model->upload_foto();

		//method save data
		$this->wisata_model->save($data);

		//redirect	
		return redirect('wisata/index');


	}
	public function profile($id){
		$this->load->model('wisata_model');
		$data['wisata_depok'] = $this->wisata_model->findById($id);
		$this->load->view('wisata/profile',$data);
	}

	public function edit($id){
		$this->load->model('wisata_model');
		$data['wisata_depok'] = $this->wisata_model->findById($id);
		$this->load->view('wisata/edit',$data);
	}

	public function update(){
		//panggil model
		$this->load->model('wisata_model');
		

		//inputan id
		$id = $this->input->post('id');
		
		//tambah data
		$data['nama'] = $this->input->post('nama');
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['fasilitas'] = $this->input->post('fasilitas');
		$data['bintang'] = $this->input->post('bintang');
		$data['kontak'] = $this->input->post('kontak');
		$data['email'] = $this->input->post('email');
		$data['alamat'] = $this->input->post('alamat');
		
		$data['foto'] = $this->wisata_model->upload_foto();

		//method update data
		$this->wisata_model->update($data,$id);

		//redirect	
		return redirect('wisata/index');


	}
}