<style type="text/css">

    
      .container{
        position: absolute;
        margin-top:400px;
        margin-left:-70px;
      }
      
      .site-navbar{
        position:relative;
        height:100%;
        width: 20%;
      }

      .Logos{
        position: fixed;
      }
      .Logo{
        width: 250px;
        height:250px;
        margin-top: -250px;
        margin-left:180px;
      }
      a.js-logo-clone{
        position: fixed;
        font-family: "Homer Simpson UI";
        font-size: 40px;
        text-align: center;
        color: white;
        margin-top:-50px;
        margin-left:-200px;
        color: #006400;
      }
      button{
        position: absolute;
        background-color:#006400 ;
        color: white;
        height:60px;
        margin-top:-50px;
        margin-left:160px;
        width:100px;
      }
    </style>  

<header class="site-navbar" role="banner">
        <div class="container">
            <div class="Logos">
              <div class="site-logo">
               <img class="Logo" src="../diseño/images/logostocktech.png">
                <a href="menu.php" class="js-logo-clone">StockTech</a>
              </div>
            </div> 
            <div class="">
              <ul>
                <li><a href="ListaMaterial.php"><span class="icon icon-view_list"></span></a></li>
                  <form action="../../Controlador/ControladorCliente/ControladorSalir.php" method="post">
                    <div class="form-group">
                      <button class="btn" name="salir">Salir</button>
                    </div>
                  </form>
              </ul>
            </div> 
        </div>
</header>

