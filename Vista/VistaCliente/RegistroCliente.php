<!DOCTYPE html>
<html lang="en">
 <head>
    <title>REGISTRARSE </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="../diseño/css/bootstrap.min.css">
    <link rel="stylesheet" href="../diseño/css/magnific-popup.css">
    <link rel="stylesheet" href="../diseño/css/jquery-ui.css">
    <link rel="stylesheet" href="../diseño/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../diseño/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
        body{
            background-image:url(../diseño/images/4.png);
            background-repeat: none;
            background-attachment: scroll;
            background-size: auto;
        }

        label{
            color: white;
            font-family: 'Segoe UI';
            font-size: 18px;
            text-align: center;
            line-height: 100%;
            margin-top: 10px;
            font-weight: bolder;
        }
        h2{
            color:white;
            font-family: "Homer Simpson UI";
            font-size: 100px;
            text-align: center;
        }
        option{
            color:black;
            font-family: "Homer Simpson UI";
            font-size: 18px;
            text-align: center;
        }
        div.row{
            margin-top:-10px;
            display: flex;
            justify-content: center;
            }
        .btn-group .registro:hover {
            background-color: #8FBC8F;
            color: white;
        }
        .registro{
           margin-left: 100px;
            margin-top:10px;
            background-color:#006400;
            opacity: 0.8;
            color: white;
            font-family:'Segoe UI';
            font-size: 25px;
            padding: 16px 100px;
            border: none;
            cursor: pointer;
            border-radius: 12px;
            text-align: center;
     }
        

    </style>
</head>
<body >
   
    <form action="../../CONTROLADOR/CONTROLADORCLIENTE/ControladorRegistro.php" method="post">
    <div class="site-section">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 >REGISTRO</h2>
                    <div class="p-3 p-lg-5 border">
                        
                        <div class="form-group row">
                            <div class="form-group col-md-12">
                            <strong><label for="tdocumento" class="text-black">Cliente<span class="text-danger">*</span></label></strong>
                            <select id="rol"  name="rol" class="form-control">
                                <strong><option name="rol">Cliente</option></strong>
                            </select>
                        </div>

                            <div class="col-md-6">
                                <strong><label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label></strong>
                                <input type="text" class="form-control" id="name" required name="name" autocomplete="off">
                            </div>
                            <div class="col-md-6">
                                <strong><label for="c_fname" class="text-black">Ciudad <span class="text-danger">*</span></label></strong>
                                <input type="text" class="form-control" id="ciudad" required name="ciudad" autocomplete="off">
                            </div>

                            <div class="form-group col-md-12">
                            <strong><label for="tdocumento" class="text-black">Tipo de documento <span class="text-danger">*</span></label></strong>
                            <select id="tdocumento"  name="tdocumento" class="form-control">
                                <strong><option name="tdocumento">C.C</option></strong>   
                                <strong><option name="tdocumento">T.I</option></strong>
                                <strong><option name="tdocumento">Nit</option></strong>
                            </select>
                        </div>

                            <div class="col-md-12">
                               <strong> <label for="document" class="text-black">N° de documento<span class="text-danger">*</span></label></strong>
                                <input type="number" class="form-control" id="document" required name="document" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <strong><label for="c_companyname" class="text-black">Correo electronico</label>
                                <input type="text" class="form-control" id="email" required name="email" placeholder="@" autocomplete="off"></strong>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <strong><label for="c_address" class="text-black">Usuario <span class="text-danger">*</span></label></strong>
                                <input type="text" class="form-control" id="nombre" required name="nombre" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <strong><label for="c_address" class="text-black">Contraseña <span class="text-danger">*</span></label></strong>
                                <input type="password" class="form-control" id="pas" required name="pas" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <strong><label  class="text-black">Validar contraseña <span class="text-danger">*</span></label></strong>
                                <input type="password" class="form-control" id="pas2" required name="pas2" autocomplete="off">
                            </div>
                        </div>
                        <div class="btn-group">
                            <button class="registro" name="registrarse">Registrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>

</body>
</html>