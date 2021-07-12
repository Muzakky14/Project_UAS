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
                    <h1 class="h2 mb-4 text-center text-gray-800">Wisata</h1>
                    <a href="<?php echo base_url()?>index.php/wisata/save" class="btn btn-success">Tambah</a>

                    <a href="<?php echo base_url()?>index.php/login/logout" class="btn btn-dark">Logout</a>
                
                    <table class="table table-striped">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Fasilitas</th>
                                <th>bintang</th>
                                <th>kontak</th>
                                <th>alamat</th>
                                <th>Email</th>
                                
                                <th>foto</th>
                                <th>Action</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                                foreach($wisata_depok->result() as $wisata){
                                     echo'    
                                    <tr>
                                        <td>'.$wisata->nama.'</td>
                                        <td>'.$wisata->deskripsi.'</td>
                                        <td>'.$wisata->fasilitas.'</td>
                                        <td>'.$wisata->bintang.'</td>
                                        <td>'.$wisata->kontak.'</td>
                                        <td>'.$wisata->alamat.'</td>
                                        <td>'.$wisata->email.'</td>
                                        <td> <img src="'.base_url().'backend/img/'.$wisata->foto.'"  width="100" height="100"alt=""></td>
                                        
                                        <td>
                                        <a href="'.base_url().'index.php/wisata/profile/'.$wisata->id.'" class="btn btn-primary" >View</a>
                                        <a href="'.base_url().'index.php/wisata/edit/'.$wisata->id.'" class="btn btn-info">Edit</a>
                                        <a href="'.base_url().'index.php/wisata/delete/'.$wisata->id.'" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>       
                                     ';   
                                }

                            ?>
                        </tbody>
                    </table>

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
                    <a class="btn btn-primary" href="l<?php echo base_url()?>index.php/login/logout ">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('include/script'); ?>

</body>

</html>