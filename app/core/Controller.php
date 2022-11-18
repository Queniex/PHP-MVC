<?php

class Controller {
    // public function __CONSTRUCT() {
    //     echo '<br> Hehehehe..';
    // }

    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

}

?>