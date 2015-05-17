﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>GlitchStores</title>
<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'>

</head>
<body>
<header>
    <br>
        <a href="index.php"> <img src="images/Logo.png" id="LogoPNG" height="100"></a>
        <br>        
</header>

<aside id="top">
	<div class="wrapper">

        <form>
        	<input type="text" placeholder="Search ABC comp..." /><button type="submit">Search</button>
        </form>

        <div id="action-bar"><a href="login.php">Acceder / Registrarse</a>
        </div>
    </div>
</aside>

<!----------------------------------------------------------------------- -->
<article id="grid">
	
    <header>
        <div class="paging">
            página: <a onclick="javascript:return getpágina(1);" href="">1</a>&nbsp; | &nbsp;2&nbsp; | &nbsp;<a onclick="javascript:return getpágina(3);" href="">3</a>  |  <a onclick="javascript:return getpágina('', '', '1');" href="">mostrar todos</a>
        </div>
        
        <form action="#" > Últimos productos 
        <select onchange="javascript:addSort();" name="sortBy" id="sortBy">
            <option value="">Fecha más reciente</option>
            <option value="PriceHiLo">Precio más bajo</option>
            <option value="PriceLoHi">Vendedor mejor puntuado</option>
            <option value="pID">Producto mejor puntuado</option>
        </select> &nbsp; mostrando 26 - 50 de 78 Producto (s)
        </form>

    </header>
    <ul id="items">
        <li>
            <a href="main.php"><img src="images/thumb.png" alt="Audifonos Bose 5-Bas"/></a>
            <a href="main.php" class="title">Audifonos Bose 5-Bas</a>
            <strong>Precio: $1000 <br>GlitchPoints: 50 <br></strong>
            
        </li>
        <li>
            <a href="main.php"><img src="images/thumb1.png" alt="Audifonos Bose 7-Klas"/></a>
            <a href="main.php" class="title">Audifonos Bose 7-Klas</a>
            <strong>Precio: $5000 <br>GlitchPoints: 120 <br></strong>
        </li>
        <li>
            <a href="main.php"><img src="images/thumb2.png" alt="Audifonos Bose 1-AS3"/></a>
            <a href="main.php" class="title">Audifonos Bose 1-AS3</a>
            <strong>Precio: $1249 <br>GlitchPoints: 70 <br></strong>
        </li>
    </ul>
</article>

<!----------------------------------------------------------------------- -->
<article id="grid">
    
<br><br>
    <header>
        <div class="paging">
            página: <a onclick="javascript:return getpágina(1);" href="">1</a>&nbsp; | &nbsp;2&nbsp; | &nbsp;<a onclick="javascript:return getpágina(3);" href="">3</a>  |  <a onclick="javascript:return getpágina('', '', '1');" href="">mostrar todos</a>
        </div>
        
        <form action="#" > Tiendas oficiales
        <select onchange="javascript:addSort();" name="sortBy" id="sortBy">
            <option value="">Mejor puntuadas</option>
            <option value="PriceHiLo">Más nuevas</option>
            <option value="PriceLoHi">Por número de usuarios</option>
        </select> &nbsp; mostrando 26 - 50 de 78 Producto (s)
        </form>

    </header>
    <ul id="items">
        <li>
            <a href="main.php"><img src="images/tienda1.png" alt="Game Planet"/></a>
            <a href="main.php" class="title">Game Planet</a><img src="images/ver.png" height ="22px" width="22px">
        </li>
        <li>
            <a href="main.php"><img src="images/tienda2.png" alt="Liz Minelli"/></a>
            <a href="main.php" class="title">Liz Minelli</a><img src="images/ver.png" height ="22px" width="22px">
        </li>
        <li>
            <a href="main.php"><img src="images/tienda3.png" alt="Price Shoes"/></a>
            <a href="main.php" class="title">Longer title Elegant evening Dress</a><img src="images/ver.png" height ="22px" width="22px">
        </li>
    </ul>

</article>

<!----------------------------------------------------------------------- -->
<article id="grid">
    
<br><br>
    <header>
        <div class="paging">
            página: <a onclick="javascript:return getpágina(1);" href="">1</a>&nbsp; | &nbsp;2&nbsp; | &nbsp;<a onclick="javascript:return getpágina(3);" href="">3</a>  |  <a onclick="javascript:return getpágina('', '', '1');" href="">mostrar todos</a>
        </div>
        
        <form action="#" > Nuevos usuarios 
        </form>

    </header>
    <ul id="items">
        <li>
            <a href="main.php"><img src="images/perfil1.png" alt="Salva100"/></a>
            <a href="main.php" class="title">Salva100</a>
            <strong>Nivel de confianza: 8.8</strong>
        </li>
        <li>
            <a href="main.php"><img src="images/perfil2.png" alt="ValeFCF"/></a>
            <a href="main.php" class="title">ValeFCF</a>
            <strong>Nivel de confianza: 8.8</strong>
        </li>
        <li>
            <a href="main.php"><img src="images/perfil3.png" alt="RK-Rivero"/></a>
            <a href="main.php" class="title">Richard Velro</a>
              <strong>Nivel de confianza: 8</strong>
        </li>
        <li>
            <a href="main.php"><img src="images/perfil4.png" alt="sergioivan154"/></a>
            <a href="main.php" class="title">sergioivan154</a>
              <strong>Nivel de confianza: 8</strong>
        </li>
    </ul>

</article>


<footer>
        <h1>It's about social,</h1><br>
        <h1>It's about commerce!</h1>
        <br>
    <div class="wrapper">
            &copy; GlitchStores Inc. <a href="#">Mapa del Sitio</a> <a href="#">Términos &amp; Condiciones</a> <a href="#">Empleo</a><a href="#">¿Quiénes somos?</a>
        </div>
</footer>
</body>
</html>