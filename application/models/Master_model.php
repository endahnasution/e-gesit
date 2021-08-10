<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_model extends CI_Model
{


    function __construct()
    {
        parent::__construct();
    }



    public function getSarana()
    {
        $this->db->select('*');
        $this->db->from('tbl_sarana');
        $query = $this->db->get('');
        return $query->result();
    }

    public function updateSarana($data1)
    {
        $this->db->set('namaSarana', $data1['namaSarana']);
        $this->db->set('alamatSarana', $data1['alamatSarana']);
        $this->db->set('nib', $data1['nib']);
        $this->db->set('namaPj', $data1['namaPj']);
        $this->db->set('noHp', $data1['noHp']);
        $this->db->where('idSarana', $data1['idSarana']);
        $query = $this->db->update('tbl_sarana');
    }

    public function hapus_dataSarana($id)
    {
        $this->db->delete("tbl_sarana", array("idSarana" => $id));
    }


    public function getAnggaran()
    {
        $this->db->select('*');
        $this->db->from('tbl_anggaran');
        $query = $this->db->get('');
        return $query->result();
    }

    public function updateAnggaran($data2)
    {
        $this->db->set('mak', $data2['mak']);
        $this->db->set('namaAnggaran', $data2['namaAnggaran']);
        $this->db->set('uraianKegiatan', $data2['uraianKegiatan']);
        $this->db->set('divisi', $data2['divisi']);
        $this->db->set('kode', $data2['kode']);
        $this->db->set('pagu', $data2['pagu']);
        // $this->db->set('realisasi', $data2['realisasi']); 
        $this->db->where('idAnggaran', $data2['idAnggaran']);
        $query = $this->db->update('tbl_anggaran');
    }

    public function hapus_dataAnggaran($id)
    {
        $this->db->delete("tbl_anggaran", array("idAnggaran" => $id));
    }
}
