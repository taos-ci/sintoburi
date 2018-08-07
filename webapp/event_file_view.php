<?php
include('webapp_config.php');
$db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//$file_id  = $_REQUEST['file_id'];
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>상점행사 관리 리스트  목록</title>
</head>
<body>

<br>
<br>
<a href="./event_file_list.php"><img src=./images/file-list.png border=0 width=50 height=50></img></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>

<?php
// Author: Hyunjoon Lim, Suyeon Lim
// Title: a detail view of file id
// Date: Aug-03-2018
// License: Star License
//

$query = "SELECT * FROM $table_name_event WHERE file_id = '$file_id'";
$stmt = mysqli_prepare($db_conn, $query);
$exec = mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while($row = mysqli_fetch_assoc($result)) {
?>

<?php
// The statement is how to create a dialog with “yes” and “no” options before removing a event file
// https://stackoverflow.com/questions/9334636/how-to-create-a-dialog-with-yes-and-no-options
?>

<table border="1">
<tr>
  <td bgcolor=green>삭제</td>
  <td><a href=event_file_remove_pre.php?file_id=<?= $row['file_id'] ?>&name_orig=<?= $row['name_orig'] ?>&name_save=<?= $row['name_save'] ?>>
       <img src=./images/remove.png border=0 height=20 width=20 ></img>
      </a>
  </td>
</tr>
<tr>
  <td bgcolor=green>업로드 시각</td>
  <td><?=$row['reg_time'] ?>
</tr>
<tr>
  <td bgcolor=green>상점명</td>
  <td width=100 style="table-layout:fixed; word-break:break-all;"><?=$row['store_name'] ?></td>
</tr>
<tr>
  <td bgcolor=green>입력 내용</td>
  <td width=350 style="table-layout:fixed; word-break:break-all;"><?=$row['event_msg'] ?></td>
</tr>
<tr>
  <td  bgcolor=green >IP 주소</td>
  <td><?= $row['ip_address'] ?></td>
</tr>
</table>

<?php
}
mysqli_free_result($result);
mysqli_stmt_close($stmt);
mysqli_close($db_conn);
?>
<br>
<br>

</font>
</td>
</tr>
</table>
<br><br>
</body>
</html>

