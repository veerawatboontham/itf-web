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
  <tr class="bg-info">
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['comment'];?></td>
    <td><?php echo $Result['link'];?></td>
    <td>
      <a href="edit.php?ID=<?php echo $Result['ID']?>" class="btn btn-outline-success" >EDIT</a>
      <a href="del.php?ID=<?php echo $Result['ID']?>" class="btn btn-outline-danger"onclick="return confirm('Confirm data deletion?')">DELETE</a>
    </td>
  </tr>
<?php
}
?>
</table>
<button type="button" class="btn btn-outline-warning" onclick ="window.location.href='form.html'">ADD</button>                                                                                                       
<?php
mysqli_close($conn);
?>
</body>
</html>