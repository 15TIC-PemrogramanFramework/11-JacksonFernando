<?php 

class produk_model extends CI_Model{

	public $nama_table = 'produk';
	public $mem 	   = 'member';
	public $cart 	   = 'cart';
	public $id_mem 	   = 'id_mem';
	public $id 		   = 'id_prod';
	public $id_cart	   = 'id_cart';
	public $order      = 'DESC';
	public $transaksi  = 'orderhp';


	function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');

	}

	function beli($beli){
    
    return $this->db->insert($this->transaksi,$beli);	
	}
	function beli2($data){
		$this->db->insert($this->transaksi, $data);
		return $this->db->insert_id();

	}
	function ambil_data_produk(){
		$this->db->order_by($this->id , $this->order);
		return $this->db->get($this->nama_table)->result();
	}
	function ambil_data_id_produk($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_cart(){
		$this->db->order_by($this->id_cart,$this->order);
		return $this->db->get($this->cart)->result();
	}
	function hapus_cart ($id)
  {
    $this->db->where($this->id_cart, $id);
    $this->db->delete($this->cart);
    
   
  }

	function daftar_member($member){
		return $this->db->insert($this->mem,$member);

	}
	function insert_cart($cart){
		return $this->db->insert($this->cart,$cart);

	}

	public function verifyemail($key)
	{
		$data = array('status' => 1);
		$this->db->where('md5(email)', $key);
		return $this->db->update('user', $data);
	}
	function insert($data){

		$this->db->insert($this->nama_table,$data);

	}


	function get_android(){
		$this->db->select('id_prod,nama_prod,des_prod,tipe_prod,harga,gambar');
		$this->db->from('produk');
		$where = '(tipe_prod="android")';
		$this->db->where($where);
		$this->db->order_by($this->id , $this->order);
		return
		$this->db->get()->result();
	}
	function get_ios(){
		$this->db->select('id_prod,nama_prod,des_prod,tipe_prod,harga,gambar');
		$this->db->from('produk');
		$where = '(tipe_prod="ios")';
		$this->db->where($where);
		$this->db->order_by($this->id , $this->order);
		return
		$this->db->get()->result();
	}
	
	function proses_login($email,$password){
		$this->db->select("*");
		$whereCondition = $array = array('email' =>$email,'password'=>$password);
		$this->db->where($whereCondition);
		$this->db->from($this->mem);
		$query = $this->db->get();
		return $query;
	}
}
?>