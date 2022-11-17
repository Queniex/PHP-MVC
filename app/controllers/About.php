<?php

class About extends controller{
    public function index($nama = 'Quenie', $pekerjaan = 'Gaje') {
        // echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";

        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('template/header');    
        $this->view('about/index', $data);
        $this->view('template/footer');
    }

    public function page() {
        // echo 'About/page';
        $this->view('template/header');    
        $this->view('about/page');
        $this->view('template/footer');
    }
}