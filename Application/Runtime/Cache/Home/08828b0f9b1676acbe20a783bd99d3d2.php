<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="/jiudian/Public/bootstrap/js/jquery-1.11.2.min.js" ></script>
    <script  src="/jiudian/Public/bootstrap/js/bootstrap.min.js"></script>
    <link  type="text/css" rel="stylesheet"  href="/jiudian/Public/bootstrap/css/bootstrap.min.css"></link>
</head>
<body>
	<div class="panel panel-default">
    <div class="panel-body">
 <form class="form-horizontal" role="form" action="<?php echo U('create');?>" method="post">
 	<div class="form-group" style="display: none">
    <label for="lastname" class="col-sm-2 control-label">身份证号码：</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="room" value="<?php echo ($fangjian['code']); ?>" id="lastname" placeholder="请输入身份证号码">
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">姓名：</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="firstname" placeholder="请输入客户姓名">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">身份证号码：</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idcard" id="lastname" placeholder="请输入身份证号码">
    </div>
  </div>
 <div class="form-group">
    <label class="col-sm-2 control-label">房间信息:</label>
    <div class="col-sm-10">
      <p class="form-control-static">
      	<?php echo ($fangjian["code"]); echo ($fangjian["type"]); ?>
      	</p>
    </div>
  </div>
   <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">入住时间：</label>
    <div class="col-sm-10">
      <input type="datetime-local" name="starttime">
    </div>
  </div>
   <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">退房时间：</label>
    <div class="col-sm-10">
      <input type="datetime-local" name="endtime">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">确定</button>
    </div>
  </div>
</form>
    </div>
</div>



</body>
</html>