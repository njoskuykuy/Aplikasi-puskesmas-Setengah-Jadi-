<?php

// class DataBidang extends MY_Controller{

//     public function __construct(){
//         parent::__construct();
//         $this->load->model('M_Process');
//     }

//     public function index(){

//         $this->data['JudulWeb'] = 'Administrator';
//         $this->data['PageView'] = 'administrator/pages/databidang/view';
//         $this->load->view($this->data['UrlTemplate'], $this->data);
//     }
// }

class Dashboard extends MY_Controller{

    public function __construct(){
        parent::__construct();
        
    }
    public function index(){

        $this->load->view('administrator/template');
    }
}