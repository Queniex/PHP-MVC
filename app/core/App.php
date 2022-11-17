<?php

class App {

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __CONSTRUCT() {
        $url = $this->parseURL();
        // var_dump($url);

        // controller
        if( file_exists('../app/controllers/' . $url[0] . '.php') ) {
            $this->controller = $url[0];
            unset($url[0]);
            // var_dump($url);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // method
        if( isset($url[1]) ) {
            if( method_exists($this->controller, $url[1]) ) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        if( !empty($url) ) {
            $this->params = array_values($url); // mengambil array sisa setelah controller & method dihilangkan.
        }


        // Jalankan controller & method, serta mengirimkan params bila ada\
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); // Menghilangkan slash diakhir url.
            $url = filter_var($url, FILTER_SANITIZE_URL); // Filter url, bersihkan dari karakter jahat (aneh).
            $url = explode('/', $url); // Memisahkan url agar nantinya bisa dimasukkan ke dalam array.
            return $url;
        }
    }
}

?>