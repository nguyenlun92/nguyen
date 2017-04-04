
<html>
	<head>
	    <meta charset="utf-8" />
	</head>
	<style>
		table{
			width:80%;
			margin:auto;
		}
		table td
		{
			text-align:center;
		}
	</style>
	<body>

<table>
	<?php if(isset($_POST["submit"]))
		{
			echo "<tr> <td colspan ='2'> Chào bạn: ".$_POST["ten"]." </td> </tr>";
			echo "<tr> <td colspan ='2'> Email của bạn là:".$_POST["email"]."</td> </tr>";
			echo "<tr> <td colspan='2' > <input type='button' value='Trờ  lại' onclick='javascript:location.reload();'> </td> </tr>";
		}
		else
		{
	?>



		<form method="post" action="">
	<tr><th colspan='2'>  Đăng nhập </th>  </tr>
			<tr> <td class="title"> Họ và tên: </td> <td> <input type="text" name="ten"> </td> </tr>
			<tr> <td class="title"> Địa chỉ Email: </td> <td> <input type="text" name="email"> </td> </tr>	
			<tr> <td colspan="2" > <input type="submit" value="Submit" name="submit"> </td> </tr>
		</form>
		<?php } ?>
</table>
	</body>
</html>

