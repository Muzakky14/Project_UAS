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
                <div class="container">
                        <div class="row">
                            <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="<?=base_url().'backend/img/'.$kuliner_depok->foto?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                                </div>
                            </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h3>Detail Kuliner</h3>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="bg-primary text-white">Nama</td>
                                    <td><?=$kuliner_depok->nama?></td>
                                </tr>
                                <tr>
                                    <td class="bg-primary text-white">Deskripsi</td>
                                    <td><?=$kuliner_depok->deskripsi?></td>
                                </tr>
                                <tr>
                                    <td class="bg-primary text-white">Fasilitas</td>
                                    <td><?=$kuliner_depok->fasilitas?></td>
                                </tr>
                                <tr>
                                    <td class="bg-primary text-white"> Bintang</td>
                                    <td><?=$kuliner_depok->bintang?></td>
                                </tr>
                                <tr>
                                    <td class="bg-primary text-white">Kontak</td>
                                    <td><?=$kuliner_depok->kontak?></td>
                                </tr>
                                <tr>
                                    <td class="bg-primary text-white">Email</td>
                                    <td><?=$kuliner_depok->email?></td>
                                </tr>
                                <tr>
                                    <td class="bg-primary text-white">Alamat</td>
                                    <td><?=$kuliner_depok->alamat?></td>
                                </tr>
                            </tbody>
                        </table>
                    <a href="<?=base_url()?>index.php/kuliner/index">Kuliner</a>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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