<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 20px;
            height: 20px;
        }
        th,
        td{
            text-align:center;
        }
    </style>
</head>
<body>
    <p>
        <h2>INGRESO DE DATOS DEL ESTUDIANTE</h2>
    </p>
    <form action="EstudianteController.php" method="post">
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </p>
        
        <p>
            <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        </p>
        
        <p>
            <label for="direccion">direccion</label>
            <input type="text" name="direccion">
        </p>
        
        <p>
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono">
        </p>
        
        <p>
            <input type="submit" value="Guardar Registro">
        </p>
    </form>
    <hr>
    <h3>LISTADO DE ESTUDIANTES</h3>
    <hr>
    <table border="1">
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th colspan="2">OPERACIONES</th>

          <tr>
                <td>Marvin Arnoldo</td>
                <td>Ordóñez Jiménez</td>
                <td>Huehuetenango</td>
                <td>64356897</td>
                <td><a href="editar.php"><img src="editar.svg" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.php"><img src="eliminar.svg" alt="Eliminar" title="Eliminar"></a></td>
          </tr>
          
          <tr>
                <td>Carlos Antonio</td>
                <td>Gomez Lopez	</td>
                <td>Zona 8</td>
                <td>34523456</td>
                <td><a href="editar.php"><img src="editar.svg" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.php"><img src="eliminar.svg" alt="Eliminar" title="Eliminar"></a></td>
          </tr>
        
          <tr>
                <td>Alejandro Andres</td>
                <td>Ramirez Herrera	</td>
                <td>Zona 7</td>
                <td>93212345</td>
                <td><a href="editar.php"><img src="editar.svg" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.php"><img src="eliminar.svg" alt="Eliminar" title="Eliminar"></a></td>
          </tr>

          <tr>
                <td>Victor Josue</td>
                <td>Villatoro Hernandez	</td>
                <td>Zona 1</td>
                <td>93453823</td>
                <td><a href="editar.php"><img src="editar.svg" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.php"><img src="eliminar.svg" alt="Eliminar" title="Eliminar"></a></td>
          </tr>

    
    </table>
</body>
</html>