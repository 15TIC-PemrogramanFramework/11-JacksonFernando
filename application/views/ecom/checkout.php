
<?php $this->load->view('setting/header2') ?>
		<!---->
		<div class="container">
		<div class="check-out">
		<h2>Checkout</h2>
    	    <table >
		  <tr>
			<th>ITEM</th>
			<th>JUMLAH</th>		
			<th>HARGA</th>
			<th>DELIVERY DETAILS</th>
			<th>TOTAL</th>
		  </tr>
		    
		  <?php foreach ($data_produk_cart_all as $key => $row) {

		  	 $id_cart	 = $row->id_cart;
		  	 $id_prod	 = $row->id_prod;
		  	 $nama_prod	 = $row->nama_prod;
		  	 $gambar	 = $row->gambar;
		  	 $harga  	 = $row->harga;
		  	 $jumlah 	 = $row->jumlah;
		   	 $total 	 = $harga * $jumlah;
		  	# code...
		   ?>
	
		  <tr>
			<td class="ring-in">
				
			<div class="sed">
				<h5><font size="+4"><?php echo $nama_prod ?></font></h5>
				<p> </p>
			
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="<?php echo $row->jumlah ?>" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" disabled></td>		
			<td>RP.<?php echo $harga ?></td>
			<td>FREE SHIPPING</td>
			<td>
			RP.<?php echo $total ?>
			</td>
		  </tr>

		
	
	<?php for ($i=0; $i <= $nama_prod ; $i++) { 
		 	# code...
		  ?>
		   <form    method="post"  id="checkout1"> 
	   <input type="hidden" name="id_order[]".$i />
 	   <input type="hidden" name="id_cart[]".$i 	 value="<?php echo  $id_cart?>">
 	   <input type="hidden" name="id_prod[]".$i 	 value="<?php echo 	$id_prod ?>">
 	   <input type="hidden"  name="id_mem[]".$i	 	 value="<?php echo $this->session->userdata('id_mem'); ?>">
 	   <input type="hidden"  name="kota[]".$i	 	 value="<?php echo $this->session->userdata('kota'); ?>">
 	   <input type="hidden"  name="alamat[]".$i	 	 value="<?php echo $this->session->userdata('alamat'); ?>"/>
 	   <input type="hidden"  name="kode_pos[]".$i	 value="<?php echo $this->session->userdata('kode_pos'); ?>">
 	   <input type="hidden" name="nama_prod[]".$i 	 value="<?php echo $nama_prod ?>">
 	   <input type="hidden" name="jumlah[]".$i 		 value="<?php echo 	$jumlah?>">
 	   <input type="hidden"  name="email[]".$i	 	 value="<?php echo $this->session->userdata('email'); ?>"/>
 	   <input type="hidden" name="totalharga[]".$i 	 value="<?php echo  $total ?>">

 	
  
 	   <?php } ?>
 	 
		<?php } ?> 
	</table>
   		 
 	    	<button  class=" hvr-shutter-in-horizontal" onclick="save()" >CHECKOUT</button>
	  
</form>	 
	<div class="clearfix"> </div>
    	</div>
</div>

 <script type="text/javascript">
    
   function save()
    {
    	var url;
       // ajax adding data to database
          $.ajax({
            url : '<?php echo site_url('ecom/beli') ?>',
            type: "POST",
            data: $('#checkout1').serialize(),
            success: function(data)
            {
           
            console.log(data);
          
            alert('transaksi anda sudah di proses . Terimakasih sudah belanja di zero communication');
         
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('silahkan login terlebih dahulu');
            }
        });
    }

 </script>
		<!---->
		<?php $this->load->view('setting/footer') ?>

