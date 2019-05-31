<?php 
include 'Funciones/funcion.php';  
$dd=new funcion();
$fila=$dd->valor(1);



?>

<!doctype html>

<html>
<head>
    <meta charset="UTF-8" /></head>
      <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <body>
    <script>
      $(document).ready(function(){
 
    /*
        Stop carousel
    */
    $('.carousel').carousel('pause');
 
});
    </script>
 
  <div class="row">
  <div class="col-1" style="background-color:#191716 ;height: 650PX;"></div>
  <div class="col-10" style="background-color:#161b33;height: 650PX;">
 
 <form action="juego.php" method="post">
   <div class="row">
  <div class="col-4"> 
    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- The slideshow -->

  <div class="carousel-inner">
     <div class="carousel-item active ">
      <img src="assets\iconos\128\x.png"  class="mx-auto d-block" alt="<?php echo $fila['nombre']; ?>">
    </div>
    <?php foreach ($fila as $d) {
      # code...
    ?>
    <div class="carousel-item ">
      <img src="<?php echo $d['img']; ?>" class="mx-auto d-block" alt="<?php echo $d['nombre']; ?>">
    </div>
 <?php }  ?>
</div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="row">
  <div class="col"><div class="form-group">
    <label for="text">Daño</label>
    <input type="text" class="form-control" id="dao" readonly>
  </div></div>
  <div class="col"><div class="form-group">
    <label for="text">Armadura</label>
    <input type="text" class="form-control" id="armadura" readonly>
  </div></div>
</div>
<div class="row">
  <div class="col"> <div class="form-group">
    <label for="text">Velocidad</label>
    <input type="text" class="form-control" id="velocidad" readonly>
  </div></div>
   <div class="col"> <div class="form-group">
    <label for="text">Suerte</label>
    <input type="text" class="form-control" id="suerte" readonly>
  </div></div>
</div>
</div>
<div class="col-4">
      <div id="demo1" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- The slideshow -->

  <div class="carousel-inner">
     <div class="carousel-item active ">
      <img src="assets\iconos\128\x.png" class="mx-auto d-block" alt="<?php echo $fila['nombre']; ?>">
    </div>
    <?php foreach ($fila as $d) {
      # code...
    ?>
    <div class="carousel-item ">
      <img src="<?php echo $d['img']; ?>" class="mx-auto d-block" alt="<?php echo $d['nombre']; ?>">
    </div>
 <?php }  ?>
</div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo1" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo1" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

 <div class="row">
  <div class="col"><div class="form-group">
    <label for="text">Daño</label>
    <input type="text" class="form-control" id="dao1" readonly>
  </div></div>
  <div class="col"><div class="form-group">
    <label for="text">Armadura</label>
    <input type="text" class="form-control" id="armadura1" readonly>
  </div></div>
</div>
<div class="row">
  <div class="col"> <div class="form-group">
    <label for="text">Velocidad</label>
    <input type="text" class="form-control" id="velocidad1" readonly>
  </div></div>
   <div class="col"> <div class="form-group">
    <label for="text">Suerte</label>
    <input type="text" class="form-control" id="suerte1" readonly>
  </div></div>
</div>
</div>
<div class="col">
      <div id="demo2" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- The slideshow -->

  <div class="carousel-inner">
     <div class="carousel-item active ">
      <img src="assets\iconos\128\x.png"  class="mx-auto d-block" alt="<?php echo $fila['nombre']; ?>">
    </div>
    <?php foreach ($fila as $d) {
      # code...
    ?>
    <div class="carousel-item ">
      <img src="<?php echo $d['img']; ?>" class="mx-auto d-block" alt="<?php echo $d['nombre']; ?>">
    </div>
 <?php }  ?>
</div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo2" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo2" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="row">
  <div class="col"><div class="form-group">
    <label for="text">Daño</label>
    <input type="text" class="form-control" id="dao2" readonly>
  </div></div>
  <div class="col"><div class="form-group">
    <label for="text">Armadura</label>
    <input type="text" class="form-control" id="armadura2" readonly>
  </div></div>
</div>
<div class="row">
  <div class="col"> <div class="form-group">
    <label for="text">Velocidad</label>
    <input type="text" class="form-control" id="velocidad2" readonly>
  </div></div>
   <div class="col"> <div class="form-group">
    <label for="text">Suerte</label>
    <input type="text" class="form-control" id="suerte2" readonly>
  </div></div>
</div>

</div>
</div>
 <input type="number" name="pociones"min="0" max="10">
<input type="submit" name="">
</form>

</div>
<div class="col-1" style="background-color:#191716 ;height: 650PX;"></div>
</div>
</body>
</html>