<?php
session_start();
if (!isset($_SESSION['nombre-usuarios'])) {
    
}
else{header('location: index1.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nodo Tech</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!--MODAL LINKS-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="#">Node Tech</a></h1>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="inicio.html">Home</a></li>
          <li><a href="PagPrincipal.html">Sucursales</a></li>
          <li><a href="usuarios.php">Usuarios</a></li>
          <li><a href="">Simulaci??n</a></li>
          <a href="logout.php" class="getstarted">LOG OUT</a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Usuarios</h2>
          
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        
        <div class="row justify-content-center">

          <div class="col-lg-8 text-center ">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>

              <div class="row">
                <div class="col ">
                    <div class="form">
                        <input type="text" id="idINnombre" class="form-control" placeholder="Ingrese un Nombre"
                            aria-describedby="TextHelpBlock">
                        
                </div>
            </div>
        </div>
              </div><!-- End sidebar recent posts-->

              
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

          <div class="col-12 bg-light text-center ">
                    
            <table class="table table-striped ">
                <thead>
                    <td>Id</td>
                    <td>Nombre y Apellido</td>
                    <td>Email</td>
                    <td>Tipo</td>
                    <td>Ocupacion</td>
                    <td><button id="myBtn1" style="border-style:none; background-color: rgb(252, 252, 252);" ><img src="img/agregar.png" width="30px" alt=""></button></td>
                    
                </thead>
                <tbody id="idTB1">
                </tbody>
        </div>
        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
  



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!--JQUERY TABLA DE USUARIOS-->
  <script >
    $(document).ready(function () {
        $('#idINnombre').keyup(function () {
            $("#idTB1").empty()
            var p = $('#idINnombre').val();
            if (p != "") {
                $.ajax({
                    url: "tabla.php",
                    type: "GET", 
                    data: { "nmb_comp": p},
                    dataType: "json",
                    success: function (respuesta) {
                        $.each(respuesta, function (key, value) {
                            $("#idTB1").append("<tr>" +
                                "<td id='id_t'>" + value.id_user + "</td>" +
                                "<td>" + value.nmb_comp + "</td>" +
                                "<td>" + value.email + "</td>" +
                                "<td>" + value.tipo_user + "</td>" +
                                "<td>" + value.ocupacion + "</td>" +
                                "<td><a id='editar' >editar</a></td>" +

                                "</tr>")
                        })
                    }
                })
                }
            })

    //AGREGAR USUARIO NUEVO
    $('#agregar').click(function(){
        
        var nmb=$('#nmb_comp1').val();
        var eml=$('#email1').val();
        var ps=$('#contra1').val();
        var us=$('#tipo_user1').val();
        var oc=$('#ocupacion1').val();
        
    
            $.ajax({
                type:"POST",
                url:"agregar.php",
                data: {"nmb_comp1": nmb, "email1": eml, "tipo_user1": us, "contra1":ps, "ocupacion1":oc},
                dataType: "json",
            });
            
            $('#myModal2').modal('hide')
            alert("REALIZADO")
            $('#nmb_comp1').val('');
            $('#email1').val('');
            $('#contra1').val('');
            $('#tipo_user1').val('');
            $('#ocupacion1').val('');
            
        });

        //MODIFICAR USUARIO
        $('#idTB1').on('click','#editar', function(e) {
            e.preventDefault();
            
            var filaactual = $(this).closest("tr"); // obtiene la fila actual

            var id = filaactual.find("td:eq(0)").text(); // obtiene el valor del primer TD de la fila actual
            
            $.ajax({
                    type:"POST",
                    url:"completar.php",
                    data:{"id":id},
                    dataType:"json",
                    success: function(respuesta){
                        $.each(respuesta, function(key, value){
                            $('#id').val(value.id_user)
                            $('#nmb_comp').val(value.nmb_comp)
                            $('#email').val(value.email)
                            $('#contra').val(value.contra)
                            $('#tipo_user').val(value.tipo_user)
                            $('#ocupacion').val(value.ocupacion)
                            
                        });
                    }
                });
                $('#myModal').modal('show');
        });
        
        $('#enviar').click(function(){

          var id=$('#id').val();
          var nmb=$('#nmb_comp').val();
          var eml=$('#email').val();
          var ps=$('#contra').val();
          var us=$('#tipo_user').val();
          var oc=$('#ocupacion').val();

            $.ajax({
                type:"POST",
                url:"editar.php",
                data: {"id": id,"nmb_comp": nmb, "email": eml, "contra":ps, "tipo_user": us, "ocupacion":oc},
                dataType: "json",
                success: function(respuesta){
                        //$.each(respuesta, function(key, value){
                          //$('#myModal').modal('hide');
                          //alert("REALIZADO");
                        //});
                    }
            });
            $('#myModal').modal('hide');
            alert("REALIZADO")
        });

        //BORRAR USUARIO
        
        $('#borrar').click(function(){
                var opcion = confirm("Desea borrar el usuario? ");
                if (opcion == true) {
                    var usuariomodal=$('#nmb_comp').val()

                    $.ajax({
                        url:"borrar.php",
                        type:"POST",
                        data:{"nmb_comp":usuariomodal},
                        dataType:"json",
                    });
                    $('#myModal').modal('hide')
                }
            });

        //BOTON MODAL DE AGREGAR USUARIO
        $('#myBtn1').click(function(){
                $('#myModal2').modal('show');
        });
    }); 
  </script>


      <!-- MODAL -->
      <div class="modal fade " id="myModal" style="padding-top: 4rem;" role="dialog">
        <div class="modal-dialog">

        <!-- CONTENIDO DEL MODAL-->
        <div class="col-9 modal-content">
            <div class="modal-header"  style="padding:35px 50px;">
                
                <h4> Usuario</h4>
            </div>
            <div class="modal-body text-start " style="padding:40px 50px;">
                <form  method="POST" action="">
                    <div class="form-group">
                        <label > Id</label>
                        <input type="number"  class="form-control" id="id" name="id"  disabled >
                    </div>
                    <div class="form-group">
                        <label > Nombre y Apellido</label>
                        <input type="text" class="form-control" id="nmb_comp" name="nmb_comp" placeholder="Nombre Apellido">
                    </div>
                    <div class="form-group">
                        <label > Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="user@email.com">
                    </div>
                    <div class="form-group">
                        <label > Password</label>
                        <input type="password" class="form-control" id="contra" name="contra" placeholder="*****">
                    </div>
                    <div class="form-group">
                        <label > Tipo</label>
                        <select name="tipo_user" id="tipo_user" class="form-control">
                          <option value="AD">Administrador</option>
                          <option value="G">Gerente</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label > Ocupacion</label>
                      <select name="ocupacion" id="ocupacion" class="form-control">
                        <option value="O">Ocupado</option>
                        <option value="D">Desocupado</option>
                      </select>
                  </div><br>
                    <div class="row  justify-content-center m-auto">
                        <div class="col">
                        <button type="button" id="borrar" style="border-style:none; background-color: white;" ><img  src="img/borrar.png"></button>
                        
                        </div>
                        <div class="col ">
                        <button type="button" id="enviar" style="border-style:none; background-color: white;"><img src="img/guardar.png"></button>
                        </div>
                    </div>
                    </form>
            </div>
            
        </div>
    </div>
</div> 
<!-- MODAL -->
<div class="modal fade " id="myModal2" style="padding-top: 4rem;" role="dialog">
  <div class="modal-dialog">

  <!-- CONTENIDO DEL MODAL-->
  <div class="col-9 modal-content">
      <div class="modal-header"  style="padding:35px 50px;">
          
          <h4> Usuario</h4>
      </div>
      <div class="modal-body text-start " style="padding:40px 50px;">
          <form  method="POST" action="">
              <div class="form-group">
                  <label > Id</label>
                  <input type="number"  class="form-control" id="id1" name="id1" placeholder="1" disabled >
              </div>
              <div class="form-group">
                  <label > Nombre y Apellido</label>
                  <input type="text" class="form-control" id="nmb_comp1" name="nmb_comp1" placeholder="Nombre Apellido">
              </div>
              <div class="form-group">
                  <label > Email</label>
                  <input type="text" class="form-control" id="email1" name="email1" placeholder="user@email.com">
              </div>
              <div class="form-group">
                  <label > Password</label>
                  <input type="password" class="form-control" id="contra1" name="contra1" placeholder="*****">
              </div>
              <div class="form-group">
                  <label > Tipo</label>
                  <select name="tipo_user1" id="tipo_user1" class="form-control">
                    <option value="AD">Administrador</option>
                    <option value="G">Gerente</option>
                  </select>
              </div>
              <div class="form-group">
                <label > Ocupacion</label>
                <select name="ocupacion1" id="ocupacion1" class="form-control">
                  <option value="O">Ocupado</option>
                  <option value="D">Desocupado</option>
                </select>
            </div><br>
              <div class="row  justify-content-center m-auto">
                  
                  <div class="col ">
                  <button type="button" id="agregar" style="border-style:none; background-color: white;"><img src="img/guardar.png"></button>
                  </div>
              </div>
              </form>
      </div>
      
  </div>
</div>
</div> 


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>