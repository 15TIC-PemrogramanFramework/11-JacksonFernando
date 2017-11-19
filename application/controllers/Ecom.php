<?php 
/**
* 
*/
class ecom extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
    $this->load->model('produk_model');
    $this->load->library(array('form_validation','session','email','cart'));
    $this->load->helper(array('url','html','form'));

  }  
  function index(){
    $data['data_produk_android']=$this->produk_model->get_android();
    $data['data_produk_ios']=$this->produk_model->get_ios();
    $data['data_produk_cart']=$this->produk_model->ambil_data_cart();
    $this->load->view('ecom/index',$data);

  }


  function login()
  {

    $this->load->view('ecom/member');
  }


  function halaman_insert(){

    $this->load->view('ecom/uploadfile');
  }


  
  function tambah_cart()
  {
   $id_prod   = $this->input->post('id_prod');
   $nama_prod = $this->input->post('nama_prod');
   $harga     = $this->input->post('harga');
   $gambar  = $this->input->post('gambar');
   $jumlah  = $this->input->post('jumlah_produk');
   $id_cart = $this->input->post('id_cart');
   $data_cart = array(
    'id_cart'   => $id_cart,
    'id_prod'   => $id_prod,
    'nama_prod' => $nama_prod,
    'harga'     => $harga,
    'gambar'    => $gambar,
    'jumlah'    => $jumlah
  );    
   $this->produk_model->insert_cart($data_cart);
     echo json_encode(array("status" => TRUE));
 }

 
 function hapus_cart($id_cart){
  $this->produk_model->hapus_cart($id_cart);
  echo json_encode(array("status" => TRUE));

}
function checkout(){
$data['data_produk_cart']=$this->produk_model->ambil_data_cart();
$data['data_produk_cart_all']=$this->produk_model->ambil_data_cart();
$this->load->view('ecom/checkout',$data);

}
function beli(){
$id_order    = $this->input->post('id_order');
$id_cart     = $this->input->post('id_cart');
$id_mem     = $this->input->post('id_mem');
$email       = $this->input->post('email');
$kota        = $this->input->post('kota');
$alamat      = $this->input->post('alamat');
$kode_pos    = $this->input->post('kode_pos');
$nama_prod   = $this->input->post('nama_prod');
$jumlah      = $this->input->post('jumlah');
$total_harga = $this->input->post('totalharga');
$count       = count($_POST['email']);
 for ($i = 0; $i < $count; $i++)
        {
$data_beli = array(
    'id_order'       => $id_order[$i],
    'id_cart'        => $id_cart[$i],
     'id_mem'        => $id_mem[$i],
     'kota'          => $kota[$i],
     'alamat'        => $alamat[$i],
     'kode_pos'      => $kode_pos[$i],
    'email'          => $email[$i],
    'nama_prod'      => $nama_prod[$i],
    'jumlah'         => $jumlah[$i],
    'totalharga'     => $total_harga[$i]
  );   
$this->produk_model->beli($data_beli);
$this->produk_model->hapus_cart($id_cart[$i]);
echo json_encode(array("status" => TRUE));

}

}





function tampil_product(){
 $data['data_produk_cart']=$this->produk_model->ambil_data_cart();
 $data['data_produk_android']=$this->produk_model->get_android();
 $data['data_produk_ios']=$this->produk_model->get_ios();
 $this->load->view('ecom/product',$data);

}
function detail($id){
  $data['data_produk']=$this->produk_model->ambil_data_id_produk($id);
  $data['data_produk_cart']=$this->produk_model->ambil_data_cart();
  $this->load->view('ecom/detail',$data);

}

function tambahProduk(){

  $config['upload_path']          = './uploads/';
  $config['allowed_types']        = 'gif|jpg|png';
  $config['max_size']             = 10000;
  $config['max_width']            = 1024;
  $config['max_height']           = 768;
  $this->load->library('upload', $config);


  if($this->upload->do_upload('userfile')){
   $upload_data = $this->upload->data();
   $nama_file = $upload_data['file_name'];
   $path_file = $nama_file;
   $data = array(
     'nama_prod' => $this->input->post('nama_prod'),
     'des_prod'  => $this->input->post('des_prod'),
     'tipe_prod' => $this->input->post('tipe_prod'),
     'harga'     => $this->input->post('harga'),
     'gambar'=> $path_file

   );
   $this->produk_model->insert($data);
   redirect('ecom');
 }
 else{
  echo "File cannot be uploaded";


}
}


}

?>