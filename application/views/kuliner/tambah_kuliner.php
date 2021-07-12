<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('include/head'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php $this->load->view('include/sidebar');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
              <?php $this->load->view('include/navbar');?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h2 mb-4 text-center text-gray-800">Tambah Kuliner</h1>
                    <?php echo form_open_multipart('kuliner/tambah'); ?>
                    
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control">

                    <label for="">deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control">

                    <label for="">fasilitas</label>
                    <input type="text" name="fasilitas" class="form-control">

                    
                    <label for="">bintang</label>
                    <input type="text" name="bintang" class="form-control">
                    
                    <label for="">kontak</label>
                    <input type="text" name="kontak" class="form-control">
                    
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">

                    <label for="">alamat</label>
                    <input type="text" name="alamat" class="form-control">
                    
                    <label for="">Upload Foto</label>
                    <input type="file" name="foto" class="form-control">

                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo form_close(); ?>
                     

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('include/script'); ?>

</body>

</html>