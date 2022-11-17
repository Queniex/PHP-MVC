<?php

class About {
    public function index($nama = 'Quenie', $pekerjaan = 'Gaje') {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page() {
        echo 'About/page';
    }
}