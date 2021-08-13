<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Tracking_model');
    }


    public function index()
    {

        $nomor =  $this->input->post('nomor');
        $data = konfigurasi('Tracking');
        $data['tracking'] = $this->Tracking_model->getTrack($nomor);
        $this->load->view('member/tracking', $data);
    }
}
