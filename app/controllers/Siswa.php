<?php
class siswa extends Controller {
    public function index(){
        $data["judul"] = 'Daftar Siswa';
        $data["siswa"] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

     public function detail($id){
        $data["judul"] = 'Detail Siswa';
        $data["siswa"] = $this->model('Siswa_model')->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('siswa_model')->tambahDataSiswa($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan','success');
            header('location:' . BASEURL .'/siswa');
        }else{
            Flasher::setFlash('gagal', 'ditambahkan','warning');
            header('location:' . BASEURL .'/siswa');
        }
    }

    public function hapus($id){
       if($this->model('siswa_model')->hapusDataSiswa($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location:' . BASEURL .'/siswa');
       }else{
        Flasher::setFlash('gagal', 'dihapus', 'warning');
        header('location:' . BASEURL . '/siswa');
       }
    }

    public function ubah(){
        // Jika request AJAX (untuk ambil data)
        if(isset($_POST['ajax']) && $_POST['ajax'] == 'true'){
            header('Content-Type: application/json');
            echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
            exit;
        }
        
        // Jika bukan AJAX (untuk update data)
        if($this->model('Siswa_model')->ubahDataSiswa($_POST) > 0){
            Flasher::setFlash('berhasil','diubah','success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }else{
            Flasher::setFlash('gagal', 'diubah', 'warning');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function cari(){
        $data["judul"] = 'Daftar Siswa';
        $data["siswa"] = $this->model('Siswa_model')->cariDataSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }
}