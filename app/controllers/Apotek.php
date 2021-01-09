<?php 

class Apotek extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Apotek';
        $data['apt'] = $this->model('Apotek_model')->getAllApotek();
        $this->view('templates/header', $data);
        $this->view('apotek/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Apotek';
        $data['apt'] = $this->model('Apotek_model')->getApotekById($id);
        $this->view('templates/header', $data);
        $this->view('apotek/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Apotek_model')->tambahDataApotek($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/Apotek');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Apotek');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Apotek_model')->hapusDataApotek($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/Apotek');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/Apotek');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Apotek_model')->getApotekById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Apotek_model')->ubahDataApotek($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/Apotek');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/Apotek');
            exit;
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Apotek';
        $data['apt'] = $this->model('Apotek_model')->cariDataApotek($_POST['keyword']);
        $this->view('templates/header', $data);
        $this->view('apotek/index', $data);
        $this->view('templates/footer');
    }

}