<?php
session_start();
if(!isset($_SESSION['id'])) {
    echo "<script>window.alert('로그인이 필요합니다.');</script>";
    echo "<script>window.location='./user_login.php';</script>";
    //header('Location: ./user_login.php');
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>상점 주인용: 오디오 파일 업로드</title>
<script type="text/javascript">
function formSubmit(f) {
	var extArray = new Array('wav','mp3','m4a');
	var path = document.getElementById("upfile").value;
	if(path == "") {
		alert("파일을 선택해 주세요.");
		return false;
	}
	var pos = path.indexOf(".");
	if(pos < 0) {
		alert("확장자가 없는파일 입니다.");
		return false;
	}	var ext = path.slice(path.indexOf(".") + 1).toLowerCase();
	var checkExt = false;
	for(var i = 0; i < extArray.length; i++) {
		if(ext == extArray[i]) {
			checkExt = true;
			break;
		}
	}

	if(checkExt == false) {
		alert("업로드 할 수 없는 파일 확장자 입니다.");
	    return false;
	}
	
	return true;
}</script>
</head>
<body>
<form name="uploadForm" id="uploadForm" method="post" action="audio_upload_process.php" enctype="multipart/form-data" onsubmit="return formSubmit(this);">
<div>
<a href="./audio_file_list.php"><img src=./images/file-list.png alt="오디오 파일리스트로 이동하기" title="오디오 파일리스트로 이동하기" border=0 width=50 height=50></img></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="./audio_upload.php"><img src=./images/upload.png border=0 width=50 height=50></img></a>
<br>
<img src='images/audio_m4a.png' border=0 width=40 height=40></img>
<font size=3  Color=purple> 음성 오디오 파일 업로드 화면</font>
<br><br><br>
<font size=5  Color=black><img src=images/item.png border=0 height=25 width=25 />상점명<font color=red>*</font> <INPUT TYPE=TEXT NAME=store STYLE="BACKGROUND-COLOR: #DDDDD0" SIZE=20 MAXLENGTH=20 READONLY VALUE="<?= $_SESSION['name'] ?>" > <br><br> </font>
<!--
<font size=5  Color=black>시작 시간 <INPUT TYPE=TEXT NAME=time STYLE="BACKGROUND-COLOR: YELLOW" SIZE=12 MAXLENGTH=12><br><br> </font>
//-->
<?php
date_default_timezone_set("Asia/Seoul");
$input_year   = date("Y");
$input_month  = date("m");
$input_day    = date("d");
$input_hour   = date("H");
$input_minute = floor(date("i")/10)*10;
// if a minute value is 0, let's modify the value with "00".
if ($input_minute ==  "0")
    $input_minute = "00";

?>
<font size=5  Color=black><img src=images/item.png border=0 height=25 width=25 />시작 시간  </font>
<select name="start_year" STYLE="BACKGROUND-COLOR: YELLOW">
            <option value="<?=$input_year ?>" STYLE="BACKGROUND-COLOR: YELLOW" selected(초기 선택된 항목)><?=$input_year ?></option>
            <option value="2018" STYLE="BACKGROUND-COLOR: YELLOW">2018</option>
            <option value="2019" STYLE="BACKGROUND-COLOR: YELLOW">2019</option>
            <option value="2020" STYLE="BACKGROUND-COLOR: YELLOW">2020</option>
            <option value="2021" STYLE="BACKGROUND-COLOR: YELLOW">2021</option>
</select>년 
<select name="start_month"STYLE="BACKGROUND-COLOR: YELLOW">
            <option value="<?=$input_month ?>" STYLE="BACKGROUND-COLOR: YELLOW" selected(초기 선택된 항목)><?=$input_month ?></option>
            <option value="01" STYLE="BACKGROUND-COLOR: YELLOW">01</option>
            <option value="02" STYLE="BACKGROUND-COLOR: YELLOW">02</option>
            <option value="03" STYLE="BACKGROUND-COLOR: YELLOW">03</option>
            <option value="04" STYLE="BACKGROUND-COLOR: YELLOW">04</option>
            <option value="05" STYLE="BACKGROUND-COLOR: YELLOW">05</option>
            <option value="06" STYLE="BACKGROUND-COLOR: YELLOW">06</option>
            <option value="07" STYLE="BACKGROUND-COLOR: YELLOW">07</option>
            <option value="08" STYLE="BACKGROUND-COLOR: YELLOW">08</option>
            <option value="09" STYLE="BACKGROUND-COLOR: YELLOW">09</option>
            <option value="10" STYLE="BACKGROUND-COLOR: YELLOW">10</option>
            <option value="11" STYLE="BACKGROUND-COLOR: YELLOW">11</option>
            <option value="12" STYLE="BACKGROUND-COLOR: YELLOW">12</option>

</select>월
<select name="start_day"STYLE="BACKGROUND-COLOR: YELLOW">
            <option value="<?=$input_day ?>" selected(초기 선택된 항목)><?=$input_day ?></option>
            <option value="01" STYLE="BACKGROUND-COLOR: YELLOW">01</option>
            <option value="02" STYLE="BACKGROUND-COLOR: YELLOW">02</option>
            <option value="03" STYLE="BACKGROUND-COLOR: YELLOW">03</option>
            <option value="04" STYLE="BACKGROUND-COLOR: YELLOW">04</option>
            <option value="05" STYLE="BACKGROUND-COLOR: YELLOW">05</option>
            <option value="06" STYLE="BACKGROUND-COLOR: YELLOW">06</option>
            <option value="07" STYLE="BACKGROUND-COLOR: YELLOW">07</option>
            <option value="08" STYLE="BACKGROUND-COLOR: YELLOW">08</option>
            <option value="09" STYLE="BACKGROUND-COLOR: YELLOW">09</option>
            <option value="10" STYLE="BACKGROUND-COLOR: YELLOW">10</option>
            <option value="11" STYLE="BACKGROUND-COLOR: YELLOW">11</option>
            <option value="12" STYLE="BACKGROUND-COLOR: YELLOW">12</option>
            <option value="10" STYLE="BACKGROUND-COLOR: YELLOW">10</option>
            <option value="11" STYLE="BACKGROUND-COLOR: YELLOW">11</option>
            <option value="12" STYLE="BACKGROUND-COLOR: YELLOW">12</option>
            <option value="13" STYLE="BACKGROUND-COLOR: YELLOW">13</option>
            <option value="14" STYLE="BACKGROUND-COLOR: YELLOW">14</option>
            <option value="15" STYLE="BACKGROUND-COLOR: YELLOW">15</option>
            <option value="16" STYLE="BACKGROUND-COLOR: YELLOW">16</option>
            <option value="17" STYLE="BACKGROUND-COLOR: YELLOW">17</option>
            <option value="18" STYLE="BACKGROUND-COLOR: YELLOW">18</option>
            <option value="19" STYLE="BACKGROUND-COLOR: YELLOW">19</option>
            <option value="20" STYLE="BACKGROUND-COLOR: YELLOW">20</option>
            <option value="21" STYLE="BACKGROUND-COLOR: YELLOW">21</option>
            <option value="22" STYLE="BACKGROUND-COLOR: YELLOW">22</option>
            <option value="23" STYLE="BACKGROUND-COLOR: YELLOW">23</option>
            <option value="24" STYLE="BACKGROUND-COLOR: YELLOW">24</option>
            <option value="25" STYLE="BACKGROUND-COLOR: YELLOW">25</option>
            <option value="26" STYLE="BACKGROUND-COLOR: YELLOW">26</option>
            <option value="27" STYLE="BACKGROUND-COLOR: YELLOW">27</option>
            <option value="28" STYLE="BACKGROUND-COLOR: YELLOW">28</option>
            <option value="29" STYLE="BACKGROUND-COLOR: YELLOW">29</option>
            <option value="30" STYLE="BACKGROUND-COLOR: YELLOW">30</option>
            <option value="31" STYLE="BACKGROUND-COLOR: YELLOW">31</option>
</select>일
<select name="start_hour"STYLE="BACKGROUND-COLOR: YELLOW">
            <option value="<?=$input_hour ?>" STYLE="BACKGROUND-COLOR: YELLOW" selected(초기 선택된 항목)><?=$input_hour ?></option>
            <option value="01" STYLE="BACKGROUND-COLOR: YELLOW">01</option>
            <option value="02" STYLE="BACKGROUND-COLOR: YELLOW">02</option>
            <option value="03" STYLE="BACKGROUND-COLOR: YELLOW">03</option>
            <option value="04" STYLE="BACKGROUND-COLOR: YELLOW">04</option>
            <option value="05" STYLE="BACKGROUND-COLOR: YELLOW">05</option>
            <option value="06" STYLE="BACKGROUND-COLOR: YELLOW">06</option>
            <option value="07" STYLE="BACKGROUND-COLOR: YELLOW">07</option>
            <option value="08" STYLE="BACKGROUND-COLOR: YELLOW">08</option>
            <option value="09" STYLE="BACKGROUND-COLOR: YELLOW">09</option>
            <option value="10" STYLE="BACKGROUND-COLOR: YELLOW">10</option>
            <option value="11" STYLE="BACKGROUND-COLOR: YELLOW">11</option>
            <option value="12" STYLE="BACKGROUND-COLOR: YELLOW">12</option>
            <option value="13" STYLE="BACKGROUND-COLOR: YELLOW">13</option>
            <option value="14" STYLE="BACKGROUND-COLOR: YELLOW">14</option>
            <option value="15" STYLE="BACKGROUND-COLOR: YELLOW">15</option>
            <option value="16" STYLE="BACKGROUND-COLOR: YELLOW">16</option>
            <option value="17" STYLE="BACKGROUND-COLOR: YELLOW">17</option>
            <option value="18" STYLE="BACKGROUND-COLOR: YELLOW">18</option>
            <option value="19" STYLE="BACKGROUND-COLOR: YELLOW">19</option>
            <option value="20" STYLE="BACKGROUND-COLOR: YELLOW">20</option>
            <option value="21" STYLE="BACKGROUND-COLOR: YELLOW">21</option>
            <option value="22" STYLE="BACKGROUND-COLOR: YELLOW">22</option>
            <option value="23" STYLE="BACKGROUND-COLOR: YELLOW">23</option>
            <option value="00" STYLE="BACKGROUND-COLOR: YELLOW">00</option>
</select>시 
<select name="start_minute"STYLE="BACKGROUND-COLOR: YELLOW">
            <option value="<?=$input_minute ?>" STYLE="BACKGROUND-COLOR: YELLOW" selected(초기 선택된 항목)><?=$input_minute ?></option>
            <option value="00" STYLE="BACKGROUND-COLOR: YELLOW">00</option>
            <option value="10" STYLE="BACKGROUND-COLOR: YELLOW">10</option>
            <option value="20" STYLE="BACKGROUND-COLOR: YELLOW">20</option>
            <option value="30" STYLE="BACKGROUND-COLOR: YELLOW">30</option>
            <option value="40" STYLE="BACKGROUND-COLOR: YELLOW">40</option>
            <option value="50" STYLE="BACKGROUND-COLOR: YELLOW">50</option>
</select>분
<br>
<font color=blue>
(입력방법: 오디오 플레이 시작시간은 10분 단위로 입력하여 주세요.)       
</font>


<br>
<br>
<font size=5  Color=black><img src=images/item.png border=0 height=25 width=25 />음성 메세지 <INPUT TYPE=TEXT NAME=message STYLE="BACKGROUND-COLOR: YELLOW" MAXLENGTH=60 VALUE=""><br> </font>
<font color=blue>
(데이타를 미입력시 <b>음성인식 로봇</b>이 음성 메세지를 자동으로 입력합니다.)<br><br>
</font>
<font size=5  Color=black><img src=images/item.png border=0 height=25 width=25 />비밀번호  <INPUT TYPE=TEXT NAME=password STYLE="BACKGROUND-COLOR: #DDDDD0" SIZE=30 MAXLENGTH=30 READONLY VALUE="<?= $_SESSION['password'] ?>">
</font>
<br>
<font color=blue>
(비밀번호는 로그인 암호가 자동적으로 반영됩니다.)<br><br>
</font>

<label for="upfile"> </label><font size=5 color=black><img src=images/item.png border=0 height=25 width=25 />음성 파일 <input type="file" name="upfile" id="upfile" /></font>
</div>
<font color=blue>
(스마트폰에 <b>곰레코더 (또는 '삼성 음성 녹음'</b>를 설치후에 .m4a으로 녹음한 음성파일을 업로드 하여 주세요.)
</font>
<br>
<br>
<br>
<input type="submit" value="등록하기" />
</form>

</body>
</html>
