<?php

class Login extends CI_Controller{
    
    

    public $data = array(

        'JudulWebsite' => 'Administator',
        'PageView' => '',
        "UrlTemplate" => "administrator/template",
        'UserAwal' => "user/awal"
    );

    public function __construct(){
        parent::__construct();
        $this->load->model('M_Proses');
    }


    public function index(){

        $this->data['JudulWebsite'] = 'Administrator';
        $this->data['PageView'] = 'user/pages/login/view';
        $this->load->view($this->data['UserAwal'] , $this->data);

    }


    public function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        

        $cekLogin = $this->M_Proses->cek_login("tb_user", $where)->num_rows();
    
        // login logic code here
        if($cekLogin > 0){
            // pengambilan data
            $where = array(
                'username' => $username,
                'password' => md5($password)
            );

            // var_dump($where); die;

            $data =$this->M_Proses->GetDataById("tb_user" , $where);
            

            if(!empty($data)){
                foreach($data as $dataUser){
                    $id_user = $dataUser->id_user;
                }

                $dataSession = array(
                    'id_session' => $id_user,
                    'login_session' => true
                );

                // make a session
                $this->session->set_userdata($dataSession);
                redirect('DataBidang');
            }else {
                echo "  <script>
                            alert('Maaf, Terjadi kesalahan. Coba beberapa saat lagi');
                            window.location=('". base_url('index.php/login') ."');
                        </script>";
            }
    
        }else {
            echo "  <script>
                        alert('Maaf, Username/Password salah!');
                         window.location=('". base_url('index.php/login') ."');
                    </script>";
        }

    }

    public function aksi_logout(){
        $this->session->unset_userdata($dtSession);
        $this->session->sess_destroy($dtSession);
        redirect('login');

    }


}