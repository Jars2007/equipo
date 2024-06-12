<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content= "width=device-width, initial-scale=1.0">
        <title> Citas </title>

        <link rel="preload" href="css/estilos.css" as="style">
        <link rel="stylesheet" href="css/estilos.css">
</head>
<body> 
    <header>
        <h1 class="titulo"> </span></h1> 
    </header> 
<?php include_once 'menu.php' ?>

<section class="contenedor">
    <h2 class="citas"> Pedidos</h2>
    <form class="formulario" action=../citas.php method="POST">
    <fieldset>
        <legend> Favor de llenar todos los campos </legend>

        <div class="contenedor-campos">

        <div class="campo">
            <label> NombreCompleto </label>
            <input class="input-text" type="text" placeholder="Nombre Completo"
            name="nombre">
</div>
<div class="campo">
    <label>Correo Electronico </label>
    <input class="input-text"type="email" placeholder ="Correo Electronico"
    name ="correo">
</div>

<div class="campo">
    <label> Telefono </label>
    <input class="input-text"type="tel" placeholder ="Telefono"
    name ="tel">
</div>

<div class="campo">
    <label> Fecha de agenda </label>
    <input class="input-text"type="date" name ="fecha">
</div>

<div class="campo">
    <label>Hora de la Cita</label>
    <input class="input-text" type="time" name="hora" required>
</div>

<div class="campo">
    <label> Tipo de vehiculo </label>
    <select class="input-text" name="vehiculo">
        <option value="auto"> Auto </option>
        <option value ="camioneta">Camioneta</option>
        <option value ="motocicleta">Motocicleta</option>
</select>
</div>
<div class="campo">
    <label> Placa del vehiculo </label>
    <input class="input-text"type="text" name="placa" placeholder="Placa del vehiculo">
</div>

<div class="campo">
    <label>Color</label>
    <input class="input-text" type="text" name="color" placeholder="Color del vehiculo">
</div>
<div class="campo">
    <label> Aromatizante de preferencia </label>
    <select class="input-text" name="aromatizante">
        <option value="Lavanda"> Lavanda </option>
        <option value ="Canela">Canela</option>
        <option value ="Coco">Coco</option>
        <option value="Manzana">Manzana</option>
</select>
</div>
</div> <!--Contenedor campo-->

<div class ="alinear-centro flex">
    <input class="boton w-sm-100" type="submit" value="Enviar">
</div>

</fieldset>
</form>
</section>

<footer class='footer'>
    <p> Centro de Bachillerato Industrial de Trabajo y de Servicios </p>
    <p> José Alejandro Ramos Sánchez, 4to "G" </p>
</footer>
</body>
</html>
