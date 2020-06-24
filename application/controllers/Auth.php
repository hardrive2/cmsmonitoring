<?php 
 
class Auth extends CI_Controller{

 
	function login(){
		$this->load->view('auth/login');
	}

	function process(){
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('M_auth');
			$query = $this->M_auth->login($post);

			if($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'idlogin' => $row->id_login,
					'level'	=> $row->level
				);
					$this->session->set_userdata($params);
					echo "<script>
							alert('Selamat, Login berhasil');
							window.location='".site_url('dashboard')."';
					</script>";
			}else {
						echo "<script>
							alert('Login gagal');
							window.location='".site_url('auth/login')."';
					</script>";
			}
		}
	}

	function logout (){
		$params = array('id_login', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
