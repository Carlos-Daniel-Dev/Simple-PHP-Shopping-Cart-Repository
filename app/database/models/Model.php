<?php

namespace app\database\models;

use app\database\models\Connect;

abstract Class Model{

    protected $connect;

    public function __construct() {
        $this->connect = Connect::connect();
    }
}