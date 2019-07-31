<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function kembali(){
		$this->load->view('welcome/index');
	}

	//cek data login 
	public function ceklogin(){
		if(isset($_POST['submit'])){
			$user = $this->input->post('email',true);
			$pass = $this->input->post('password',true);
			$cek = $this->app_model->proseslogin($user,$pass);
			$hasil = count($cek);//hitung nilai jika lebih dari 0 berhasil 
			if($hasil>0){
				//digunakan untuk mengalihakan ke halaman beranda yang ada di controller
				redirect('welcome/beranda');
				/*
				$log = $this->db->get_where('users',array('username' =>$user,'password'=>$pass))->row();
					if(){

					}
				//echo $log->email ;
				*/
			}else{
				redirect('welcome/index');
			}

		}
	}
	public function regist(){
		
			$nama = $this->input->post('name', true);
			$email = $this->input->post('email', true);
			$username = $this->input->post('username', true);
			$password = $this->input->post('password', true);
			$pass2 = $this->input->post('password2', true);
			$dataValid = "YA";
			if (strlen(trim($nama))==0) {
				echo "Nama Harus Diisi! <br />";
				$dataValid = "TIDAK";
			}
			
			if (strlen(trim($username))==0) {
				echo "username Harus Diisi! <br />";
				$dataValid = "TIDAK";
			}
			
			if (strlen(trim($email))==0) {
				echo "email Harus Diisi! <br />";
				$dataValid = "TIDAK";
			}
			if (strlen(trim($password))==0) {
				echo "pasword Harus Diisi! <br />";
				$dataValid = "TIDAK";
			}
			if (strlen(trim($pass2))==0) {
				echo "paswd Harus Diisi! <br />";
				$dataValid = "TIDAK";
			}
			if($password!=$pass2){
				echo "password 1 dan password 2 beda";
				$dataValid = "TIDAK";
			}
			
			if ($dataValid =="TIDAK") {
				echo "Masih Ada Kesalahan, silahkan perbaiki! </br>";
				echo "<input type='button' value='Kembali'
						onClick='self.history.back()'>";
				exit;
			}
			
			$data = array('nama'=>$nama, 'email'=>$email,'username'=>$username,'password'=>$password,'nama'=>$nama);
			$this->app_model->input_data($data, 'users');
			$this->load->view('inputsukses');
	}
	public function daftar(){
		if(isset($_POST['daftar'])){
			$this->load->view('daftar');
		}
	}
	public function beranda(){
		$this->load->view('beranda');
	}
}
