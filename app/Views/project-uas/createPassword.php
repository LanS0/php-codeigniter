<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT XYZ - Teknologi</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url("sb2/vendor/fontawesome-free/css/all.min.css");?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url("sb2/css/sb-admin-2.min.css");?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Password for Your Email!</h1>
                            </div>
                            <form action="<?=base_url("/createPW")?>" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0" hidden>
                                        <input type="text" name="id" class="form-control form-control-user"
                                            placeholder="Password" value="<?=$member['id']?>">
                                    </div>
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Create Password Account</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url("/");?>">Back to Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url("sb2/vendor/jquery/jquery.min.js");?>"></script>
    <script src="<?=base_url("sb2/vendor/bootstrap/js/bootstrap.bundle.min.js");?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url("sb2/vendor/jquery-easing/jquery.easing.min.js");?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url("sb2/js/sb-admin-2.min.js");?>"></script>

</body>

</html>