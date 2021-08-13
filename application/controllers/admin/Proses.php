<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proses extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('Proses_model');
    }

    public function index()
    {
        $data = konfigurasi('Sarana');
        $data['proses'] = $this->Proses_model->getProses();
        $this->template->load('layouts/template', 'admin/listProses', $data);
    }

    public function tambahProses()
    {
        $data = konfigurasi('Form Tambah Tracking');
        $data['tracking'] = $this->Proses_model->getTracking();
        $this->template->load('layouts/template', 'admin/formProses', $data);
    }

    public function simpanProses()
    {
        $idTracking =  $this->input->post('idTracking');
        $tanggal =  $this->input->post('tanggal');
        $status =  $this->input->post('status');
        $pesan =  $this->input->post('pesan');


        $data = array(
            'idTracking' => $idTracking,
            'tanggal' => $tanggal,
            'statusPesan' => $status,
            'detailPesan' => $pesan

        );

        $this->db->insert('tbl_proses', $data);

        $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
        redirect('admin/proses', 'refresh');
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
