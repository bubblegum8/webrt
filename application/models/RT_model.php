<?php

class RT_model extends CI_Model {

    function Wilayah()
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->from('wilayah_provinsi')->get()->result();
    }

    function Wilayah_kabupaten($provinsi_id)
    {
        $this->db->where('provinsi_id', $provinsi_id);
        $this->db->order_by('id', 'ASC');
        return $this->db->from('wilayah_kabupaten')->get()->result();
    }

    function Wilayah_kecamatan($kabupaten_id)
    {
        $this->db->where('kabupaten_id', $kabupaten_id);
        $this->db->order_by('id', 'ASC');
        return $this->db->from('wilayah_kecamatan')->get()->result();
    }

    function Wilayah_desa($kecamatan_id)
    {
        $this->db->where('kecamatan_id', $kecamatan_id);
        $this->db->order_by('id', 'ASC');
        return $this->db->from('wilayah_desa')->get()->result();
    }
}