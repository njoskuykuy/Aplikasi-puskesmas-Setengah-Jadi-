<?php

class Akun extends MY_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->data['JudulWebsite'] = "administrator";
        $this->data['PageView'] = "administrator/pages/akun/view";
        $this->data['UrlBack'] = "index.php/apps/akun";
       
        if(!$this->input->post()){
           $this->load->view($this->data['UrlTemplate'] , $this->data);
       }else {
           if($this->input->post('update')){

            $nama_user = $this->input->post('nama_user');
            $alamat_user = $this->input->post('alamat_user');
            $email_user = $this->input->post('email_user');
            $username = $this->input->post('username');
            $jk = $this->input->post('jk');
            $jenis_user = $this->input->post('jenis_user');
            

            $data = array(
                'nama_user' => $nama_user,
                'alamat_user' => $alamat_user,
                'email_user' => $email_user,
                'username' => $username,
                'jk' => $jk,
                'jenis_user' => $jenis_user
            );
            
            $where = array(
                'id_user' => $this->data['sess_id_user'] 
            );

            $sqlUpdate = $this->M_Proses->Update('tb_user' , $data, $where);
            if($sqlUpdate){
                echo "<script>
                            alert('Data berhasil di Ubah');
                            window.location.href=('". base_url($this->data['UrlBack']) ."');
                        </script>";
            }else{
                echo "<script>
                            alert('Data Gagal di Ubah');
                            window.location.href=('". base_url($this->data['UrlBack']) ."');
                        </script>";
            }
           }else if($this->input->post('ganti-password')){
                $password_lama = md5($this->input->post('password_lama'));
                $password_baru = $this->input->post('password_baru');
                $ulangi_password =  $this->input->post('ulangi_password');
                $enkripsi = md5($password_baru);

                if($password_lama == $this->data['sess_password']){
                    if($password_baru == $ulangi_password){
                       $data = array('password' => $enkripsi);  
                       $where = array('id_user' => $this->data['sess_id_user']);
                       
                       $sqlGantiPassword = $this->M_Proses->UpdateData('tb_user' , $data, $where);
                       if($sqlGantiPassword){
                        echo "<script>
                                    alert('Password berhasil di Ubah');
                                    window.location.href=('". base_url('index.php/Akun') ."');
                               </script>";
                        }else{
                            echo "<script>
                                    alert('Password gagal di Ubah');
                                    window.location.href=('". base_url('index.php/Akun') ."');
                                  </script>";
                        }
                    }
                }

           } else if($this->input->post('ganti-foto')){
                $lokasi_file = $_FILES['thumbnail']['tmp_name'];
                if(!empty($lokasi_file)){
                    $nama_file = $_FILES['thumbnail']['name'];
                    $photoold = $_POST['photoold'];
                    // var_dump($photoold); die;
                    $rename = $this->RenameFile($nama_file, 'Profil');
                    $data = array(
                        'foto' => $rename
                    );
                }else{
                    $data = array(
                        'foto' => $photoold
                    );


                }

                $where = array(
                    'id_user' => $this->data['sess_id_user']
                );

                if(move_uploaded_file($lokasi_file, $this->data['Folder'].$rename)){
                    $this->DeleteFile($photoold);
                    $sqlUpdate = $this->M_Proses->Update('tb_user' , $data, $where);
                    if($sqlUpdate){
                        echo "<script>
                            alert('Selamat Akun Anda berhasil diperbaharui.');
                             window.location.href=('". base_url($this->data['UrlBack']) ."');
                        </script>";
                    }else{
                        echo "<script>
                        alert('Maaf, Akun anda gagal diperbaharui.');
                       // window.location.href=('". base_url($this->data['UrlBack']) ."');
                    </script>";
                    }
                }else {
                    echo "<script>
                        alert('Data Gagal di ubah karena ada masalah sistem');
                        // window.location.href=('". base_url($this->data['UrlBack']) ."');
                    </script>";
                }
           }else{
                echo "<script>
                    alert('Maaf, terjadi masalah internal sistem');
                   // window.location.href=('". base_url($this->data['UrlBack']) ."');
                </script>";
           }
       }
    }
}