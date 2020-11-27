<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, '63070161lab-13.mysql.database.azure.com', 'Veerawat@63070161lab-13', 'Khv30043004', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1" class="table table-striped table-dark">
  <tr class="bg-info" style="background-color:#A4A4A4;">
    <th width="100"> <div align="center">ชื่อสินค้า</div></th>
    <th width="350"> <div align="center">ราคาต่อหน่วย</div></th>
    <th width="150"> <div align="center">จำนวน</div></th>
    <th width="150"> <div align="center">ราคาทั้งหมด</div></th>
    <th width="150"> <div align="center">การจัดการ</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Product'];?></div></td>
    <td><?php echo $Result['Price'];?></td>
    <td><?php echo $Result['Amount'];?></td>
    <td><?php echo $Result['Price']*$Result['Amount'];?></td>
    <td>
      <a href="del.php?ID=<?php echo $Result['ID']?>" class="btn btn-outline-danger"onclick="return confirm('Confirm data deletion?')">DELETE</a>
    </td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
