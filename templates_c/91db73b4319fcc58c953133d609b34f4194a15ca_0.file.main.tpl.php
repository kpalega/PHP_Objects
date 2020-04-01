<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-01 17:52:50
  from 'D:\xampp\htdocs\BMI\app\view\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e84b8d235aa40_00271021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91db73b4319fcc58c953133d609b34f4194a15ca' => 
    array (
      0 => 'D:\\xampp\\htdocs\\BMI\\app\\view\\templates\\main.tpl',
      1 => 1585414887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e84b8d235aa40_00271021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl"> 

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/css/noscript.css" /></noscript>
    

</head>

<body controls preload="none">
    <div id="wrapper">
<!-- Header -->	
        <header id="header">
		<a class="logo">Kalkulator</a>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5373265745e84b8d2357398_69527087', 'head');
?>

        </header>  
 
<!-- Main -->
    <div id="main">
         <section class="post">
             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9043393845e84b8d2357cf7_92542150', 'content');
?>

         </section>
    </div>

<!-- Footer -->
        <footer id="footer">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10246220575e84b8d2358553_98338080', 'footer');
?>

            <section class="alt row">
                    <div class= "col-4" ><h3>Telefon</h3> <p>(+48) 123 456 789</p></div>
                    <div class= "col-4" ><h3>Email</h3> <p>k.palega@onet.pl</p></div>
                    <div class= "col-3" >
                        <center>
                        <ul class="icons alt">
			<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
			<li><a href="https://github.com/kpalega" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                        </ul>
                        </center>
                    </div>
                </section>
            
        </footer>
    
    
    <!-- Copyright -->
    <div id="copyright">
        <ul><li>&copy; Karolina Pałęga</li><li> Widok oparty na: <a href="https://html5up.net">HTML5 UP</a></li></ul>
    </div>
    
</div>
    <!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
                      
</body>
</html><?php }
/* {block 'head'} */
class Block_5373265745e84b8d2357398_69527087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_5373265745e84b8d2357398_69527087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_9043393845e84b8d2357cf7_92542150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9043393845e84b8d2357cf7_92542150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_10246220575e84b8d2358553_98338080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10246220575e84b8d2358553_98338080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
