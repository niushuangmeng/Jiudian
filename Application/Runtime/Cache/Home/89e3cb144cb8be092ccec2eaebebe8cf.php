<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="/jiudian/Public/bootstrap/js/jquery-1.11.2.min.js" ></script>
    <script  src="/jiudian/Public/bootstrap/js/bootstrap.min.js"></script>
    <link  type="text/css" rel="stylesheet"  href="/jiudian/Public/bootstrap/css/bootstrap.min.css"></link>
  </head>
  <body>
  	<table class="table">
  <caption>房间列表</caption>
  <thead>
    <tr>
      <th>房号</th>
      <th>类型</th>
      <th>状态</th>
      <th>价格</th>
      <th>入住时间</th>
      <th>应退房时间</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
	<?php if(is_array($fangjian)): foreach($fangjian as $key=>$v): ?><tr>
      <td><?php echo ($v["code"]); ?></td>
      <td><?php echo ($v["type"]); ?></td>
      <td><?php echo ($v["station"]); ?></td>
      <td><?php echo ($v["price"]); ?></td>
      <td></td>
      <td></td>
      <td>
      <?php if($v['station']==0): ?><a href="<?php echo U('edit?code='.$v['code']);?>">	<button  type="button" class="btn btn-default ruzhu" code="<?php echo ($v["code"]); ?>">入住</button></a>
      <?php else: ?>
        <a href="<?php echo U('tuifang?code='.$v['code']);?>"><button type="button" class="btn btn-default tuifang" code="<?php echo ($v["code"]); ?>">退房</button></a>
         <a href="<?php echo U('Kehu/index?code='.$v['code']);?>"><button type="button" class="btn btn-default tuifang" code="<?php echo ($v["code"]); ?>">入住人员信息</button></a><?php endif; ?></td>
    </tr><?php endforeach; endif; ?>
   
   
   </tbody>
 </table>
<script type="text/javascript">
	/*$(".ruzhu").click(function(){
		var code = $(this).attr("code");
		$.ajax({
			url:"edit",
			type:"post",
			data:{code:code},
			dateType:"json",
			success:function(){


			}

		});

	})
*/
</script>
  </body>
</html>