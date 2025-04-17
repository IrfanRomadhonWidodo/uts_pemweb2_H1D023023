<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alumni_model');
        $this->load->helper('url'); 
        $this->load->library('pagination'); 
    }

    public function index()
    {
        
        // Untuk filter pencarian
        $keyword = $this->input->get('keyword');
        $tahun = $this->input->get('tahun');
        $prodi = $this->input->get('program_studi');
        
        // Pagination config
        $config['base_url'] = site_url('index.php/alumni/index');
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config['reuse_query_string'] = TRUE;
        
        // Set per layar
        $config['per_page'] = 10;
        $page = $this->input->get('page') ? $this->input->get('page') : 0;
        
        // Get alumni with pagination
        $result = $this->Alumni_model->getFilteredAlumniPagination(
            $keyword,
            $tahun,
            $prodi,
            $config['per_page'],
            $page
        );
        
        // Set data for view
        $data['alumni'] = $result['alumni'];
        $config['total_rows'] = $result['total_rows'];
        
        // Style pagination to match your Bootstrap theme
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'Pertama';
        $config['last_link'] = 'Terakhir';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');
        
        // Initialize pagination
        $this->pagination->initialize($config);
        
        $data['pagination'] = $this->pagination->create_links();
        
        // Get dashboard stats
        $data['total_alumni'] = $this->Alumni_model->getTotalAlumni();
        $data['alumni_tahun_ini'] = $this->Alumni_model->getAlumniTahunIni();
        $data['total_prodi'] = $this->Alumni_model->getTotalProdi();
        
        $this->load->view('alumni/index', $data);
    }


        //Create Alumni Baru
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
    
        //Edit Alumni
        public function edit($id)
        {
            $data['alumni'] = $this->Alumni_model->getAlumniById($id);
            $this->load->view('alumni/edit', $data);
        }

        public function update($id)
        {
            $data = [
                'nama' => $this->input->post('nama'),
                'nim' => $this->input->post('nim'),
                'email' => $this->input->post('email'),
                'program_studi' => $this->input->post('program_studi'),
                'tahun_lulus' => $this->input->post('tahun_lulus')
            ];

            $this->Alumni_model->updateAlumni($id, $data);
            redirect('index.php/alumni');
        }

        //Delete Alumni
        public function delete($id)
        {
            $this->Alumni_model->deleteAlumni($id);
            redirect('index.php/alumni');
        }

        //Detail Alumni
        public function statistik()
        {
            $data['per_tahun'] = $this->Alumni_model->getLulusanPerTahun();
            $data['prodi_per_tahun'] = $this->Alumni_model->getProdiLulusanPerTahun();

            $this->load->view('alumni/statistik', $data);
        }

}