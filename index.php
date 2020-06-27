<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 bg-dark text-light">
                <form action="agregarDatos.php" method="POST">
                    <div class="form-group">
                       <h3>Crear registro</h3>
                      <label for="exampleInputEmail1">Nombre</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="nombre">                      
                    </div>  
                    <div class="form-group">                        
                       <label for="exampleInputEmail1">Correo </label>
                       <input type="text" class="form-control" id="exampleInputEmail1" name="correo">                      
                    </div>          
                    <div class="form-group">                        
                        <label for="exampleInputEmail1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="contraseña">                      
                     </div> 
                    <button type="submit" name="agregar" class="btn btn-primary btn-block">Agregar</button><br><br><br>
                    <div class="form-group">
                        <h3>Consultar registro</h3>
                       <label for="exampleInputEmail1">Buscar Usuario</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" name="buscar Usuario">                      
                     </div> 
                     <button type="submit" name="buscar" class="btn btn-success btn-block">Buscar</button><br><br><br>
                     <div class="form-group">
                        <h3>Eliminar registro</h3>
                       <label for="exampleInputEmail1">Buscar Usuario</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" name="Eliminar Usuario">                      
                     </div> 
                     <button type="submit" name="Eliminar" class="btn btn-danger btn-block">Buscar</button><br>
                  </form>
            </div>
            <div class="col-7 border border-dark">              
            </div>
        </div>
    </div>

</body>
</html>