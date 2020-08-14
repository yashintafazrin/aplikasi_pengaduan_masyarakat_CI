<?php 

Class Dashboard extends CI_Controller{
    public function index(){
        $data['title'] = "Belajar CI";
        $this->load->view('depan',$data);
    }

    public function login(){
        $data['title'] = "Login";
        $this->load->view('v_login',$data);
    }

    public function register(){
        $data['title'] = "Register";
        $data['petugas'] = $this->modelsistem->get_petugas();
        $data['c_petugas'] = $this->modelsistem->count_petugas();
        $this->load->view('registrasi',$data);
    }

    public function menulis_laporan(){
        $data['title'] = "Tulis Laporan";
        $this->load->view('menulis_laporan',$data);
    }

    public function detail_laporan(){
        $data['title'] = "Detail Laporan";
        $this->load->view('detail_laporan',$data);
    }

    public function laporan_ms(){
        $data['title'] = "Data Laporan";
        $this->load->view('laporan_ms',$data);
    }

    public function cek_tanggapanms(){
        $data['title'] = "Cek Tanggapan";
        $this->load->view('cek_tanggapanms',$data);
    }
	
	public function simpan_data(){
        $this->modelsistem->simpan_db();

    }

    public function __construct(){
        parent::__construct();
        $this->load->model('modelsistem');
    }

    


}

?>
