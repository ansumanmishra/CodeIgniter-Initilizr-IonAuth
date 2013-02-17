<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->is_admin())
        {
            $this->session->set_flashdata('message', 'You must be an admin to view this page');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data = array('main_content'=>'admin/dashboard', 'title'=>'Admin Dashboard');
        $this->load->view('admin_template', $data);
    }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */