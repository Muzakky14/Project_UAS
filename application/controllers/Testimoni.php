<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

	//check user sudah login atau belum
	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
	public function index()
	{	
		$this->load->model('testimoni_model');
		$data['testimoni'] = $this->testimoni_model->getAllData();
		$this->load->view('testimoni/index',$data);
	}

	public function delete($id){
		//delete * from pasien where id = id
		$this->load->model('testimoni_model');//load model
		$where = array('id' => $id);
		$this->testimoni_model->delete(array('id'=>$id),'testimoni_depok');// query delete(delete from pasien where id = $id)
		redirect('testimoni/index');


	}

	public function save(){
		
		$this->load->view('testimoni/tambah_testimoni');
	}
	
	public function tambah(){
		
		//panggil model
		$this->load->model('testimoni_model');
		
		//tambah data
		$data['nama'] = $this->input->post('nama');
		$data['email'] = $this->input->post('email');
		$data['wisata_id'] = $this->input->post('wisata_id');
		$data['profesi_id'] = $this->input->post('profesi_id');
		$data['rating'] = $this->input->post('rating');
		$data['komentar'] = $this->input->post('komentar');
		$data['foto'] = $this->testimoni_model->upload_foto();

		//method save data
		$this->testimoni_model->save($data);

		//redirect	
		return redirect('testimoni/index');


	}
	public function profile($id){
		$this->load->model('testimoni_model');
		$data['testimoni'] = $this->testimoni_model->findById($id);
		$this->load->view('testimoni/profile',$data);
	}

	public function edit($id){
		$this->load->model('testimoni_model');
		$data['testimoni_depok'] = $this->testimoni_model->findById($id);
		$this->load->view('testimoni/edit',$data);
	}

	public function update(){
		//panggil model
		$this->load->model('testimoni_model');
		

		//inputan id
		$id = $this->input->post('id');
		
		//tambah data
		$data['nama'] = $this->input->post('nama');
		$data['email'] = $this->input->post('email');
		$data['wisata_id'] = $this->input->post('wisata_id');
		$data['profesi_id'] = $this->input->post('profesi_id');
		$data['rating'] = $this->input->post('rating');
		$data['komentar'] = $this->input->post('komentar');
		$data['foto'] = $this->testimoni_model->upload_foto();

		//method update data
		$this->testimoni_model->update($data,$id);

		//redirect	
		return redirect('testimoni/index');


	}
}