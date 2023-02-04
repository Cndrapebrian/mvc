<?php

class Pemesan extends Controller {
    public function index  ()
    {
        $data['judul'] = 'Daftar Pemesan';
        $data['pms'] = $this->model('Pemesan_model')->getAllPemesan();
        $this->view('templates/header', $data);
        $this->view('pemesan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Pemesan';
        $data['pms'] = $this->model('Pemesan_model')->getPemesanById($id);
        $this->view('templates/header', $data);
        $this->view('pemesan/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Pemesan_model')->tambahDataPemesan($_POST) > 0 ) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/pemesan');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/pemesan');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Pemesan_model')->hapusDataPemesan($id) > 0 ) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/pemesan');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/pemesan');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Pemesan';
        $data['pms'] = $this->model('Pemesan_model')->cariDataPemesan();
        $this->view('templates/header', $data);
        $this->view('pemesan/index', $data);
        $this->view('templates/footer');
    }

    public function Ubah()
    {
        if( $this->model('Pemesan_model')->ubahDataPemesan($_POST) > 0 ) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . '/pemesan');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . '/pemesan');
            exit;
        }
    }


}
