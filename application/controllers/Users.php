<?php

/**
 * Created by PhpStorm.
 * User: User-02
 * Date: 17.4.2016 г.
 * Time: 10:46
 */
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        echo "All users";
    }

    public function user($id)
    {
        echo $id;
    }
}