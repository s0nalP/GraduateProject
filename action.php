<?php
include('connection.php');
if(isset($_GET['status']))
{
$status1=$_GET['status'];
$select=mysql_query("select * from user where userid='$status1'");
while($row=mysql_fetch_object($select))
{
$status_var=$row->status;
if($status_var=='active')
{
$status_state='inactive';
}
else
{
$status_state='active';
}
$update=mysql_query("update user set status='$status_state' where userid='$status1' ");
if($update)
{
header("Location:user.php");
}
else
{
echo mysql_error();
}
}
?>
<?php
}
?>