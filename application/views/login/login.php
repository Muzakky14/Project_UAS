<!DOCTYPE html>
<html lang="en">


<?php $this->load->view('include/head'); ?>
<body class="bg-gradient-secondary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div >
                            <img src="<?= base_url('frontend/assets/imgs/awan.jpg') ?>" width="450px">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <!--untuk view di login perhatikan 3 step: 
                                    
                                    1. method POST dan action sesuaikan dengan action login
                                    2. pastikan input diberi atribut name sesuai data yang ingin distor
                                    3. button bertipe submit-->
                                    <form class="user" method="POST" action="<?=base_url()?>index.php/login/aksi_login">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Username Anda" name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                      
                                        <hr>
                                                                            </form>
                                 
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Lupa Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?=base_url()?>index.php/login/register"> Buat Akun Baru ! </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>