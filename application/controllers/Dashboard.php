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
        $this->load->view('register',$data);
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

    


}

?>