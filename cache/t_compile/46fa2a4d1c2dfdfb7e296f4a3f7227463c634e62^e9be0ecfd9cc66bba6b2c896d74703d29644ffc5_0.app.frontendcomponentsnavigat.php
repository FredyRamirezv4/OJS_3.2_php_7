<?php
/* Smarty version 3.1.34-dev-7, created on 2023-04-19 02:09:56
  from 'app:frontendcomponentsnavigat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_643f3154138781_20294411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9be0ecfd9cc66bba6b2c896d74703d29644ffc5' => 
    array (
      0 => 'app:frontendcomponentsnavigat',
      1 => 1612563757,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643f3154138781_20294411 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['navigationMenuItem']->value->getLocalizedTitle() ));?>

<span class="task_count">
	<?php echo $_smarty_tpl->tpl_vars['unreadNotificationCount']->value;?>

</span>
<?php }
}
