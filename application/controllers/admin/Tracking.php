<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracking extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('Tracking_model');
        $this->load->model('Master_model');
    }

    public function index()
    {
        $data = konfigurasi('Sarana');
        $data['tracking'] = $this->Tracking_model->getTracking();
        $data['sarana'] = $this->Master_model->getSarana();
        $this->template->load('layouts/template', 'admin/listTracking', $data);
    }

    public function tambahTracking()
    {
        $data = konfigurasi('Form Tambah Tracking');
        $data['sarana'] = $this->Tracking_model->getSarana();
        $this->template->load('layouts/template', 'admin/formTracking', $data);
    }

    public function simpanTracking()
    {
        $idSarana =  $this->input->post('idSarana');
        $noTracking =  $this->input->post('noTracking');
        $pembuat =  $this->input->post('pembuat');

        $nibSarana = $this->Tracking_model->getNib($idSarana);

        foreach ($nibSarana as $row) {
            $noTrackingFix = $row->nib . "" . $noTracking;
        }

        $data = array(
            'idSarana' => $idSarana,
            'noTracking' => $noTrackingFix,
            'namaPembuat' => $pembuat

        );

        $this->db->insert('tbl_tracking', $data);

        $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
        redirect('admin/tracking', 'refresh');
    }

    public function ubahSarana()
    {
        $id = $this->input->post('idSr');
        $namaSarana =  $this->input->post('namas');
        $alamat =  $this->input->post('alamats');
        $nib =  $this->input->post('nibEdit');
        $namaPj =  $this->input->post('pjEdit');
        $noHp =  $this->input->post('hpEdit');



        $data = array(
            'idSarana' => $id,
            'namaSarana' => $namaSarana,
            'alamatSarana' => $alamat,
            'nib' => $nib,
            'namaPj' => $namaPj,
            'noHp' =>  $noHp
        );

        $this->Master_model->updateSarana($data);
        redirect('admin/sarana');
    }

    public function hapusTracking()
    {
        $id = $this->input->post('idHapus');
        $this->Tracking_model->hapusTracking($id);
        redirect('admin/tracking');
    }
}
