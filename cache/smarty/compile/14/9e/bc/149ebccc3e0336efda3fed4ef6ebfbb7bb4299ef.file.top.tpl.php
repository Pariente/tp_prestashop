<?php /* Smarty version Smarty-3.1.19, created on 2016-06-03 14:38:29
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/uecookie/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87625155657517a45153ae6-72039760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '149ebccc3e0336efda3fed4ef6ebfbb7bb4299ef' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/uecookie/top.tpl',
      1 => 1464888306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87625155657517a45153ae6-72039760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vareu' => 0,
    'uecookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57517a451b9c42_81752276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57517a451b9c42_81752276')) {function content_57517a451b9c42_81752276($_smarty_tpl) {?><script>
    
        function setcook() {
            var nazwa = 'cookie_ue';
            var wartosc = '1';
            var expire = new Date();
            expire.setMonth(expire.getMonth()+12);
            document.cookie = nazwa + "=" + escape(wartosc) +";path=/;" + ((expire==null)?"" : ("; expires=" + expire.toGMTString()))
        }
        
        function closeUeNotify(){
            <?php if ($_smarty_tpl->tpl_vars['vareu']->value->uecookie_position==2) {?>
                $('#cookieNotice').animate(
                {bottom: '-200px'}, 
                2500, function(){
                    $('#cookieNotice').hide();
                }); setcook();
            <?php } else { ?>
                $('#cookieNotice').animate(
                {top: '-200px'}, 
                2500, function(){
                    $('#cookieNotice').hide();
                }); setcook();
            <?php }?>
        }
    
</script>
<style>
    
        .closeFontAwesome:before {
            content: "\f00d";
            font-family: "FontAwesome";
            display: inline-block;
            font-size: 23px;
            line-height: 23px;
            color: #<?php echo $_smarty_tpl->tpl_vars['vareu']->value->uecookie_closex;?>
;
            padding-right: 15px;
            cursor:pointer;
        }
        .closeButtonNormal {
            display:block;
            text-align:center;
            padding:2px 5px;
            border-radius:2px;
            color: #<?php echo $_smarty_tpl->tpl_vars['vareu']->value->uecookie_close_txt;?>
;
            background: #<?php echo $_smarty_tpl->tpl_vars['vareu']->value->uecookie_close_bg;?>
;
            cursor:pointer;             
        }
        #cookieNotice p {
            margin:0px; 
            padding:0px;
        }
    
</style>
<div id="cookieNotice" style=" width: 100%; position: fixed; <?php if ($_smarty_tpl->tpl_vars['vareu']->value->uecookie_position==2) {?>bottom:0px; box-shadow: 0px 0 10px 0 #<?php echo $_smarty_tpl->tpl_vars['vareu']->value->uecookie_shadow;?>
;<?php } else { ?> top:0px; box-shadow: 0 0 10px 0 #<?php echo $_smarty_tpl->tpl_vars['vareu']->value->uecookie_shadow;?>
;<?php }?> background: #<?php echo $_smarty_tpl->tpl_vars['vareu']->value->uecookie_bg;?>
; z-index: 9999; font-size: 14px; line-height: 1.3em; font-family: arial; left: 0px; text-align:center; color:#FFF; opacity: <?php echo $_smarty_tpl->tpl_vars['vareu']->value->uecookie_opacity;?>
 ">
    <div id="cookieNoticeContent" style="position:relative; margin:auto; width:100%; display:block;">
    <table style="width:100%;">
      <td style="text-align:center;">
        <?php echo $_smarty_tpl->tpl_vars['uecookie']->value;?>

      </td>
      <td style="width:80px; vertical-align:middle; padding-right:20px; text-align:right;">
        <?php if (Configuration::get('uecookie_usex')==1) {?>
            <span class="closeFontAwesome" onclick="closeUeNotify()"></span>
        <?php } else { ?>
        	<span class="closeButtonNormal" onclick="closeUeNotify()"><?php echo smartyTranslate(array('s'=>'close','mod'=>'uecookie'),$_smarty_tpl);?>
</span>
        <?php }?>
     </td>
     </table>
    </div>
</div><?php }} ?>
