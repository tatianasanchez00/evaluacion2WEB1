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
                      <input type="text" class="form-control" id="nombre" name="nombre">                      
                    </div> 

                    <div class="form-group">                        
                       <label for="exampleInputEmail1">Correo </label>
                       <input type="text" class="form-control" id="correo" name="correo">                      
                    </div> 

                    <div class="form-group">                        
                        <label for="exampleInputEmail1">Contraseña</label>
                        <input type="password" class="form-control" id="contraseña" name="contraseña">                      
                     </div> 

                    <button type="submit" id="agregar" name="agregar" class="btn btn-primary btn-block">Agregar</button><br><br><br>
                    <div class="form-group">
                    </form>
                     <form action="buscarDatos.php" method="POST">  
                    <h3>Consultar registro</h3>
                       <label for="nombreUsuario">Buscar Usuario</label>
                       <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario">                      
                     </div> 

                     <button type="submit" id="buscar" name="buscar" class="btn btn-success btn-block">Buscar</button><br><br><br>
                     <div class="form-group">
                     </form>  
                     <form action="eliminarDatos.php" method="POST">  

                     <h3>Eliminar registro</h3>
                       <label for="exampleInputEmail1">Buscar Usuario</label>
                       <input type="text" class="form-control" id="eliminar usuario" name="eliminarUsuario">                      
                     </div> 
                     <button type="submit" id="eliminar" name="eliminar" class="btn btn-danger btn-block">Eliminar</button><br>
                  </form>
            </div>
            <div class="col-7 border border-dark">              
            </div>
        </div>
    </div>
</body>
</html>