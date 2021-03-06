<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    	$this->load->model('produk_model_admin');

    }

    public function index()
    {
		if($this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{
			redirect('halaman_admin/');
		}
		
		if(!$this->input->post())
		{
			$this->load->view('admin/login_admin');
		}
		else
		{
			$cek_login =$this->produk_model_admin->cek_login(
				$this->input->post('user'),
				$this->input->post('pass')
				);
				if(!empty($cek_login))
			{
				$this->session->set_userdata('logined', true);
				redirect("halaman_admin");
			}
			else 
			{
				redirect("halaman_admin");
			}
		}
        
    } 
	
	public function logout()
    {
		$this->session->unset_userdata('logined');
		redirect("login_admin");
    } 
}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */