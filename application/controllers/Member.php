<?php
	/**
	* 
	*/
	class Member extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function createMember(){
			if (isset($_POST['btnSubmit'])){
				$data = array(
					'Nama' => $this->input->post('nama'),
					'Jenis_Kelamin' => $this->input->post('jk'),
					'Tgl_Lahir' => $this->input->post('ttl'),
					'Alamat' => $this->input->post('alamat'),
					'No_Hp' => $this->input->post('no_hp'),
					'No_Ktp' => $this->input->post('no_ktp')
				);
				$this->db->like('Nama', $this->input->post('nama'));
				$query = $this->db->get('tb_member');
				if ($query->num_rows() > 0) {
					$this->session->set_flashdata('gagal','nama anda sudah terdaftar!');
					redirect(base_url('asia'));
				}else{
					$this->db->insert('tb_member',$data);
					$this->session->set_flashdata('success','Menambahkan Member');
					redirect(base_url('asia'));
				}
			}
		}
	}