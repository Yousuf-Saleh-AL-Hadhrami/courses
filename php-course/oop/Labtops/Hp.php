<?php

namespace Labtops;

use Computers\Computer;

class Hp implements Computer{

    public $name;
    public $model;


    public function name($name){

        $this->name = $name;

        return $this;
    }

    public function model($model){

        $this->model = $model;

        return $this;
    }

    public function getData(){

        return $this->name . " " . $this->model;
    }

}