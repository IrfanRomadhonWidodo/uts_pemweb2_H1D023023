<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alumni_model');
        $this->load->helper('url'); // biar bisa pakai redirect dan base_url
    }

    public function index()
    {
        $data['alumni'] = $this->Alumni_model->getAllAlumni();
        $data['total_alumni'] = $this->Alumni_model->getTotalAlumni(); // Ambil total alumni
        $data['alumni_tahun_ini'] = $this->Alumni_model->getAlumniTahunIni(); // Ambil alumni tahun ini
        $data['total_prodi'] = $this->Alumni_model->getTotalProdi(); // ini tambahan

        $this->load->view('alumni/index', $data);
    }



        public function create()
        {
            $this->load->view('alumni/create');
        }
        
        public function store()
        {
            $data = [
                'nama' => $this->input->post('nama'),
                'nim' => $this->input->post('nim'),
                'email' => $this->input->post('email'),
                'program_studi' => $this->input->post('program_studi'),
                'tahun_lulus' => $this->input->post('tahun_lulus')
            ];
        
            $this->Alumni_model->tambahAlumni($data);
            
            redirect('index.php/alumni');
        }
    

}