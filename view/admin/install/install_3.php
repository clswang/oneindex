<?php view::layout('layout')?>

<?php view::begin('content');?>
	
<div class="mdui-container-fluid">
	<div class="mdui-typo">
	  <h1>系统安装 <small>完成安装</small></h1>
	</div>

<?php if($refresh_token):?>
	<h1>程序安装成功!</h1>
	<br><br>
	<a class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-left" href="./"><i class="mdui-icon material-icons">&#xe2c7;</i> 访问网站</a>
	<!--<a class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-right" href="?/admin/" ><i class="mdui-icon material-icons">&#xe8b8;</i> 管理后台</a>-->
<?php else:?>
	<h1>程序安装失败!</h1>
	<br><br>
	<a class="mdui-btn mdui-btn-raised mdui-float-left" href="?step=2">重新绑定</a>
<?php endif;?>


	
</div>

<?php view::end('content');?>