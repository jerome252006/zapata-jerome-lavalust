<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Student extends Controller {

    public function index() {
        $this->call->view('student/index');
    }

    public function profile() {
        $this->call->view('student/profile');
    }
}