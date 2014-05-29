<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Sitio del Cuerpo Académico"/>
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<title>Cuerpo Académico</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{asset('css/site.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">    
</head>
<body>
    <div id="wrapper">
            <section id="top">
                
				    <ul class="redes-sociales">
						<li><a target="blank" class="icon-twitter" href="#" rel="external"></a></li>
						<li><a target="blank" class="icon-facebook" href="#"></a></li>
						<li><a target="blank" class="icon-youtube" href="#"></a></li>
						<li><a target="blank" class="icon-instagram" href="#"></a></li>
					</ul>
             </section>  
			<header>
				<figure>
					<a href="http://www.ujat.mx">
                        <img src="{{asset('imagenes/escudo_ujat.png')}}" />
					</a>
				</figure>
				<h1>Grupo de Investigación: Modernización de Sistemas de Software en la Calidad Organizacional de la DAIS (GI MSSO)</h1>
			</header>
			<nav>
				<ul>
					<li>
						<a href="#">Inicio</a>
					</li>
					<li>
						<a href="#">Conócenos</a>
					</li>
					<li>
						<a href="#">Coordinación</a>
					</li>
					<li>
						<a href="#">Publicaciones</a>
					</li>
					<li>
						<a href="#">Multimedia</a>
					</li>
					<li>
						<a href="#">Noticias</a>
					</li>
				</ul>
			</nav>
			<h2>
				@yield('titulo')
			</h2>
			<section id="content">
				<section id="nav-izquierdo">
				<article id="menu1">
					<h5>Grupo de Investigación</h5>
					<ul>
						<li><a href="">Como nace</a></li>
						<li><a href="">Misión</a></li>
						<li><a href="">Visión</a></li>
						<li><a href="">Funciones</a></li>
						<li><a href="">Objetivos</a></li>
						<li><a href="">Currículum representante GI</a></li>
					</ul>
				</article>
				<article id="menu2">
					<h5>Accesos rápidos</h5>
					<ul>
						<li><a href="">Copias de libros</a></li>
						<li><a href="">Miembros</a></li>
						<li><a href="">Tesis</a></li>
						<li><a href="">Memorias en extenso</a></li>
						<li><a href="">Galería de imágenes</a></li>
						<li><a href="">Eventos</a></li>
					</ul>
				</article>
				<article id="calendario">
					<div ><a href="">Ver calendario escolar</a></div>
				</article>
			</section>
			<section id="contenido">
				@yield('content')
			</section>
			</section>
			<footer>
				Km 1 Carretera Cunduacán - Jalpa de Méndez. Tel: (933) 358 1500 ext. 6727, 6730, 6733, 6735, 6739 Fax: (914) 336-0870
			</footer>
		</div>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
</body>
</html>
