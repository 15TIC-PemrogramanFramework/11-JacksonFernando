<?php 
/**
* 
*/
class halaman_admin extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
    $this->load->model('produk_model_admin');
    $this->load->library(array('form_validation','session','email','cart'));
    $this->load->helper(array('url','html','form'));
      if(!$this->session->userdata('logined') || $this->session->userdata
      ('logined') != true)

      redirect('login_admin');

  }  
  function index(){
 $data['hasil_order']=$this->produk_model_admin->ambil_data_order();
 $this->load->view('admin/home_admin',$data);

  }


  function login()
  {

    $this->load->view('admin/login_admin');
  }


  function halaman_insert(){

    $this->load->view('admin/tambah_produk');
  }
  function halaman_penjualan(){
    $data['data_produk']=$this->produk_model_admin->ambil_data_produk();
    $this->load->view('admin/edit_produk',$data);
  }
  function edit_produk($id)
  {
  $aaa =$this->produk_model_admin->ambil_data_id($id);
  
  $data=array(
  'id_prod'     =>set_value('id_prod',$aaa->id_prod),
  'nama_prod'   =>set_value('nama_prod',$aaa->nama_prod),
  'des_prod'    =>set_value('des_prod',$aaa->des_prod),
  'harga'       =>set_value('harga',$aaa->harga),
  'button'      => 'Edit'

  );
  $this->load->view('admin/edit_produk_form',$data);
  }
  
  function edit_produk_aksi()
  {
   $this->load->library('upload');
    $dataInfo = array();
    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload();
        $dataInfo[] = $this->upload->data();
    }

    $data = array(
        'nama_prod' => $this->input->post('nama_prod'),
        'des_prod'  => $this->input->post('des_prod'),
        'tipe_prod' => $this->input->post('tipe_prod'),
        'harga'     => $this->input->post('harga'),
        'gambar' => $dataInfo[0]['file_name'],
        'gambar2' => $dataInfo[1]['file_name'],

     );
  $id_prod = $this->input->post('id_prod');
  $this->produk_model_admin->edit_data_produk($id_prod,$data);
  redirect('halaman_admin/halaman_penjualan');




}
  
 function hapus_produk($id){
  $this->produk_model_admin->hapus_produk($id);
  redirect('halaman_admin/halaman_penjualan');

}
 function hapus_order($id){
  $this->produk_model_admin->hapus_order($id);
  redirect('halaman_admin/');

}
  


public function products()
{       
    $this->load->library('upload');
    $dataInfo = array();
    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload();
        $dataInfo[] = $this->upload->data();
    }

    $data = array(
        'nama_prod' => $this->input->post('nama_prod'),
        'des_prod'  => $this->input->post('des_prod'),
        'tipe_prod' => $this->input->post('tipe_prod'),
        'harga'     => $this->input->post('harga'),
        'gambar' => $dataInfo[0]['file_name'],
        'gambar2' => $dataInfo[1]['file_name'],

     );
    $this->produk_model->insert($data);
   redirect('halaman_admin/');
 }

private function set_upload_options()
{   
    //upload an image options
    $config = array();
    $config['upload_path']          = './uploads/';
  $config['allowed_types']        = 'gif|jpg|png';
  $config['max_size']             = 10000;
  $config['max_width']            = 10240;
  $config['max_height']           = 76800;
    return $config;
}



}
?>