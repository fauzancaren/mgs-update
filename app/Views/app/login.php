 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8"> 
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/icon.png') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:site" content="@mahieraglobalsolution" data-rh="true">
    <meta name="twitter:creator" content="@mahieraglobalsolution" data-rh="true">
    <meta name="twitter:title" content="mahiera global solution - Enterprise Resource Planning" data-rh="true">
    <meta name="twitter:description" content="Aplikasi ini dibuat dengan tujuan mempermudah proses transaksi penjualan di Mahiera Global Solution" data-rh="true">
    <meta name="twitter:image" content="<?= base_url('assets/images/icon.png') ?>" data-rh="true">
    <title>MGS-ERP | LOGIN FORM</title>
    <link href="<?= base_url('assets/bootstrap-5.2.3/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">  
    
    <link rel="stylesheet" href="<?= base_url("assets/fonts/roboto/roboto.css")?>">
    <style>
        body{
            font-family: "Roboto", sans-serif;
        }
    </style>
 </head>
 <body>
    <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="<?= base_url('asset/image/obi-erp/logo-blue.png') ?>" alt="logo" width="100">
					</div>
					<div class="card shadow-lg border-0">
						<div class="card-body p-5 ">
							<h1 class="fs-4 card-title fw-bold mb-4">Login App</h1>
                            <?php if(session()->getFlashdata('msg')):?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('email')." ".session()->getFlashdata('msg') ?></div>
                            <?php endif;?>  

							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="username">username</label>
									<input id="username" type="text" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
										Username Tidak Valid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password Tidak Valid
							    	</div>
								</div>

								<div class="d-flex  "> 
									<button type="submit" class="btn btn-primary">
										Login
									</button>
                                    <a href="forgot.html" class="ms-auto">
                                        Lupa Password?
                                    </a>
								</div>
							</form>
						</div> 
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2017-2024 &mdash; MAHIERA GLOBAL SOLUTION 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
 </body>
 </html>