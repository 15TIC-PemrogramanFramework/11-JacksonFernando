<?php 

class produk_model_admin extends CI_Model{

	public $nama_table = 'produk';
	public $id 		   = 'id_prod';
	public $id_order   = 'id_order';
	public $order      = 'DESC';
	public $transaksi  = 'orderhp';
	public $admin      = 'admin';



	function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');

	}

	
	function ambil_data_produk(){
		$this->db->order_by($this->id , $this->order);
		return $this->db->get($this->nama_table)->result();
	}
	function ambil_data_order(){
		$this->db->order_by($this->id_order , $this->order);
		return $this->db->get($this->transaksi)->result();
	}
	
		function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
	}
     function edit_data_produk($id,$data){
		$this->db->where($this->id,$id);
		$this->db->update($this->nama_table,$data);
	}

	function hapus_produk($id)
  {
    $this->db->where($this->id, $id);
    $this->db->delete($this->nama_table);
   }
   function hapus_order($id)
  {
    $this->db->where($this->id_order, $id);
    $this->db->delete($this->transaksi);
   }



		function insert($data){

		$this->db->insert($this->nama_table,$data);

	}
	function cek_login($user,$pass)
	{
		
		$this->db->where('user',$user);
		$this->db->where('pass',$pass);
		return $this->db->get($this->admin)->result();
	}
		
	



	

}
?>