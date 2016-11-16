<?php
/* Smarty version 3.1.30, created on 2016-11-14 08:57:50
  from "C:\xampp\htdocs\Stand_up\Stand_Up\HTML\Plantillas\horarios_index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58296e7e11fd39_18648401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbab2b0d678c70097708a2b4f9405a4df89dc4f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Stand_up\\Stand_Up\\HTML\\Plantillas\\horarios_index.tpl.html',
      1 => 1479110178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58296e7e11fd39_18648401 (Smarty_Internal_Template $_smarty_tpl) {
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
			<?php echo $_smarty_tpl->tpl_vars['menuhtml']->value;?>

		</header>
		
		<!-- body -->
		<div style="padding-top: 50px;">
			<h3 align="center">Registro de horarios</h3>
		</div>	
		<form id="forma_registro_horarios" id="forma_registro_horarios">
			
			<select name="dia_inicio" id="dia_inicio">
				
				<?php echo $_smarty_tpl->tpl_vars['obj_html']->value->DibujarCombo($_smarty_tpl->tpl_vars['dias_semana']->value);?>

			</select>
			<div id="validar_dia_inicio"></div>
			
			<select name="dia_fin" id="dia_fin">
				
				<?php echo $_smarty_tpl->tpl_vars['obj_html']->value->DibujarCombo($_smarty_tpl->tpl_vars['dias_semana']->value);?>

			</select>
			<div id="validar_dia_fin"></div>

			<input type="time" name="hora" id="hora" placeholder="Hora" step="1" >
			<div id="validar_hora"></div>
			<div align="center" style="padding-top: 10px">
				<input  type="button" name="guardar" value="Guardar" id="guardar_horarios" onclick="fn_registrar_horarios()">
			</div>
		</form>
		<form id="forma_tabla_horarios" name="forma_tabla_horarios">
			   <input type="hidden" id="index_select_tabla" name="index_select_tabla" value="">
			   <input type="hidden" id="id_tabla" name="id_tabla" value="">
		<?php echo $_smarty_tpl->tpl_vars['htmlHorarios']->value;?>

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
 src="../../JS/horarios.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../../JS/GeneralAjax.js"><?php echo '</script'; ?>
>
		
	</body>
</html><?php }
}
