<?php 

class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}
	public function index(){
		$data['member'] = $this->db->get('tb_member')->result();
		$this->load->view('admin',$data);
	}

	public function hapus($id){
		$this->db->delete('tb_member',array('id_member'=> $id));
		$this->session->set_flashdata('success','Data berhasil di hapus');
		redirect(base_url('admin'));
	}
}