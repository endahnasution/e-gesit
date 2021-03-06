<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : Home.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Thursday, 12th March 2020 10:34:33 am
 * | Last Modified   : Thursday, 12th March 2020 10:57:32 am
 * |==============================================================|
 */

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('Tracking_model');
    }

    public function index()
    {
        $data = konfigurasi('Dashboard');
        $data['daftar'] = $this->Tracking_model->getDaftar();
        $this->template->load('layouts/template', 'admin/dashboard', $data);
    }

    public function history()
    {
        $id = $this->uri->segment(4);
        $data = konfigurasi('Dashboard');
        $data['history'] = $this->Tracking_model->getHistory($id);
        $this->template->load('layouts/template', 'admin/history', $data);
    }
}
