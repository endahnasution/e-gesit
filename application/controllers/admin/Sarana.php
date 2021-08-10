<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sarana extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('Master_model');
    }

    public function index()
    {
        $data = konfigurasi('Sarana');
        $data['sarana'] = $this->Master_model->getSarana();
        $this->template->load('layouts/template', 'admin/listSarana', $data);
    }

    public function tambahSarana()
    {
        $data = konfigurasi('Form Tambah Sarana');
        $this->template->load('layouts/template', 'admin/formSarana', $data);
    }

    public function simpanSarana()
    {
        $nama =  $this->input->post('namas');
        $alamat =  $this->input->post('alamats');
        $nib =  $this->input->post('nib');
        $namaPj = $this->input->post('namaPj');
        $noHp =  $this->input->post('noHp');


        $data = array(
            'namaSarana' => $nama,
            'alamatSarana' => $alamat,
            'nib' => $nib,
            'namaPj' => $namaPj,
            'noHp' => $noHp,
        );

        $this->db->insert('tbl_sarana', $data);

        $this->session->set_flashdata('success', 'Data Berhasil Dimasukkan');
        redirect('admin/sarana', 'refresh');
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

    public function hapusSarana()
    {
        $id = $this->input->post('idHapus');
        $this->Master_model->hapus_dataSarana($id);
        redirect('admin/sarana');
    }
}
