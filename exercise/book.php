<?php
session_start();

if(isset($_GET['book1']))
{
  $bk1=$_GET['book1'];
  $pr1=$_GET['pr1'];
  $num1=$_GET['num1'];
  $_SESSION['book1'] = $bk1;
  $_SESSION['pr1'] = $pr1;
  $_SESSION['num1'] = $num1;
}

if(isset($_GET['book2']))
{
  $bk2=$_GET['book2'];
  $pr2=$_GET['pr2'];
  $num2=$_GET['num2'];
  $_SESSION['book2'] = $bk2;
  $_SESSION['pr2'] = $pr2;
  $_SESSION['num2'] = $num2;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>購買書頁面</title>
</head>

<body>
<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="251"><img src="pic/book1.gif" width="246" height="333" /></td>
    <td width="278" id="bk1">超圖解 Arduino 互動設計入門 第3版 <br />
      <br />
      作者：趙英傑著<br />
      書號：F6799<br />
      ISBN：9789863123682<br />
      建議售價：600元<br />
      附件：附1片光碟片</td>
    <td width="248"><img src="pic/book2.gif" width="246" height="333" /></td>
    <td width="223" id="bk2">第一次學 Python 就上手！ <br />
      <br />
      作者：陳惠貞<br />
      書號：FS717<br />
      ISBN：9789863124375<br />
      建議售價：480元</td>
  </tr>
  <tr>
    <td align="center" colspan="2"><a href="book.php?book1=超圖解 Arduino 互動設計入門 第3版 & pr1=600 & num1=bk01"  >加入購物車</a></td>
    <td align="center" colspan="2"><a href="book.php?book2=第一次學 Python 就上手！& pr2=480 & num2=bk02">加入購物車</a></td>
  </tr>
  <tr>
    <td  align="center" colspan="4"><a href="cd.php">購買CD</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>