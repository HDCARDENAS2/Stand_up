<?php
/* Smarty version 3.1.30, created on 2016-11-17 00:51:28
  from "C:\xampp\htdocs\Stand_up\Stand_Up\HTML\Plantillas\horario_tareas_index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582cf100528125_08488748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '391a7ff1d93d02e990af64ab60430d8984f84b01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Stand_up\\Stand_Up\\HTML\\Plantillas\\horario_tareas_index.tpl.html',
      1 => 1479110178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582cf100528125_08488748 (Smarty_Internal_Template $_smarty_tpl) {
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
			<h3 align="center" >Gestion de Horario Tareas</h3>
		</div>	 
		
		<form  id="forma_registro_horario_tarea" name="forma_registro_horario_tarea" >
			
            <label for="id_rutina">Rutina</label>
                <select id="id_rutina" name="id_rutina"><?php echo $_smarty_tpl->tpl_vars['obj_html']->value->DibujarCombo($_smarty_tpl->tpl_vars['rutinas']->value);?>
</select>
            <label for="id_horario" >Horario</label>
                <select id="id_horario" name="id_horario"><?php echo $_smarty_tpl->tpl_vars['obj_html']->value->DibujarCombo($_smarty_tpl->tpl_vars['horarios']->value);?>
</select>
                
			<div align="center" style="padding-top: 10px">
		    	<input type="button" name="guardar" value="Registrar" onclick="fn_registrar_horario_tarea()">
			</div>	
			</form>
			<form id="forma_tabla_horario_tarea" name="forma_tabla_horario_tarea">
			   <input type="hidden" id="index_select_tabla" name="index_select_tabla" value="">
			   <input type="hidden" id="id_tabla" name="id_tabla" value="">		
		<?php echo $_smarty_tpl->tpl_vars['htmlHorarioTareas']->value;?>

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
 src="../../JS/horario_tarea.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="../../JS/GeneralAjax.js"><?php echo '</script'; ?>
>
		
	</body>
</html><?php }
}
