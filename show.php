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
<table id="myTable" width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['comment'];?></td>
    <td><form action = "form2.html" method = "post" id="CommentForm" >
  <button type="submit" class="btn btn-primary">เเก้ไข</button>
  </form><button onclick="myFunction()">ลบ</button> </td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
  <form action = "form.html" method = "post" id="CommentForm" >
  <button type="submit" class="btn btn-primary">เพิ่ม</button>
  </form>
<script>
function myFunction() {
  document.getElementById("myTable").deleteRow(0);
}
</script>

</body>
</html>
