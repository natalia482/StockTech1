
<!DOCTYPE html>
<html lang="en">
 <head>
    <title>INGRESO CLIENTE  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="../diseño/css/bootstrap.min.css">
    <link rel="stylesheet" href="../diseño/css/aos.css">
    <link rel="stylesheet" href="../diseño/css/style.css">
    <link rel="stylesheet" href="../diseño/css/Login.css">
</head>
<body>
    <form action="../../Controlador/Controladorcliente/ControladorLogin.php" method="post">
    <div class="site-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 mb-5 mb-md-0">      
                    <div class="p-1 p-lg-5 border">  
                    <h2 class="h2">INGRESO CLIENTE</h2>     
                            <div class="form-group ">
                                <div class="col-md-12">
                                <strong><label class="label">Usuario <span class="text-danger">*</span></label></strong> 
                                    <input type="text" class="form-control" id="usuario" name="usuario" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <strong><label  class="label">Contraseña<span class="text-danger">*</span></label></strong>
                                <input type="password" class="form-control" id="pas" name="pas">
                            </div>
                            <div class="col-md-12">
                                <strong><p class="Registro"><a href="Registrocliente.php">Registrarse</a></p></strong>
                            </div>
                        </div>         
                         <div class="btn-group">
                            <button class="ingresar" name="entrar">Ingresar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
