<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table">
  <caption>基本的表格布局</caption>
  <thead>
    <tr>
      <th>名称</th>
      <th>城市</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tanmay</td>
      <td>Bangalore</td>
    </tr>
    <tr>
      <td>Sachin</td>
      <td>Mumbai</td>
    </tr>
  </tbody>
</table>
<?php echo ($user["ids"]); ?>
<?php echo ($user["name"]); ?>
<?php echo ($user["idcard"]); ?>
<?php echo ($user["starttime"]); ?>
<?php echo ($user["endtime"]); ?>
<?php echo ($user["room"]); ?>
</body>
</html>