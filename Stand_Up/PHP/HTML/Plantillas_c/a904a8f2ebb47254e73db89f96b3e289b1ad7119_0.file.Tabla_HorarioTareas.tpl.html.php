<?php
/* Smarty version 3.1.30, created on 2016-11-17 00:51:28
  from "C:\xampp\htdocs\Stand_up\Stand_Up\HTML\Plantillas\Tabla_HorarioTareas.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582cf1004c13c1_00763772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a904a8f2ebb47254e73db89f96b3e289b1ad7119' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Stand_up\\Stand_Up\\HTML\\Plantillas\\Tabla_HorarioTareas.tpl.html',
      1 => 1479110178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582cf1004c13c1_00763772 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 style="padding-top: 10px" align="center">Horario Tareas</h3>
<table id="tabla_horario_tarea<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
" name="tabla_horario_tarea<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
">
	<tr>
		<th width="20%">ID</th>
		<th width="20%">Horario</th>
		<th width="20%">Rutina</th>
		<th width="20%">Estado</th>
		<th width="10%"></th>
		<th width="10%"></th>
	</tr>
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_horario_tarea']->value, 'horariotarea', false, 'em');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['em']->value => $_smarty_tpl->tpl_vars['horariotarea']->value) {
?>
	<tr id="row_<?php echo $_smarty_tpl->tpl_vars['horariotarea']->value['id_horario_tarea'];?>
">
		<td><?php echo $_smarty_tpl->tpl_vars['horariotarea']->value['id_horario_tarea'];?>

		<input type="hidden"  name="id_horario_tarea<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['horariotarea']->value['id_horario_tarea'];?>
" />
		</td>
		<td>
		<select name="id_horarios<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
[]"><?php echo $_smarty_tpl->tpl_vars['obj_html']->value->DibujarCombo($_smarty_tpl->tpl_vars['lista_horarios']->value,$_smarty_tpl->tpl_vars['horariotarea']->value['id_horarios'],true);?>
</select>
		</td>
		<td>
	    <select name="id_rutinas<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
[]"><?php echo $_smarty_tpl->tpl_vars['obj_html']->value->DibujarCombo($_smarty_tpl->tpl_vars['lista_rutinas']->value,$_smarty_tpl->tpl_vars['horariotarea']->value['id_rutinas'],true);?>
</select>
		</td>
		<td>
		<select name="cod_estado<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
[]"><?php echo $_smarty_tpl->tpl_vars['obj_html']->value->DibujarCombo($_smarty_tpl->tpl_vars['lista_estados']->value,$_smarty_tpl->tpl_vars['horariotarea']->value['cod_estado'],true);?>
</select>
		</td>
		<td>
		 <input type="button"  value="Guardar" onclick="fn_udapte_horario_tarea(this.parentNode.parentNode.rowIndex,<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
);">
		</td>
		<td>
		<input type="button"  value="Eliminar" class="delete" onclick="fn_delete_horario_tarea(this.parentNode.parentNode.rowIndex,<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['horariotarea']->value['id_horario_tarea'];?>
);">
		</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</tbody>
</table><?php }
}
