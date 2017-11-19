 <?php $this->load->view('admin/header') ?>
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Edit Produk</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                       
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Edit Produk</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                   
                    <div class="col-md-12 col-xs-12">
                        <div class="white-box">
                           
                            <form class="form-horizontal form-material" enctype="multipart/form-data" method="post" action="<?php echo site_url('halaman_admin/edit_produk_aksi') ?>">
                                <input type="hidden" name="id_prod" value="<?php echo $id_prod ?>" >
                                <div class="form-group">
                                    <label class="col-md-12">Nama Produk</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="tambahkan nama produk" name="nama_prod" class="form-control form-control-line" value="<?php echo $nama_prod ?>"> </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-12">Deskripsi Produk</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" placeholder="tambahkan deskripsi produk" name="des_prod" ><?php echo $des_prod ?></textarea>
                                    </div>
                                </div>
                                     <div class="form-group">
                                    <label class="col-sm-12">Tipe OS</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="tipe_prod" value="<?php echo $tipe_prod ?>" >
                                             <option >----</option>
                                            <option value="ios">IOS</option>
                                            <option value="android">ANDROID</option>
                                        
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label class="col-md-12">Harga</label>
                                    <div class="col-md-12">
                                        <input type="number" placeholder="100000" class="form-control form-control-line" name="harga" value="<?php echo $harga ?>" > 
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-12">Gambar</label>
                                    <div class="col-sm-12">
                                 <input type="file" name="userfile[]" class="form-control" multiple="">                                        
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" value="<?php echo $button ?>">Edit</button>
                                    </div>
                                </div>
                          
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>

         <?php $this->load->view('admin/footer') ?>