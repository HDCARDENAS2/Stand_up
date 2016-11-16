<?php
/* Smarty version 3.1.30, created on 2016-11-17 00:50:59
  from "C:\xampp\htdocs\Stand_up\Stand_Up\HTML\Plantillas\index.tpl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582cf0e3baacb8_17052034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b483a826201a6adc32134f6bf9d40e0b00ed5e32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Stand_up\\Stand_Up\\HTML\\Plantillas\\index.tpl.html',
      1 => 1479340092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582cf0e3baacb8_17052034 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Stand Up</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../CSS/main.css" />
		<link rel="stylesheet" href="../../CSS/login.css" />
	</head>
	
	<body>
		<form  id="forma_login_usuario" name="forma_login_usuario" >
			<div id="styleLogin">
				<div id="LoginContenedor-1">
					<div id="LoginContenedor-2">
						<table id="tabla_login">
							<tr><td><label><b>Username</b></label></td></tr>
							<tr><td><input type="text"  name="user_name" id="user_name" required></td></tr>
							<tr><td><label><b>Password</b></label></td></tr>
							<tr><td><input type="password"  name="user_pass" id="user_pass" required></td></tr>
							<tr><td><input type="button" value="Login" onclick="fn_validar_login()"></td></tr>
						</table>
					</div>
				</div>
			</div>
		</form>
	<!-- body -->
							
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
 src="../../JS/js_login.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../JS/GeneralAjax.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
