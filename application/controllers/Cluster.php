<?php
/**
 * 
 */
class Cluster extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('M_cluster');
        $this->load->model('M_data');
    }

	function index(){
        $data['title'] = 'Data Anggota';
        $data['path'] = "v_cluster";
        $data['cluster'] = $this->M_cluster->getcluster();
        $data['extn'] = $this->M_cluster->getextension();
        $this->load->view('template_admin/master_template',$data);
    }

    function cluster($id){
        $data['title'] = 'Cluster';
        $data['path'] = "cluster/cluster";
        $data['id'] = $id;
        $data['data']= $this->M_data->tampil_per_cluster(array('cluster' => $id))->result();
        $this->load->view('master_template',$data);
    }
    function extension($id){
        $data['title'] = 'extension';
        $data['path'] = "cluster/extension";
        $data['id'] = $id;
        $data['extn']= $this->M_data->getbyextension(array('extension' => $id))->result();
        $this->load->view('master_template',$data);
    }
	function tambah_aksi(){
			$cluster = $this->input->post('cluster');
			$data = array(
				'cluster' => $cluster
				);
			$this->M_cluster->input_data($data,'add_cluster');
		redirect('cluster');
	}
	function add_cluster(){
        //Melakukan Validasi Form Untuk Menjamin data terisi semua
        $config = array(
                'field' => 'cluster',
                'label' => 'cluster',
                'rules' => ''
            );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == TRUE){ //Jika validasi Form Berhasil
            //Input Ke Tabel Anggota
            $data = $this->input->post('cluster');

            $this->M_cluster->addcluster($cluster);
            //Input Ke Tabel Simpanan Pokok
            $this->session->set_flashdata("input_success","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil ditambahkan.<br></div>");

        }else{ //Jika validasi Form Gagal
            $gagal = validation_errors();
            $this->session->set_flashdata("input_failed","<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Gagal Ditambahkan!!<br>".$gagal."</div>");
        }
        redirect(base_url('Cluster'));
    }
	function add_extension(){
        //Melakukan Validasi Form Untuk Menjamin data terisi semua
        $config = array(
            array(
                'field' => 'extension',
                'label' => 'extension',
                'rules' => ''
            ),
            array(
                'field' => 'cluster',
                'label' => 'cluster',
                'rules' => 'required'
            ),
        );
        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == TRUE){ //Jika validasi Form Berhasil
            //Input Ke Tabel Anggota
            $data = array(
                'extension' => $this->input->post('extension'),
                'cluster' => $this->input->post('cluster'),
            );
            $this->M_cluster->addextension($data);
            //Input Ke Tabel Simpanan Pokok
            $this->session->set_flashdata("input_success","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil ditambahkan.<br></div>");

        }else{ //Jika validasi Form Gagal
            $gagal = validation_errors();
            $this->session->set_flashdata("input_failed","<div class='alert alert-danger'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data Gagal Ditambahkan!!<br>".$gagal."</div>");
        }
        redirect('Cluster');
    }
    function edit_extension($id){
        $extension = $this->input->post('id');
        $data['extension'] = $this->M_data->get1extension(array('extension' => $extension));
        $this->load->view('cluster/edit_extension',$data);
    }
    function delete_extension($p)
    {
        $where = ['extension' => $p];
        if ($this->M_cluster->delete_extension($where)) {
            $this->session->set_flashdata("delete_success","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil dihapus.<br></div>");
        }else{
            $this->session->set_flashdata("delete_failed","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data gagal dihapus.<br></div>");
        }
        redirect(base_url('cluster'));
    }
    function delete($p)
    {
        $where = ['cluster' => $p];
        if ($this->M_cluster->delete_cluster($where)) {
            $this->session->set_flashdata("delete_success","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data berhasil dihapus.<br></div>");
        }else{
            $this->session->set_flashdata("delete_failed","<div class='alert alert-success'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data gagal dihapus.<br></div>");
        }
        redirect(base_url('cluster'));
    }
}


