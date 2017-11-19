<html>
<head>
<title>my very first contact form</title>

</head>
<body>
<table width="450" border="0" align="center" cellpadding="3" cellspacing="1">
<tr align="center"><td><strong>Login Form</strong></td></tr>
</table>

<table width="450" border="0" align="center" cellpadding="0" cellspacing="1">
<tr><td>
<!--create a form for email input-->
<form name="form1" method="post" action="send_contact.php" onsubmit="return validateForm()">
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1"> 
<tr>

<td>Email*</td>
<td>:</td>
<td><input name="user_mail" type="text" id="user_mail1" size="50" required></td>
</tr>
<tr>

<tr>
<td>Name*</td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50" required></td>
</tr>
<tr>
<td width="16%">Subject*</td>
<td width="2%">:</td>
<td width="82%"><input name="subject" type="text" id="subject" size="50" required></td>
</tr>

<tr>
<td>Message*</td>
<td>:</td>
<td><textarea name="detail" cols="50" rows="4" id="detail" required></textarea></td>
</tr>

<td>&nbsp;</td> 
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" ><input type="reset" name="Submit2" value="Reset"></td>
</tr>

</table>
 
</body>

</html>

