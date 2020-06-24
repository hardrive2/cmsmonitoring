<?php 
 
class Dashboard extends CI_Controller{


	function __construct(){
        parent::__construct();
        $this->load->model('M_cluster');
        $this->load->model('M_data');
    }
 
	function index(){
		$data['title'] = 'Dashboard';
        $data['path'] = "dashboard";
        //$data['auxreason'] = $this->db->query('SELECT * FROM `synonyms` WHERE acd_no = 1')->result();
		$data['data'] = $this->M_data->tampil_semua_cluster()->result();

		
		$this->load->view('master_template',$data);
	}
}
