<?php $this->load->view('setting/header2') ?>
		<!---->
			<div class="container">
		<div class="single">
		<div class="col-md-9">
			<div class="single_grid">
				<?php foreach ($data_produk as $key => $row) { 
				    $id_prod  	 = $row->id_prod;
					$nama_prod 	 = $row->nama_prod;
					$des_prod 	 = $row->des_prod;
					$harga 		 = $row->harga;
					$gambar 	 = $row->gambar2;

					?>
				<div class="grid images_3_of_2">
				<ul id="etalage">

							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image img-responsive" src="<?php echo base_url('/uploads/'.$gambar) ?>" alt="" >
									<img class="etalage_source_image img-responsive" src="images/sin-1.jpg" alt="" >
								</a>
							</li>
						
						    
						</ul>

						 <div class="clearfix"> </div>		
				  </div> 
				  <!---->
				  <div class="span1_of_1_des">
				 
				  	
				
				  <div class="desc1">
					<h3><?php echo $nama_prod ?></h3>
					<p><?php echo $des_prod ?></p>
					<h5>RP. <?php echo $harga ?></h5>
				
                         <form   method="post"  id="tambah_cart1"> 
       <input type="hidden" name="id_cart" >
 	   <input type="hidden" name="id_prod" 		 value="<?php echo  $id_prod ?>">
 	   <input type="hidden" name="nama_prod" 	 value="<?php echo  $nama_prod?>">
 	   <input type="hidden" name="des_prod" 	 value="<?php echo 	$des_prod ?>">
 	   <input type="hidden"  name="harga"	     value="<?php echo $harga ?>">
 	   <input type="hidden" name="gambar" 	 	 value="<?php echo  $gambar ?>">

                    	
					<div class="available">
						<h4>Available Options :</h4>
						<ul>
							
							<li>Jumlah:
								<select name="jumlah_produk">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</li>
						</ul>
						
						<div class="form-in">
					
						<button href="#" class=" hvr-shutter-in-horizontal" onclick="tambahcart()">Tambahkan Ke Cart</button>
					</form>
                     
					
						</div>
					</div>
					<script type="text/javascript">
   function tambahcart()
    {
    	var url;
       // ajax adding data to database
          $.ajax({
            url : '<?php echo site_url('ecom/tambah_cart') ?>',
            type: "POST",
            data: $('#tambah_cart1').serialize(),
            success: function(data)
            {
           
            console.log(data);
            alert('item berhasil ditambah ke cart');
         
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
             
            }
        });
    }</script>
					<div class="share-desc">
						<div class="share">
							<h4>Share Product :</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="<?php echo base_url('ecommerce2/images/facebook.png') ?>" title="facebook"></a></li>
								<li><a href="#"><img src="<?php echo base_url('ecommerce2/images/twitter.png') ?>" title="Twiiter"></a></li>
								<li><a href="#"><img src="<?php echo base_url('ecommerce2/images/rss.png') ?>" title="Rss"></a></li>
								<li><a href="#"><img src="<?php echo base_url('ecommerce2/images/gpluse.png') ?>" title="Google+"></a></li>
				    		</ul>
						</div>
						<div class="clearfix"></div>
					</div>
			   	 </div>
			   	</div>
          	    <div class="clearfix"></div>
          	   <?php } ?>
          	  </div>
			  <!---->
			
			  <!---->
			</div>
	<!---->
	<div class="col-md-3">
	  <div class="w_sidebar">
		<section  class="sky-form">
					<h4>catogories</h4>
						<div class="row1 scroll-pane">
							
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked="" disabled><i></i>IOS</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" checked="" disabled><i></i>ANDROID</label>
						
							</div>
						</div>
		</section>
		
		
		<section class="sky-form">
						<h4>discount</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio" checked="" disabled><i></i>Ga ada diskon : (</label>
							
							</div>
						
						</div>						
		</section>
	
	</div>
   </div>
   <div class="clearfix"> </div>
	</div>
	</div>

		<?php $this->load->view('setting/footer') ?>
