<?php
class ecom2 extends CI_Controller{


  function __construct()
  {
    
    parent::__construct();
    $this->load->model('produk_model');
    $this->load->library(array('form_validation','session','email'));
    $this->load->helper(array('url','html','form'));

  }


  function daftar(){
    $this->form_validation->set_rules('nama_mem','nama_mem','required');
    $this->form_validation->set_rules('email', 'email', 'callback_email_check');
    $this->form_validation->set_rules('passworddaftar','passworddaftar','trim|required|min_length[5]|max_length[12]');

    if($this->form_validation->run() == FALSE){
      $this->load->view('ecom/');
    }
    else{
      $nama_mem = $this->input->post('nama_mem');
      $email = $this->input->post('email');
      $kota = $this->input->post('kota');
      $alamat = $this->input->post('alamat');
      $kode_pos = $this->input->post('kode_pos');
      $password = $this->input->post('passworddaftar');
      $passhash = hash('md5', $password);
      
            //md5 hashing algorithm to decode and encode input password
            //$salt       = uniqid(rand(10,10000000),true);
      $saltid     = md5($email);
      

      $data = array(
        'nama_mem'      =>$nama_mem,
        'email'         =>$email,
        'kota'          =>$kota,
        'alamat'        =>$alamat,
        'kode_pos'      =>$kode_pos,
        'password'      =>$passhash
      );
      $this->produk_model->daftar_member($data);
  
        

     
    }
  }
  function email_check($str)
{

    if (stristr($str,'@gmail.com') !== false) return true;
    if (stristr($str,'@yahoo.com') !== false) return true;
    if (stristr($str,'@hotmail.com') !== false) return true;

        $this->form_validation->set_message('email', 'Please provide an acceptable email address.');
        return FALSE;

}



      function sign_in(){
        $email = trim($this->input->post('email'));
        $password = md5($this->input->post('password'));
        $query = $this->produk_model->proses_login($email,$password);

        $this->form_validation->set_rules('email', 'email', 'callback_email_check');
        $this->form_validation->set_rules('password', 'password', 'required');



        if ($this->form_validation->run() == FALSE ) {
     
        }else{
            $query = $query->result();
         
            $user = array(
              'id_mem'  => $query[0]->id_mem,
              'nama_mem'=> $query[0]->nama_mem,
              'email'   => $query[0]->email,
              'kota'    => $query[0]->kota,
              'alamat'    => $query[0]->alamat,
              'kode_pos'=> $query[0]->kode_pos,
              'password'=> $query[0]->password
            );
            $this->session->set_userdata($user);
 

          }
        }
      
      

      public function logout()
      {
       $user = array('nama_mem', 'email' ,'password');
       $this->session->unset_userdata($user);
       redirect("/");
     }




  }
  ?>