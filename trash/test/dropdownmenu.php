<!DOCTYPE html>
<html lang="ko-KR">
<head>
<title>responsive dropdown menu</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<style>


#header{background-color:#6A84B7;color:white;}
a{text-decoration:none;color:white;}
a.author{color:grey;}
label, #toggle{display:none;}
#nav{ padding:0; margin:0;display:inline;}
#nav li{display:inline;}
#contents {min-height: 200px; background: #D9E5FF;}
#footer{background-color:#EAEAEA;font-size:13px;}

/* Android 버그 교정 */ 
body { 
  -webkit-animation: bugfix infinite 1s; 
}
@-webkit-keyframes bugfix { 
  from { padding: 0; } 
  to { padding: 0; } 
} 

@media screen and (max-width: 480px) 
{
#nav{display:none;}
#toggle:checked + #nav{display:block;} 
#nav li{display:block;width:100%;text-align:center;border-top:1px solid #ccc;padding: 4px;}
label {display:block; text-align:center;background: url('menu.png'); background-repeat: no-repeat;background-position:97% 10px;background-size: 24px 19px;
font-size:20px; font-weight:bold;padding:4px 3%;
}
}
</style>
</head>
<body>

<div id="header">
<label for="toggle" onclick>MENU</label>
<input type="checkbox" id="toggle"/>
<ul id="nav">
<li><a href="/sintoburi/webapp/user_main.php">회원관리</a></li> 
<li><a href="/sintoburi/webapp/audio_file_list.php">음성 파일 리스트</a></li> 
<li><a href="/sintoburi/webapp/event_file_list.php">이벤트 일정 리스트</a></li> 
<li><a href="/sintoburi/webapp/event_announce.php">상점 이벤트 알림 (고객용)</a></li> 
</ul>
</div>
<div id="contents">
<?php
include("../user_login.php");
include("../menu.php");
?>
This is test statement.<br>
</div>


</body>

</html>
