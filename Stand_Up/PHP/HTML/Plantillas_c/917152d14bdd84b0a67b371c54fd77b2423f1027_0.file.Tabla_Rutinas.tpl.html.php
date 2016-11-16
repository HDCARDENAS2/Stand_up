<?php
/* Smarty version 3.1.30, created on 2016-11-17 00:54:12
  from "C:\xampp\htdocs\Stand_up\Stand_Up\html\plantillas\Tabla_Rutinas.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582cf1a4ac87f6_38708062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '917152d14bdd84b0a67b371c54fd77b2423f1027' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Stand_up\\Stand_Up\\html\\plantillas\\Tabla_Rutinas.tpl.html',
      1 => 1479340439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582cf1a4ac87f6_38708062 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 style="padding-top: 10px" align="center">Rutinas</h3>
<table id="tabla_rutina_<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
" name="tabla_rutina<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
">
	<tr>
		<th>ID</th>
		<th></th>
		<th>Url de imagen</th>
		<th>Duracion</th>
		<th>Descripcion</th>
		<th>Clasificacion</th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rutinas']->value, 'rutina', false, 'em');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['em']->value => $_smarty_tpl->tpl_vars['rutina']->value) {
?>
	<tr id="row_<?php echo $_smarty_tpl->tpl_vars['horario']->value['id_rutinas'];?>
">
		<td><?php echo $_smarty_tpl->tpl_vars['rutina']->value['id_rutinas'];?>
</td>
		<input type="hidden" name="id_rutinas_<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['rutina']->value['id_rutinas'];?>
"/>
		<td><img src="../../Imagenes/<?php echo $_smarty_tpl->tpl_vars['rutina']->value['url_imagen'];?>
" width="40" height="40"></td>
		
		<td><input type="file" name="url_file_<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
[]"><?php echo $_smarty_tpl->tpl_vars['rutina']->value['url_imagen'];?>

			<input type="hidden" name="url_imagen_<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
[]" id="url_imagen_<?php echo $_smarty_tpl->tpl_vars['em']->value;?>
" value="/url/imagen" >
		</td>

		<!-- <td><input type="file" >
		<input type="hidden" id="url_imagen_<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
[]" name="url_imagen_<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['rutina']->value['url_imagen'];?>
"  >
		</td> -->
		<td><input type="text" name="duracion_<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
[]" id="duracion" value="<?php echo $_smarty_tpl->tpl_vars['rutina']->value['duracion'];?>
"></td>
		<td><input type="text" name="des_rutina_<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
[]" id="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['rutina']->value['des_rutina'];?>
"></td>
		<td>
		<select name="clasificacion_<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
[]"><?php echo $_smarty_tpl->tpl_vars['obj_html']->value->DibujarCombo($_smarty_tpl->tpl_vars['clasificacion']->value,$_smarty_tpl->tpl_vars['rutina']->value['id_clasificacion'],true);?>
</select></td>
		<td>
			<input type="button"  value="Guardar" onclick="fn_update_rutinas( this.parentNode.parentNode.rowIndex,<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['em']->value;?>
);">
		</td>
		<td>
			<input type="button"  class="delete" value="Eliminar" onclick="fn_delete_rutinas( this.parentNode.parentNode.rowIndex,<?php echo $_smarty_tpl->tpl_vars['id_tabla']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['rutina']->value['id_rutinas'];?>
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
