<?php 

class DataParamedis extends MY_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->data['JudulWeb'] = 'Admistrator';
        $this->data['PageView'] = 'administrator/pages/dataparamedis/view';
        

        if(!$this->input->post()){
            
            $this->data['DT_paramedis'] = $this->M_Proses->QueryJoin('SELECT    tb_paramedis.id_paramedis, 
                                                                                tb_paramedis.kd_paramedis , 
                                                                                tb_paramedis.nama_paramedis , 
                                                                                tb_paramedis.jenis_kelamin , 
                                                                                tb_paramedis.no_izin_paramedis , 
                                                                                tb_paramedis.tempat_lahir ,
                                                                                tb_paramedis.tanggal_lahir, 
                                                                                tb_paramedis.alamat,
                                                                                tb_poli.id_poli,
                                                                                tb_poli.nama_poli
                                                                    FROM tb_paramedis 
                                                                                JOIN tb_poli ON tb_paramedis.id_poli = tb_poli.id_poli
                                                                                        
                                                                                ');
            $this->data['DT_Poli'] = $this->M_Proses->GetData('tb_poli');
            $this->load->view($this->data['UrlTemplate'] , $this->data);
        }else{
            if($this->input->post('delete')){
                $id_paramedis = $this->input->post('id_paramedis');
                $where =  [
                    'id_paramedis' => $id_paramedis
                ];

                $sqlDelete = $this->M_Proses->Delete('tb_paramedis' , $where);
                
                if($sqlDelete){
                    echo "<script>
                            alert('Data berhasil di hapus');
                            window.location.href=('". base_url('index.php/DataParamedis') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di hapus');
                            window.location.href=('". base_url('index.php/DataParamedis') ."');
                        </script>";
                }
            }

            if($this->input->post('update')){

                $id_paramedis = $this->input->post('id_paramedis');
                $kd_paramedis = $this->input->post('kd_paramedis');
                $nama_paramedis = $this->input->post('nama_paramedis');
                $jenis_kelamin = $this->input->post('jenis_kelamin');
                $no_izin_paramedis = $this->input->post('no_izin_paramedis');
                $tempat_lahir = $this->input->post('tempat_lahir');
                $tanggal_lahir = $this->input->post('tanggal_lahir');
                $alamat = $this->input->post('alamat');
                $nama_poli = $this->input->post('nama_poli');
                

                $data = array(
                    'kd_paramedis' => $kd_paramedis,
                    'nama_paramedis' => $nama_paramedis,
                    'jenis_kelamin' => $jenis_kelamin,
                    'no_izin_paramedis' => $no_izin_paramedis,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir, 
                    'alamat' => $alamat
                );

                $where = array(
                    'id_paramedis' => $id_paramedis
                );
                
                $sqlUpdate = $this->M_Proses->Update('tb_paramedis' , $data , $where);

                if($sqlUpdate){
                    echo "<script>
                            alert('Data berhasil di Ubah');
                            window.location.href=('". base_url('index.php/DataParamedis') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Ubah');
                            window.location.href=('". base_url('index.php/DataParamedis') ."');
                        </script>";
                }
            }

            if($this->input->post('insert')){
                $kd_paramedis = $this->input->post('kd_paramedis');
                $nama_paramedis = $this->input->post('nama_paramedis');
                $jenis_kelamin = $this->input->post('jenis_kelamin');
                $no_izin_paramedis = $this->input->post('no_izin_paramedis');
                $tempat_lahir = $this->input->post('tempat_lahir');
                $tanggal_lahir = $this->input->post('tanggal_lahir');
                $alamat = $this->input->post('alamat');
                $nama_poli = $this->input->post('nama_poli');

                $data = [
                    'kd_paramedis' => $kd_paramedis,
                    'nama_paramedis' => $nama_paramedis,
                    'jenis_kelamin' => $jenis_kelamin,
                    'no_izin_paramedis' => $no_izin_paramedis,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'alamat' => $alamat,
                    'id_poli' => $nama_poli
                ];

                $sqlInsert = $this->M_Proses->Insert('tb_paramedis' , $data);

                if($sqlInsert){
                    echo "<script>
                            alert('Data berhasil di Tambahkan');
                            window.location.href=('". base_url('index.php/DataParamedis') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Tambahkan');
                            window.location.href=('". base_url('index.php/DataParamedis') ."');
                        </script>";
                }



            }
        }
    }
}