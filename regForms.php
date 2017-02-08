<html>
<head>
<title>Registration Forms in HTML</title>
<link href='style.css' rel='stylesheet' type='text/css'/>
</head>
<body>
<?php
session_start();
	
	require("connect.php");
?>
<form name='regForm' method='POST' action='post.php'>
<table align='center' border='1' width='70%' cellpadding='6' cellspacing='0'>
<thead>
<tr><th colspan='2'>New User Please Register</th></tr>
</thead>
<tbody>
<tr><td width='32%'><label for='regFname'>Enter Name</label></td><td>
<input title='Min 2 Char' type='text' name='fname' value='' id='regFname'/>
</td></tr>
<tr><td>Enter Email</td><td>
<input type='text'  name='email' id='regEmail' value=''/>
</td></tr>
<tr><td>Enter DOB</td><td>
<input type='text' name='dob' placeholder='YYYY-MM-DD' id='regDob'/>
</td></tr>
<tr><td>Enter Password</td><td>
<input type='password' name='pwd' value='' id='regPwd'/>
</td></tr>
<tr><td>Confirm Password</td><td>
<input type='password' name='cpwd' id='regCpwd'/>
</td></tr>
<tr><td>Choose Gender</td><td>
<input type='radio' value='Male' id='regGendm' name='gend'/> <label for='regGendm'>Male</label>
<input type='radio' value='Female' id='regGendf' name='gend'/> <label for='regGendf'>Female</label>
</td></tr>
<tr><td>Choose Lanugage</td><td>
<input type='checkbox' name='lang[]' id='regLange' value='English'  /> Eng
<input type='checkbox' name='lang[]' id='regLangh' value='Hindi' /> Hin
<input type='checkbox' name='lang[]' id='regLangt' value='Telugu'/> <label for='regLangt'>Tel</label>
</td></tr>
<tr><td>Choose Country</td><td>
<select name='coun' id='regCoun'>
<option value=''>Please Select</option>
<option value='IN'>INDIA</option>
<option value='US'>UNITED STATES</option>
<option value='UK'>UNITED KINGDOM</option>
</select>
</td></tr>
<tr><td>Address</td><td>
<textarea name='addr' id='regAddr' rows='5' cols='25'>
</textarea>
</td></tr>
</tbody>
<tfoot>
<tr><td colspan='2' align='right'>
<input type='submit' value='Register !' name='submit'/>
<input type='reset' value='Refresh !' name='can'/>
</td></tr>
</tfoot>
</table>
</form>
</body>
</html>
