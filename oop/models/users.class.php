<?php
//echo __FILE__;
require_once '../db.php';
class users extends Registration {
    public $table;

    public function __construct()
    {
        $this->table = 'users';
    }

}

