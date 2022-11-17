<?php

class App {
    public function __CONSTRUCT() {
        $url = $this->parseUrl();
        var_dump($url);
    }

    public function parseUrl() {
        if(isset($_GET['url'])) {
            $url = $_GET['url'];
            return $url;
        }
    }
}

?>