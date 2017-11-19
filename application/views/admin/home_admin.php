<?php $this->load->view('admin/header') ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         
                <!--row -->
                <!-- /.row -->
      
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                      
                            <h3 class="box-title">Recent sales</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>Kota</th>
                                            <th>Alamat</th>
                                            <th>Kode Pos</th>
                                            <th>Nama Produk</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($hasil_order as $key => $row) {
                                            # code...
                                         ?>
                                        <tr>
                                            <td><?php echo $row->id_order ?></td>
                                            <td class="txt-oflo"><?php echo $row->email ?></td>
                                            <td><?php echo $row->kota ?></td>
                                            <td><?php echo $row->alamat ?></td>
                                            <td><?php echo $row->kode_pos ?></td>
                                            <td><?php echo $row->nama_prod ?></td>
                                            <td class="txt-oflo"><?php echo $row->jumlah ?></td>
                                            <td><span class="text-success">RP.<?php echo $row->totalharga ?></span></td>
                                            <td>  <?php echo anchor(site_Url('halaman_admin/hapus_order/'.$row->id_order),' <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i></td>'); ?> </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                   
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
   <?php $this->load->view('admin/footer') ?>
