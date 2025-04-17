<?php
class Alumni_model extends CI_Model
{
    public function getAllAlumni()
    {
        return $this->db->get('alumni')->result();
    }

    //Bagian atas
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

    //CRUD
        public function tambahAlumni($data)
        {
            return $this->db->insert('alumni', $data);
        }

        public function getAlumniById($id)
        {
            return $this->db->get_where('alumni', ['id' => $id])->row_array();
        }

        public function updateAlumni($id, $data)
        {
            $this->db->where('id', $id);
            return $this->db->update('alumni', $data);
        }

        public function deleteAlumni($id)
        {
            return $this->db->delete('alumni', ['id' => $id]);
        }


    //search alumni
    public function getFilteredAlumniNoPagination($keyword = null, $tahun = null, $prodi = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
        }
        if ($tahun) {
            $this->db->where('tahun_lulus', $tahun);
        }
        if ($prodi) {
            $this->db->like('program_studi', $prodi);
        }

        return $this->db->get('alumni')->result();
    }

    public function getLulusanPerTahun()
    {
        return $this->db->select('tahun_lulus, COUNT(*) as total')
                        ->group_by('tahun_lulus')
                        ->order_by('tahun_lulus', 'ASC')
                        ->get('alumni')->result();
    }

    public function getProdiLulusanPerTahun()
    {
        return $this->db->select('tahun_lulus, program_studi, COUNT(*) as total')
                        ->group_by(['tahun_lulus', 'program_studi'])
                        ->order_by('tahun_lulus', 'ASC')
                        ->get('alumni')->result();
    }


    public function getFilteredAlumniPagination($keyword = '', $tahun = '', $prodi = '', $per_page = 10, $offset = 0)
{
    if ($keyword) {
        $this->db->like('nama', $keyword);
        $this->db->or_like('nim', $keyword);
    }
    
    if ($tahun) {
        $this->db->where('tahun_lulus', $tahun);
    }
    
    if ($prodi) {
        $this->db->like('program_studi', $prodi);
    }
    
    // Get total rows for pagination counting
    $count_query = clone $this->db;
    $total_rows = $count_query->count_all_results('alumni');
    
    // Apply limit and offset
    $this->db->limit($per_page, $offset);
    
    // Order by newest alumni first
    $this->db->order_by('tahun_lulus', 'DESC');
    
    // Get results
    $result = $this->db->get('alumni')->result();
    
    return [
        'alumni' => $result,
        'total_rows' => $total_rows
    ];
}
}
