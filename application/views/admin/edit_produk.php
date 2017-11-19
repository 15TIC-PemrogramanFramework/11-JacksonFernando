<?php $this->load->view('admin/header') ?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Basic Table</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Penjualan</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Edit Produk</h3>
                    
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Deskripsi Produk</th>
                                            <th>Jenis Os</th>
                                            <th>Harga</th>
                                            <th>Gambar</th>
                                              <th>Gambar2</th>
                                               <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($data_produk as $key => $row) {
                                       	# code...
                                       ?>
                                        <tr>

                                            <td><?php echo $row->id_prod ?></td>
                                            <td><?php echo $row->nama_prod ?></td>
                                            <td><?php echo $row->des_prod ?></td>
                                            <td><?php echo $row->tipe_prod ?></td>
                                            <td><?php echo $row->harga ?></td>
                                            <td><?php echo $row->gambar ?></td>
                                            <td><?php echo $row->gambar2 ?></td>
                                            <td><?php echo anchor(site_url('halaman_admin/edit_produk/'.$row->id_prod),'<i class="fa fa-wrench fa-fw" aria-hidden="true"></i>'); ?>
                                                <?php echo anchor(site_Url('halaman_admin/hapus_produk/'.$row->id_prod),' <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i></td>'); ?> 

                                               
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com</footer>
        </div>
        <?php $this->load->view('admin/footer') ?>