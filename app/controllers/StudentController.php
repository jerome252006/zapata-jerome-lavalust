<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        // Give access to the student profile
        $this->session->set_userdata('student_access', true);

        $data = [
            'student_id' => 'MCC2024-00256',
            'name'       => 'Jerome Zapata',
            'course'     => 'BS Information Technology',
            'year_level' => '3rd Year',
            'section'    => '3F6',
            'email'      => 'jeromezapata12@gmail.com'
        ];

        $this->call->view('student/index', $data);
    }

    public function profile()
    {
        $data = [
            'student_id' => 'MCC2024-00256',
            'name'       => 'Jerome Zapata',
            'course'     => 'BS Information Technology',
            'year_level' => '3rd Year',
            'section'    => '3F6',
            'email'      => 'jeromezapata12@gmail.com',
            'skills'     => 'Data Annotation',
            'hobbies'    => 'Fixed Gear Riding, Workout'
        ];

        $this->call->view('student/profile', $data);
    }
}