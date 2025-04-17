<?php
class Alumni_model extends CI_Model
{
    public function getAllAlumni()
    {
        return $this->db->get('alumni')->result();
    }

    public function getTotalAlumni()
    {
        return $this->db->count_all('alumni'); // Menghitung jumlah seluruh data alumni
    }

    public function getAlumniTahunIni()
    {
        $tahun_ini = date('Y'); // Mendapatkan tahun saat ini
        $this->db->where('tahun_lulus', $tahun_ini); // Memfilter alumni berdasarkan tahun lulus
        return $this->db->count_all_results('alumni'); // Menghitung jumlah alumni yang lulus tahun ini
    }

    public function getTotalProdi()
    {
        $this->db->select('program_studi'); // Memilih kolom program_studi
        $this->db->distinct();
        $query = $this->db->get('alumni');
        return $query->num_rows(); // jumlah prodi unik
    }


        public function tambahAlumni($data)
        {
            return $this->db->insert('alumni', $data);
        }


}
