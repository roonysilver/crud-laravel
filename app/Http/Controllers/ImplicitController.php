<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImplicitController extends Controller
{
    public function getIndex() {
        echo 'index method';
    }

    public function getShow($id) {
        echo 'show method';
    }

    public function getAdminProfile() {
        echo 'admin profile method';
    }

    public function postProfile() {
        echo 'profile method';
    }

    private $myclass;

    public function __construct(\MyClass $myclass) {
        $this->myclass = $myclass;
    }

    public function index() {
        dd($this->myclass);
    }
}
