<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--estilos de bootsrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>




<!--incono de paguina-->
    <link rel="icon" href="img/incono_transparente.png">
    <!--Titulo-->
    <title>Juno Doctor</title>
</head>
<body>
    <!-- Inicio de barra de navegador-->
  <nav class="navbar navbar-expand-lg navbar navbar-light"  style="background-color: #99D9FB;">
    <a class="navbar-brand" href="index.html">
      <img src="img/img_barra_nav.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
     Junio Doctor
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
              SERVICIOS 
            </a>
            <!--lista de Servicios-->
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              
              <a class="dropdown-item editbtn" data-toggle="modal" data-id="Hematologia" href="#">Hematologia</a>
              <a class="dropdown-item editbtn" data-toggle="modal" data-id="Psicología" href="#">Psicología</a>
              <a class="dropdown-item editbtn" data-toggle="modal" data-id="Neurología" href="#">Neurología</a>
              <a class="dropdown-item editbtn" data-toggle="modal" data-id="Pediatria" href="#"> Pediatria</a>
              <a class="dropdown-item editbtn" data-toggle="modal" data-id="Cardio" href="#">Cardio</a>
              <a class="dropdown-item editbtn" data-toggle="modal" data-id="Cirugias" href="#">Cirugias</a>
            </div>
      </div>
    </div>
  </nav>
  <!--carrosel imagen-->
  <div class="text-center">
  <img src="img/portada.png" class="img-fluid" alt="Responsive image">

  <div class="card text-white bg-info mb-3" style="max-width: 100%">
    <h3 class="card-header text-center" ><strong>"En Juno Doctors, nos especializamos en el cuidado de la salud de tu bebé, desde su desarrollo dentro de ti, hasta su adolescencia"</strong></h3>
    <div class="card-body"style="color: blanchedalmond;">
      <h2 class="card-title text-center">Juno Doctors es un grupo de médicos egresados de los mejores institutos de investigación y formación de México.</h2>
    </div>
  </div>
  
  <div class="card text-white bg-info mb-3" style="max-width: 100%">
    <h1 class="card-header text-center" ><strong>¿Por qué hicimos Juno Doctors?</strong></h1>
    <div class="card-body" style="color: blanchedalmond;">
      <H5 style="text-align:justify;" class="card-text text-center:justify">La medicina es una ciencia muy amplia y llena de muchísimos mitos, en particular en lo que corresponde al desarrollo y salud de nuestros chaparritos.</H5>
  
      <h5 style="text-align:justify;" class="card-text text-center:justify">Como especialista en salud de los menores de 17 años ( pediatra ) y experta en la salud de las vias urinarias y el riñón ( Nefrologa) me he encontrado con muchos casos de niños que pudieron haber sido diagnosticados de forma mas temprana o incluso que por sus antecedentes, debian haber sido revisados de forma preventiva y al no haber sido asi, sus enfermedades se complicaron y llegaron a mi ya tarde.</h5>
  
      <h5 style="text-align:justify;" class="card-text text-center:justify">Como esto, son muchas las enfermedades que como médicos podríamos pensar que deberíamos saber como prevenir o diagnosticar, sin embargo, la medicina es tan amplia que por esta razón nosotros los médicos tenemos que estudiar aun mas años despues de haber terminado la licenciatura en medicina, solo para comenzar nuestra especialidad, en mi caso en pediatria, pero aun más años solo para aprender a diagnosticar de forma temprana y tratar los casos específicos de nefrología, como yo existimos distintas áreas en medicina y mis compañeros y yo llegamos siempre a la misma conclusión, "se pudo haber detectado antes". por esto es que creamos Juno Doctors, donde nosotros como médicos especializados nos encargamos de guiarte siempre con el mayor experto de tu problema, aun si tu chaparrito aun no presenta síntomas, porque las enfermedades no deben solo ser curadas, tambien pueden ser prevenidas y muchas, incluso desde que estan dentro de ti.</h5>
   
    </div>
  </div>
