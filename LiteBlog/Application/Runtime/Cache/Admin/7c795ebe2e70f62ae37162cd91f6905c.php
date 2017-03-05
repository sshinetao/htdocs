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

     <link href="/LiteBlog/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/LiteBlog/Public/umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="/LiteBlog/Public/umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/LiteBlog/Public/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/LiteBlog/Public/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="/LiteBlog/Public/umeditor/lang/zh-cn/zh-cn.js"></script>
		<style>
			body {
  min-height: 2000px;
  padding-top: 70px;
}
		</style>
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
          <h1 class="page-header">标签列表</h1>
 

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
              </tbody>
            </table>
          </div>
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
	 var um = UM.getEditor('myEditor',{
		toolbar:[
            'source | undo redo | bold italic underline strikethrough | superscript subscript | forecolor backcolor | removeformat |',
            'insertorderedlist insertunorderedlist | selectall cleardoc paragraph | fontfamily fontsize' ,
            '| justifyleft justifycenter justifyright justifyjustify |',
            'link unlink | emotion image  ',
            '| horizontal  preview fullscreen' 
        ]
		,theme:'default'
		,initialFrameWidth:'100%' //初始化编辑器宽度,默认500
        ,initialFrameHeight:'350' //初始化编辑器高度,默认500
	 });
</script>
  </body>
</html>