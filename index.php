<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
        <div class="menu">
        </div>

            <!-- DIV CON FORM DEL Login -->
    <div class="seccionLogin">
        <h2>Iniciar sesion</h2>
       <form method="POST" action="app/test.php">
           <input type="name" class="in" name="name" id="" placeholder="ingrese su email:">
           <input type="name" name="lastname" class="in" placeholder="contraseña"> <br>

           <input type="checkbox" ><span class="validar" style="color: white;">Recordar cuenta</span><br>
           
            
            <select  name="option">
            <option value="suma">Suma</option> 
            <option value="resta">Resta</option>
            <option value="multi" selected>Multiplicacion</option>
            <option value="div">Division</option>
            </select>
            <br>
            <button type="submit">iniciar</button>

       </form>
    </div>
    
</body>
</html>