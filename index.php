<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-sacale=1.0">
        <link href="CSS/Estilos.css" rel="stylesheet">
        <title> CRUD DE USUARIOS </title>

    </head> 
 
    <body>
        <div class="users-form">
            
        <form action="">
            <h1> CREAR USUARIO </h1>
            <input type="text" name="name" placeholder="Nombre"></input>
            <input type="text" name="lastname" placeholder="Apellidos"></input>
            <input type="text" name="username" placeholder="Username"></input>
            <input type="password" name="passsword" placeholder="Password"></input>
            <input type="email" name="email" placeholder="Email"></input>

            <input type="submit" value="agregar"></input>
    </form>
</div>
<div class="users-table    ">
    <h2>usuarios registrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>nombre</th>
                <th>apellidos</th>
                <th>username</th>
                <th>password</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

                <th> <a href="">Editar</a></th>
                <th> <a href="">Eliminar</a></th>
                <th></th>
            </tr>
        </tbody>
    </table>
</body>
</html>     
    



  