<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Peduli Diri - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <Style>
        body{
            font-family: sans-serif;
        }
     input::-webkit-outer-spin-button,
     input::-webkit-inner-spin-button {
         -webkit-appearance: none;
          margin: 0;
     }

     #card-login{
        background-color: black;
        opacity: 95%;
        color: white;
        border: none;
    }

    #btnSubmit{
        background-color: transparent ;
        border: none
    }

    .form-control {
        background-color: white ;
        opacity: 99%;
        border: none;
    }

    #grade{
        color: white;
    }
 </Style>
</head>

<body style="background-image:url(lam2.jpg); background-size:cover;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card mt-5" id="card-login">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center" id="grade">
                                        <h1 class="h4 mb-2 mt-4">Selamat Datang di Aplikasi Peduli Diri</h1>
                                        <p>Silakan Masukan NIK dan Nama Lengkap Anda.</p>
                                    </div>
                                    <form class="user" method="post" action="proses_login.php">
                                        <div class="form-group">
                                            <input name="nik" required type="number" class="form-control form-control-user text-gray-900"
                                                id="nama" aria-describedby="emailHelp"
                                                placeholder="Masukan 16 di NIK Anda."> 
                                         <script>
                                             document.getElementById("nama").addEventListener("input",(e) =>{
                                                 let val = e.target.value;
                                                 val = val.replace(/[^1-9]/g,"");
                                                 e.target.value = val;
                                             });
                                         </script>

                                        </div>
                                        <div class="form-group">
                                            <input name="nama_lengkap" required type="text" class="form-control form-control-user" onkeypress="return (event.charCode > 64 && event.
                                                                                                                                charCode < 91) || (event.charCode > 96 && event.charCode < 123)"
                                                id="exampleInputPassword" placeholder="Masukan Nama Anda...">
                                        </div>
                                        <button type="submit" id="btnSubmit" class="btn btn-success btn-user btn-block bg-danger">
                                            <i class="fa fa-spinner"></i> Login
                                        </button>
                                        <hr>
                                        <a href="register.php" id="btnSubmit" class="btn btn-success btn-user btn-block bg-danger">
                                             Belum Punya Akun...? Silakan Ke Halaman Register <i class="fa fa-arrow-right fa-fw"></i>
                                        </a>
                                    </form>
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