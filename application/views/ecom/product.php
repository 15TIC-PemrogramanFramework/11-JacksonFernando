<?php $this->load->view('setting/header2') ?>
	
		
	
			
		<!---->
		<div class="container">
			<div class="content-product">
				<h3 class="future-men">IOS</h3>
					<?php foreach ($data_produk_ios as $key => $row) { ?>	
				<div class="col-md-4 col-d">
					
				<div class="men-grid in-men">
				  <a href="<?php echo site_url()?>ecom/detail/<?php echo $row->id_prod;?>"><img class="img-responsive" src="<?php echo base_url('/uploads/'.$row->gambar); ?>" alt=""></a>
						<div class="value-in">
							<p><?php echo $row->nama_prod ?></p>
							<span><?php echo $row->harga ?></span>
							<div class="clearfix"> </div>
						</div>
					
					</div>
			
				</div>
				<?php } ?>
		
				<div class="clearfix"> </div>
			</div>
			<div class="content-product">
				<h3 class="future-women">ANDRO</h3>
					<?php foreach ($data_produk_android as $key => $row) { ?>	
					<div class="col-md-4 col-d">
				<div class=" men-grid in-men ">
				 <a href="<?php echo site_url()?>ecom/detail/<?php echo $row->id_prod;?>"><img class="img-responsive" src="<?php echo base_url('/uploads/'.$row->gambar); ?>" alt=""></a>
						<div class="value-in">
							<p><?php echo $row->nama_prod ?></p>
							<span><?php echo $row->harga ?></span>
							<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>
				<?php } ?>
			
			
				<div class="clearfix"> </div>
			</div>
		</div>
		<!---->
		<?php $this->load->view('setting/footer') ?>
</body>
</html>