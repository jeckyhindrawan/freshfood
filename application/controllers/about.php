<?php
defined('BASEPATH') or exit('No direct script access allowed');

class about extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');

        isLoggedIn();
    }
    public function index()
    {
        $this->load->view('about');
    }
}