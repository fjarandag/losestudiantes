<?php
$layout_title='Hermandad &quot;Los Estudiantes&quot;: 404 P&aacute;gina no encontrada';
$layout_meta_description='Hermandad Los Estudiantes';
$layout_meta_keywords='hermandad los estudiantes, cristo de la fe y del perdon, cofradia, semana santa';
$layout_seccion='none';
$layout_estilo='imagen';
$dir_prefix = 'old/';

function layout_body(){
	global $dir_prefix;
?>
<style>
<!--
.inscripcion {
	border:2px darkred solid;
	margin:0px 3px 1em 3px; padding:3px;
	background-color: #ff9; color: #000;
}
.inscripcion a:link {color:#00f;}
.inscripcion a:visited {color:#40f;}
-->
</style>
<div class="inscripcion">
	<strong>Página no encontrada</strong><br />
	<div style="text-align:justify">
		<p style="margin:2pt 0pt;padding-left:1em; text-indent: -1em;">
		Lamentamos comunicarle que la página o recurso que Vd. solicitó no se encuentra en este sitio.
		Puede tratarse de un fallo técnico del sitio, o es posible que la URL indicada sea incorrecta.<br/>
		Puede probar alguna de las siguientes acciones:
		<ul style="margin-top:0px;">
		<li>Revisar que la URL sea correcta.</li>
		<li>Utilizar un buscador (Por ejemplo <a href="http://www.google.com/search?q=site:losestudiantes.org" target="_blank">Google</a>, utilizando el parámetro site:losestudiantes.org).</li>
		<li>Buscar dentro de nuestro <a href="mapa.php">mapa</a> del sitio</li>
		<li><a href="mailto:info@losestudiantes.org">Escribirnos un correo</a> (si cree que es un fallo del sitio)</li>
		<li>Escribir al webmaster del sitio de origen (si considera que es un enlace roto).</li>
		</ul>
	</div>
</div>
<?php
	include $dir_prefix.'inc/inc_home.php';
}
include $dir_prefix.'inc/base.php';
?>

