
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<title>Comics Cloud</title>
<link href="{{ asset('views/css/style.css') }}" rel="stylesheet" />
</head>
<body>
    <x-nav />
    
    {{ $slot }}
</body>
</html>
<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Contáctanos</h4>
                <p class="lead mb-0">
                  Calle Pedro de valencia
                  <br />
                  06800 Mérida, Badajoz
                  <br />
                  +34 924 11 22 33
                  <br />
                  info@comicscloud.com
              </p>
            </div>
            <!-- Footer Iconos-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Redes Sociales</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-whatsapp"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
            </div>
            <!-- Footer descripcion-->
            <div class="col-lg-4 ">
                <h4 class="text-uppercase mb-4">Info</h4>
                <p class="lead mb-0 ">
                  Condiciones de uso<br>
                  Ayuda<br>
                  Gastos de envío<br>
                  Devoluciones<br>
                  Garantias<br>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright-->
<div class="copyright py-4 text-center text-white ">
    <div class="container"><small>Copyright &copy; Comics Cloud 2024</small></div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>