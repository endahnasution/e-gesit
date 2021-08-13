<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tracking_model extends CI_Model
{


    function __construct()
    {
        parent::__construct();
    }



    public function getTracking()
    {
        $this->db->select('tbl_tracking.idTracking, tbl_sarana.namaSarana, tbl_tracking.noTracking, tbl_tracking.namaPembuat');
        $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_tracking.idSarana');
        $this->db->from('tbl_tracking');
        $query = $this->db->get('');
        return $query->result();
    }

    public function getDaftar()
    {
        $this->db->select('tbl_tracking.idTracking, tbl_sarana.namaSarana, tbl_tracking.noTracking');
        $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_tracking.idSarana');
        $this->db->from('tbl_tracking');
        $query = $this->db->get('');
        return $query->result();
    }

    public function getNib($id)
    {
        $this->db->select('tbl_sarana.nib');
        $this->db->from('tbl_sarana');
        $this->db->where('idSarana', $id);
        $query = $this->db->get('');
        return $query->result();
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

    public function hapusTracking($id)
    {
        $this->db->delete("tbl_tracking", array("idTracking" => $id));
    }

    public function getHistory($id)
    {
        $this->db->select('tbl_tracking.noTracking, tbl_sarana.namaSarana, tbl_proses.tanggal, tbl_proses.statusPesan,tbl_proses.detailPesan');
        $this->db->from('tbl_tracking');
        $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_tracking.idSarana');
        $this->db->join('tbl_proses', 'tbl_proses.idTracking = tbl_tracking.idTracking');
        $this->db->where('tbl_tracking.idTracking', $id);
        $query = $this->db->get('');
        return $query->result();
    }

    public function getTrack($nomor)
    {
        $this->db->select('tbl_tracking.noTracking, tbl_sarana.namaSarana, tbl_proses.tanggal, tbl_proses.statusPesan,tbl_proses.detailPesan');
        $this->db->from('tbl_tracking');
        $this->db->join('tbl_sarana', 'tbl_sarana.idSarana = tbl_tracking.idSarana');
        $this->db->join('tbl_proses', 'tbl_proses.idTracking = tbl_tracking.idTracking');
        $this->db->where('tbl_tracking.noTracking', $nomor);
        $query = $this->db->get('');
        return $query->result();
    }
}
