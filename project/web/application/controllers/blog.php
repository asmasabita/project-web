<?php
class blog extends CI_Controller {
    public function index(){
        $data ['nama'] = "CodeIgniter 3";
        
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view("blog/index", $data);
        $this->load->view('layouts/foother');
    }
    public function add(){
        $this->load->view("blog/add");
    }
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/setbar');
        $this->load->view('blog/form');
        $this->load->view('layouts/foother');
    }
}
?>