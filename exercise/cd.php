<?php
    session_start();

    if(isset($_GET['cd1']))
    {
      $cd1=$_GET['cd1'];
      $pri1=$_GET['pri1'];
      $numb1=$_GET['numb1'];
      $_SESSION['cd1']=$cd1;
      $_SESSION['pri1']=$pri1;
      $_SESSION['numb1']=$numb1;
    }
    if(isset($_GET['cd2']))
    {
      $cd2=$_GET['cd2'];
      $pri2=$_GET['pri2'];
      $numb2=$_GET['numb2'];
      $_SESSION['cd2']=$cd2;
      $_SESSION['pri2']=$pri2;
      $_SESSION['numb2']=$numb2;
    } 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>購買CD頁面</title>
</head>

<body>
<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="251"><img src="pic/cd1.jpg" width="246" height="333" /></td>
    <td width="278"><div>
      <h2 itemprop="name">LIR: 王友良+松岡李那+R-ICE 松岡李那《全彩寫真》+卡通版野口資料夾 (CD+贈品A)</h1>
      <h2></h2>
    </div>
      <div>
        <ul>
          <li>發行公司：愛貝克思</li>
          <li>產品編號：KEP17001A</li>
          <li>發行日期：2017/05/16</li>
          <li>媒體形式：CD</li>
          <li>張數：1 張 - 1CD</li>
        </ul>
      </div>
      <div>
        <div>
          <div>
            <ul>
              <li>定價：359元</li>
              <li>優惠價：<strong itemprop="offers" itemscope="" itemtype="http://schema.org/Offer"><strong itemprop="price">328</strong></strong>元</li>
            </ul>
          </div>
        </div>
    </div></td>
    <td width="248"><img src="pic/cd2.jpg" width="246" height="333"/></td>
    <td width="223"><div>
      <h2 itemprop="name">李千娜 / 愛 到站了</h1>
      <h2></h2>
    </div>
      <div>
        <ul>
          <li>發行公司：Universal</li>
          <li>產品編號：8897317</li>
          <li>發行日期：2014/05/16</li>
          <li>媒體形式：CD</li>
          <li>張數：1 張 - 1CD</li>
        </ul>
      </div>
      <div>
        <div>
          <div>
            <ul>
              <li>定價：<strong><strong>459</strong></strong>元</li>
            </ul>
          </div>
        </div>
    </div></td>
  </tr>
  <tr>
    <td align="center" colspan="2"><a href="cd.php?cd1=LIR: 王友良+松岡李那+R-ICE 松岡李那《全彩寫真》+卡通版野口資料夾 (CD+贈品A) & pri1=359 & numb1=cd01">加入購物車</a></td>
    <td align="center" colspan="2"><a href="cd.php?cd2=李千娜 / 愛 到站了 & pri2=459 & numb2=cd02">加入購物車</a></td>
  </tr>
  <tr>
    <td  align="center" colspan="4"><a href="cart.php">結帳去</a></td>
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
