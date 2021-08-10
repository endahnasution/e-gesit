<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proses_model extends CI_Model
{


    function __construct()
    {
        parent::__construct();
    }



    public function getProses()
    {
        $this->db->select('tbl_proses.idProses, tbl_sarana.namaSarana, tbl_proses.tanggal, tbl_proses.statusPesan,tbl_proses.detailPesan');
        $this->db->join('tbl_tracking', 'tbl_tracking.idTracking = tbl_proses.idTracking');
        $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_tracking.idSarana');
        $this->db->from('tbl_proses');
        $query = $this->db->get('');
        return $query->result();
    }


    public function getTracking()
    {
        $this->db->select('*');
        $this->db->from('tbl_tracking');
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

    public function hapusTracking($id)
    {
        $this->db->delete("tbl_tracking", array("idTracking" => $id));
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
