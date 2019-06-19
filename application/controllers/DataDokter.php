<?php 

class DataDokter extends MY_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->data['JudulWeb'] = 'Admistrator';
        $this->data['PageView'] = 'administrator/pages/datadokter/view';
        

        if(!$this->input->post()){
            
            $this->data['DT_Dokter'] = $this->M_Proses->QueryJoin('SELECT   tb_dokter.id_dokter, 
                                                                            tb_dokter.kd_dokter , 
                                                                            tb_dokter.nama_dokter , 
                                                                            tb_dokter.jenis_kelamin , 
                                                                            tb_dokter.no_induk_dokter , 
                                                                            tb_dokter.tempat_lahir ,
                                                                            tb_dokter.tanggal_lahir, 
                                                                            tb_dokter.alamat,
                                                                            tb_poli.id_poli,
                                                                            tb_poli.nama_poli
                                                                    FROM tb_dokter 
                                                                            JOIN tb_poli ON tb_dokter.id_poli = tb_poli.id_poli
                                                                                        
                                                                            ');
            $this->data['DT_Poli'] = $this->M_Proses->GetData('tb_poli');
            $this->load->view($this->data['UrlTemplate'] , $this->data);
        }else{
            if($this->input->post('delete')){
                $id_dokter = $this->input->post('id_dokter');
                $where =  [
                    'id_dokter' => $id_dokter
                ];

                $sqlDelete = $this->M_Proses->Delete('tb_dokter' , $where);
                
                if($sqlDelete){
                    echo "<script>
                            alert('Data berhasil di hapus');
                            window.location.href=('". base_url('index.php/DataDokter') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di hapus');
                            window.location.href=('". base_url('index.php/DataDokter') ."');
                        </script>";
                }
            }

            if($this->input->post('update')){

                $id_dokter = $this->input->post('id_dokter');
                $kd_dokter = $this->input->post('kd_dokter');
                $nama_dokter = $this->input->post('nama_dokter');
                $jenis_kelamin = $this->input->post('jenis_kelamin');
                $no_induk_dokter = $this->input->post('no_induk_dokter');
                $tempat_lahir = $this->input->post('tempat_lahir');
                $tanggal_lahir = $this->input->post('tanggal_lahir');
                $alamat = $this->input->post('alamat');
                $nama_poli = $this->input->post('nama_poli');
                

                $data = array(
                    'kd_dokter' => $kd_dokter,
                    'nama_dokter' => $nama_dokter,
                    'jenis_kelamin' => $jenis_kelamin,
                    'no_induk_dokter' => $no_induk_dokter,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir, 
                    'alamat' => $alamat
                );

                $where = array(
                    'id_dokter' => $id_dokter
                );
                
                $sqlUpdate = $this->M_Proses->Update('tb_dokter' , $data , $where);

                if($sqlUpdate){
                    echo "<script>
                            alert('Data berhasil di Ubah');
                            window.location.href=('". base_url('index.php/DataDokter') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Ubah');
                            window.location.href=('". base_url('index.php/DataDokter') ."');
                        </script>";
                }
            }

            if($this->input->post('insert')){
                $kd_dokter = $this->input->post('kd_dokter');
                $nama_dokter = $this->input->post('nama_dokter');
                $jenis_kelamin = $this->input->post('jenis_kelamin');
                $no_induk_dokter = $this->input->post('no_induk_dokter');
                $tempat_lahir = $this->input->post('tempat_lahir');
                $tanggal_lahir = $this->input->post('tanggal_lahir');
                $alamat = $this->input->post('alamat');
                $nama_poli = $this->input->post('nama_poli');

                $data = [
                    'kd_dokter' => $kd_dokter,
                    'nama_dokter' => $nama_dokter,
                    'jenis_kelamin' => $jenis_kelamin,
                    'no_induk_dokter' => $no_induk_dokter,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'alamat' => $alamat,
                    'id_poli' => $nama_poli
                ];

                $sqlInsert = $this->M_Proses->Insert('tb_dokter' , $data);

                if($sqlInsert){
                    echo "<script>
                            alert('Data berhasil di Tambahkan');
                            window.location.href=('". base_url('index.php/DataDokter') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Tambahkan');
                            window.location.href=('". base_url('index.php/DataDokter') ."');
                        </script>";
                }



            }
        }
    }
}