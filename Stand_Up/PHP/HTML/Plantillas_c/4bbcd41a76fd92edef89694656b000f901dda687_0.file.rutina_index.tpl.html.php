<?php
/* Smarty version 3.1.30, created on 2016-11-17 00:51:32
  from "C:\xampp\htdocs\Stand_up\Stand_Up\html\plantillas\rutina_index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582cf104a76c70_30356969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bbcd41a76fd92edef89694656b000f901dda687' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Stand_up\\Stand_Up\\html\\plantillas\\rutina_index.tpl.html',
      1 => 1479240770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582cf104a76c70_30356969 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Stand Up</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../CSS/main.css" />
	</head>
	<body>
		<!-- Header -->
		<header id="header">
			<ul>
		        <li><a href="index.php" >Stand Up</a></li>
				<li><a href="Vista_horarios_index.php"> Horarios</a></li>
				<li><a href="Vista_horario_tareas_index.php"> Tareas</a></li>
				<li><a href="Vista_trabajadores_index.php"> Trabajadores</a></li>
				<li><a href="Vista_rutinas_index.php"> Rutinas</a></li>
				<li><a href="Vista_clasificacion_index.php"> Clasificacion</a></li>
				<li><a href="Vista_area_laboral_index.php"> Areas Laborales</a></li>
				<li><a href="Vista_rutinas_area_index.php"> Rutinas Area</a></li>
			</ul>
		</header>
		
		<!-- body -->
		<div style="padding-top: 50px;">
			<h3 align="center" >Registro de rutinas</h3>
		</div>	
		
		<form enctype="multipart/form-data" id="forma_rutinas" name="forma_rutinas">
			<input type="file" name="url_file" id="url_file" >
			<input type="text" name="duracion" id="duracion" placeholder="Duracion">
			<input type="text" name="descripcion" id="descripcion" placeholder="Descripcion">
			<input type="hidden" name="url_imagen" id="url_imagen" value="/url/imagen" >
			<select id="idclasificacion_rutina" name="idclasificacion_rutina">
				<?php echo $_smarty_tpl->tpl_vars['obj_html']->value->DibujarCombo($_smarty_tpl->tpl_vars['clasificacion']->value);?>

			</select>
			<div align="center" style="padding-top: 10px">
				<input  type="button" name="guardar" value="Registrar" id="guardar_rutinas" onclick="fn_registrar_rutinas()">
			</div>
		</form>
		
		<form enctype="multipart/form-data" id="forma_tabla_rutinas" name="forma_tabla_rutinas">
			<input type="hidden" id="index_select_tabla" name="index_select_tabla" value="">
			<input type="hidden" id="id_tabla" name="id_tabla" value="">
			<?php echo $_smarty_tpl->tpl_vars['htmlRutinas']->value;?>

		</form>
			
		<!-- Footer -->
		<footer id="footer">
			<div class="copyright">
				&copy; <a>Stand Up 2016</a>
			</div>
		</footer>

		<!-- Scripts -->
		<?php echo '<script'; ?>
 src="../../JS/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../../JS/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../../JS/skel.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../../JS/util.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../../JS/main.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../../JS/rutinas.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../../JS/GeneralAjax.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
