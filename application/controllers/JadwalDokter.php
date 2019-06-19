<?php 

class JadwalDokter extends MY_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->data['JudulWeb'] = 'Admistrator';
        $this->data['PageView'] = 'administrator/pages/jadwaldokter/view';
        

        if(!$this->input->post()){
            
            $this->data['DT_Jadwal_Dokter'] = $this->M_Proses->QueryJoin('SELECT    tb_jadwal_dokter.id_jadwal_dokter, 
                                                                                    tb_jadwal_dokter.nama_dokter , 
                                                                                    tb_jadwal_dokter.hari , 
                                                                                    tb_jadwal_dokter.jam_mulai , 
                                                                                    tb_jadwal_dokter.jam_selesai , 
                                                                                    tb_poli.id_poli,
                                                                                    tb_poli.nama_poli
                                                                            FROM tb_jadwal_dokter 
                                                                                    JOIN tb_poli ON tb_jadwal_dokter.id_poli = tb_poli.id_poli
                                                                                                
                                                                                    ');
            $this->data['DT_Poli'] = $this->M_Proses->GetData('tb_poli');
            $this->load->view($this->data['UrlTemplate'] , $this->data);
        }else{
            if($this->input->post('delete')){
                $id_jadwal_dokter = $this->input->post('id_jadwal_dokter');
                $where =  [
                    'id_jadwal_dokter' => $id_jadwal_dokter
                ];

                $sqlDelete = $this->M_Proses->Delete('tb_jadwal_dokter' , $where);
                
                if($sqlDelete){
                    echo "<script>
                            alert('Data berhasil di hapus');
                            window.location.href=('". base_url('index.php/JadwalDokter') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di hapus');
                            window.location.href=('". base_url('index.php/JadwalDokter') ."');
                        </script>";
                }
            }

            if($this->input->post('update')){

                $id_jadwal_dokter = $this->input->post('id_jadwal_dokter');
                $nama_dokter = $this->input->post('nama_dokter');
                $hari = $this->input->post('hari');
                $jam_mulai = $this->input->post('jam_mulai');
                $jam_selesai = $this->input->post('jam_selesai');
                
                $data = array(
                    'nama_dokter' => $nama_dokter,
                    'hari' => $hari,
                    'jam_mulai' => $jam_mulai,
                    'jam_selesai' => $jam_selesai
                );

                $where = array(
                    'id_jadwal_dokter' => $id_jadwal_dokter
                );
                
                $sqlUpdate = $this->M_Proses->Update('tb_jadwal_dokter' , $data , $where);

                if($sqlUpdate){
                    echo "<script>
                            alert('Data berhasil di Ubah');
                            window.location.href=('". base_url('index.php/JadwalDokter') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Ubah');
                            window.location.href=('". base_url('index.php/JadwalDokter') ."');
                        </script>";
                }
            }

            if($this->input->post('insert')){
                $nama_dokter = $this->input->post('nama_dokter');
                $hari = $this->input->post('hari');
                $jam_mulai = $this->input->post('jam_mulai');
                $jam_selesai = $this->input->post('jam_selesai');
                $nama_poli = $this->input->post('nama_poli');

                $data = [
                    'nama_dokter' => $nama_dokter,
                    'hari' => $hari,
                    'jam_mulai' => $jam_mulai,
                    'jam_selesai' => $jam_selesai,
                    'id_poli' => $nama_poli
                ];

                $sqlInsert = $this->M_Proses->Insert('tb_jadwal_dokter' , $data);

                if($sqlInsert){
                    echo "<script>
                            alert('Data berhasil di Tambahkan');
                            window.location.href=('". base_url('index.php/JadwalDokter') ."');
                        </script>";
                }else{
                    echo "<script>
                            alert('Maaf, Data gagal di Tambahkan');
                            window.location.href=('". base_url('index.php/JadwalDokter') ."');
                        </script>";
                }



            }
        }
    }
}