<?php

class About extends controller{
    public function index($nama = 'Quenie', $pekerjaan = 'Gaje') {
        // echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";

        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About';
        $this->view('template/header', $data);    
        $this->view('about/index', $data);
        $this->view('template/footer');
    }

    public function page() {
        // echo 'About/page';
        $data['judul'] = 'About';
        $this->view('template/header', $data);    
        $this->view('about/page');
        $this->view('template/footer');
    }
}