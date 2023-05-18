<?php
	session_start();

	$buy = [];
	$cnt = 0;
	$total=0;

	echo '<table border="2" align="center" valign="center">
		<tr align="center" valign="center">
		<td colspan="4" width="100%">以下是您購買的商品</td>
		</tr>
		<tr align="center" valign="center">
		<td width="10%">項次</td>
		<td width="25%">產品代號</td>
		<td width="50%">產品名稱</td>
		<td width="15%">價格</td>
		</tr>';

	if (isset($_SESSION['book1'])) {
		$cnt++;
		echo '<tr>
			  <td>'.$cnt.'</td>
			  <td>'.$_SESSION['num1'].'</td>
			  <td>'.$_SESSION['book1'].'</td>
			  <td>'.$_SESSION['pr1'].'</td>
			  </tr>';
		$total+=$_SESSION['pr1'];
		unset($_SESSION['num1']);
		unset($_SESSION['pr1']);
		unset($_SESSION['book1']);
	}

	if (isset($_SESSION['book2'])) {
		$cnt++;
		echo '<tr>
			  <td>'.$cnt.'</td>
			  <td>'.$_SESSION['num2'].'</td>
			  <td>'.$_SESSION['book2'].'</td>
			  <td>'.$_SESSION['pr2'].'</td>
			  </tr>';

		$total+=$_SESSION['pr2'];
		unset($_SESSION['num2']);
		unset($_SESSION['pr2']);
		unset($_SESSION['book2']);
	}

	if (isset($_SESSION['cd1'])) {
		$cnt++;
		echo '<tr>
			  <td>'.$cnt.'</td>
			  <td>'.$_SESSION['numb1'].'</td>
			  <td>'.$_SESSION['cd1'].'</td>
			  <td>'.$_SESSION['pri1'].'</td>
			  </tr>';
		$total+=$_SESSION['pri1'];
		unset($_SESSION['numb1']);
		unset($_SESSION['pri1']);
		unset($_SESSION['cd1']);
	}

	if (isset($_SESSION['cd2'])) {
		$cnt++;
		echo '<tr>
			  <td>'.$cnt.'</td>
			  <td>'.$_SESSION['numb2'].'</td>
			  <td>'.$_SESSION['cd2'].'</td>
			  <td>'.$_SESSION['pri2'].'</td>
			  </tr>';
		$total+=$_SESSION['pri2'] ;
		unset($_SESSION['numb2']);
		unset($_SESSION['pri2']);
		unset($_SESSION['cd2']);
	}
	echo '<tr><td colspan="4" align="right">總金額：'.$total.'</td></tr>';
	echo '<tr><td colspan="4" align="CENTER"><a href="book.php">BACK</a></td></tr>';
	echo '</table>';	
	
?>
