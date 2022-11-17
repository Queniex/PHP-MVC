<?php

class App {
    public function __CONSTRUCT() {
        $url = $this->parseUrl();
        var_dump($url);
    }

    public function parseUrl() {
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); // Menghilangkan slash diakhir url.
            $url = filter_var($url, FILTER_SANITIZE_URL); // Filter url, bersihkan dari karakter jahat (aneh).
            $url = explode('/', $url); // Memisahkan url agar nantinya bisa dimasukkan ke dalam array.
            return $url;
        }
    }
}

?>