<!--redes sociales-->
<div class="card-group">
  <div class="card">
    <img src="img/img-incono/facebook.PNG" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Redes Sociales</h5>
      <!--FACEBOOK-->
      <span class="codigo"> <form action="https://www.facebook.com/junodoctors/?ref=page_internal" method="post">
        <input type=image src="img/img-incono/incoredes/facebook.png" width="100" height="100"> </form> </span>
        <!--TIKTOK-->
        <span class="codigo"> <form action="www.tiktok.com/@junodoctors?lang=es" method="post">
        <input type=image src="img/img-incono/incoredes/tiktok.png" width="100" height="100"> </form> </span>
      <!--INSTAGRAM-->
      <span class="codigo"> <form action="https://www.instagram.com/junodocs/" method="post">
        <input type=image src="img/img-incono/incoredes/instagram.png" width="100" height="100"> </form> </span>

        <iframe src="https://open.spotify.com/embed-podcast/show/3d4igMv5h6wMNS8g7H2fTe" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
      
    </div>
  </div>
  <div class="card">
    <img src="img/img-incono/iconos-telefono-whatsapp-email.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Contactos</h5>
      <p class="card-text">Telefono: <a href="tel:229 476 4399">229-476-4399</a></p>
      <p class="card-text">Correo: <a href="mailto:junodoctors@gmail.com">junodoctors@gmail.com</a></p>
      <p class="card-text">whatsapp: <a href=" https://api.whatsapp.com/send?phone=522294764399&fbclid=IwAR3zL-hZ6app2Z5aXQMbG0KUn8Ztmc-DFdSHHl14o-ZOJUim3SiRFwIxUKs">229-476-4399</a></p>
      <p class="card-text">Descarga la App Juno Doctors: <a href="Descarga.php">Descargar</a></p>
     
    </div>
  </div>
  <div class="card">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.174142517459!2d-96.13501258562158!3d19.187594853442544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c346b66d5d6fa5%3A0x64b448596deac668!2sMedica%20Centro!5e0!3m2!1ses-419!2smx!4v1602185263205!5m2!1ses-419!2smx" width="350" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <div class="card-body">
      <h5 class="card-title">Localización</h5>
      <p class="card-text">Direccion: <a href=" https://goo.gl/maps/TyYQH6V85anifJeV9">Avenida 20 de Noviembre 787, Centro, 91700 Veracruz, Veracruz Llave</a></p>
      
    </div>
  </div>
</div>

<!--model informacion persona-->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalle de la tarea </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--formulario informacion para dar de alta persona-->
        <form action="Conexion/Guardar.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Grupo de Especilidad</label>
           
            <input class="form-control" type="text" id="grupo_uicacion" name="grupo_uicacion" placeholder="" readonly>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre Completo</label>
            <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Escriba su Nombre Completo" >
          </div>
          <br>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="actualizadatos" name="actualizadatos">Entregada</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="ventana" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><strong>Juno Doctors</strong></h5>
        <button type="button" class="close" onclick="pauseVid()" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <video id="myVideo" controls autoplay="true" width=320  height=240 controls poster="vistaprevia.jpg" >
      <source src="Video/intro.mp4" type="video/mp4">
        </video>  
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<script> 
var vid = document.getElementById("myVideo"); 



function pauseVid() { 
    myVideo.pause(); 
} 
</script> 

<script>
      $(document).ready(function()
      {
         $("#ventana").modal("show");
      });
</script>

<!--modal ingresar-->
<script>
    $(document).ready(function(){
      $(".editbtn").click(function(){ // Click to only happen on announce links
        $("#grupo_uicacion").val($(this).data('id'));
        $('#editmodal').modal('show');
      });
  });
  </script>
  </body>
  <div id="copyright"class="text-center">Copyright&copy; 2020 - Medica Centro "Juno Doctors"  - Todos los derechos reservados</div>
</html>



  
      