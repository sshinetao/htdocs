<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/LiteBlog/Public/assets/images/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/LiteBlog/Public/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/LiteBlog/Public/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/LiteBlog/Public/assets/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/LiteBlog/Public/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/LiteBlog/Public/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/LiteBlog/Public/assets/js/html5shiv.min.js"></script>
      <script src="/LiteBlog/Public/assets/js/respond.min.js"></script>
    <![endif]-->

	<link rel="stylesheet" href="/LiteBlog/Public/kindeditor/themes/default/default.css" />
	<script charset="utf-8" src="/LiteBlog/Public/kindeditor/kindeditor-min.js"></script>
	<script charset="utf-8" src="/LiteBlog/Public/kindeditor/lang/zh_CN.js"></script>
 <script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					resizeType : 1,
					allowPreviewEmoticons : false,
					allowImageUpload : false,
					items : [
						'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
						'insertunorderedlist', '|', 'emoticons', 'image', 'link']
				});
			});
		</script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?php echo U('Admin/Index/index');?>">首页 </a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo U('Admin/Category/index');?>">分类列表</a></li>
            <li><a href="<?php echo U('Admin/Category/add');?>">添加分类</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo U('Admin/Article/index');?>">文章列表</a></li>
            <li><a href="<?php echo U('Admin/Article/add');?>">发布文章</a></li>
          </ul>
		  <ul class="nav nav-sidebar">
            <li><a href="<?php echo U('Admin/Tag/index');?>">标签列表</a></li>
            <li><a href="<?php echo U('Admin/Tag/add');?>">添加标签</a></li>
          </ul>
        </div>
 
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">添加分类</h1>		
  <form class="form-horizontal">
    <fieldset>
      <div id="legend" class="">
        <legend class="">添加新分类</legend>
      </div>
	  		<div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">分类名称</label>
          <div class="controls">
            <input type="text" placeholder="填写标签名称" class="input-xlarge">
            <p class="help-block">50个字符以内</p>
          </div>
        </div>
    <div class="control-group">
          <!-- Textarea -->
          <label class="control-label">描述</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" class=""> </textarea>
            </div>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">排序</label>
          <div class="controls">
            <input type="text" placeholder="排序号" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>
    <div class="control-group">
          <label class="control-label"></label>

          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success">添加</button>
          </div>
        </div>
    </fieldset>
  </form>
	
         
        </div>
      </div>
    </div>

 
   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/LiteBlog/Public/assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/LiteBlog/Public/assets/js/jquery.min.js"><\/script>')</script>
    <script src="/LiteBlog/Public/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/LiteBlog/Public/assets/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/LiteBlog/Public/assets/js/ie10-viewport-bug-workaround.js"></script>
<script>
 
</script>
  </body>
</html>