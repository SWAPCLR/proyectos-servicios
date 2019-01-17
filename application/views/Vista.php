<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Reportes</title>
  </head>
  <body>
  <nav class="navbar nav-light" style="background-color: #e3f2fd;">
  <a class="nav-link active" href="#">HOME</a>
  <a class="nav-link" href="#">LISTADO REPORTES</a>
  <a class="nav-link" href="#">NUEVO REPORTE</a>
  <a class="nav-link" href="#">SEGUIMIENTO</a>
  
</nav>
    <h1>PRUEBA SERVICIOS</h1>

    <br>
    <br>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  BUSCAR CLIENTE
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
      <form>
  <div class="form-group">
    <label for="buscar">CLIENTES</label>
    <input type="text" class="form-control" id="buscar"  placeholder="BUSCAR...">
    <small id="buscarHelp" class="form-text text-muted">......</small>
  </div>
</form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<form method="post" action="<?php echo site_url("Controlador/Create") ?>">
  <div class="form-group">
    
    <input type="text" class="form-control" id="nombre_cliente" placeholder="Nombre del cliente">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="contacto" placeholder="Contacto">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="tel_oficina" placeholder="Tel. oficina">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="direccion" placeholder="Direccion">
  </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>