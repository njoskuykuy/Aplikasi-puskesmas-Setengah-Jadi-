<?php 

class MY_Controller extends CI_Controller{

    
    public $data = array(

        "JudulWebsite" => "Administrator",
        "PageView" => "",
        "UrlTemplate" => "administrator/template",
        "UserAwal" => "user/awal",
        'TextEditor' => FALSE,
        'PicForbid' => 'empty_pic.png',
        'Folder' => 'assets/images/' 
        
    );

    public function __construct(){
        parent::__construct();
        $this->load->model('M_Proses');

        if($this->session->userdata('login_session') == true){
            $where = array(
                'id_user' => $this->session->userdata('id_session')
            );
            $data = $this->M_Proses->GetDataById('tb_user' , $where);

            if(!empty($data)){
                foreach ($data as $key){
                    
                    $this->data['sess_id_user'] = $key->id_user;
                    $this->data['sess_nama_user'] = $key->nama_user;
                    $this->data['sess_alamat_user'] = $key->alamat_user;
                    $this->data['sess_email_user'] = $key->email_user;
                    $this->data['sess_username'] = $key->username;
                    $this->data['sess_password'] = $key->password;
                    $this->data['sess_foto'] = $key->foto;
                    $this->data['sess_jk'] = $key->jk;
                    $this->data['sess_jenis_user'] = $key->jenis_user;
                }
            }
        }else{
            redirect(base_url('index.php/login'));
        }
    }

    function RenameFile($nama_file,$prefix){
        $ekstensi = GetExtensi($nama_file);
        $thumbnail = date("Y-m-d").'-'.rand(0,999).'-'.$prefix.'.'.$ekstensi;
        return $thumbnail;
    }

   public function DeleteFile($oldthumbnail){
    $Folder = $this->data['Folder'];
    if(file_exists($Folder.$oldthumbnail)){
        if($oldthumbnail != $this->data['PicForbid']){
            unlink("$Folder$oldthumbnail");
        }
    }
   }
}