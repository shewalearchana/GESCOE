<!DOCTYPE html>
<html>
<head>
	<script LANGUAGE="JavaScript">
function getParams(){
var idx = document.URL.indexOf('?');
var params = new Array();
if (idx != -1) {
var pairs = document.URL.substring(idx+1, document.URL.length).split('&');
for (var i=0; i<pairs.length; i++){
nameVal = pairs[i].split('=');
str=nameVal[1].split('+').join(' ');
params[nameVal[0]] = str;

}
}

return params;
}

</script>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <title>record save</title>
</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand"><h1 style="color: white;">Student Information</h1></a>
    </div-->
</nav>
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<div style="padding: 0 30px; margin:0 auto;height: 420px;">
 	<br><div style="width:500px;background-color:skyblue;border-radius:10px;box-shadow:8px 8px 8px white;" >
	<center><h3>Student's Details</h3></center></div>
	<font style="font-size: 20px;font-family: sans-serif;">
		<script LANGUAGE="JavaScript">
		params = getParams();
			fname = unescape(params["fnm"]);
			mname = unescape(params["mnm"]);
			lname = unescape(params["lnm"]);
			address = unescape(params["address"]);
			adhar = unescape(params["adhar"]);
			contact = unescape(params["contact"]);
			dob = unescape(params["dob"]);
			gen = unescape(params["m"]);
			email = unescape(params["email"]);
			password = unescape(params["password"]);
			course = unescape(params["course"]);
			
		

			document.write("Student name = " +fname +mname +lname + "<br>");
			document.write("Address = " + address +"<br>");
			document.write("Address = " + adhar +"<br>");
			document.write("Contact No = "+contact+"<br>");
			document.write("Date of birth = "+dob+"<br>");
			document.write("Gender = " + gen + "<br>");
			document.write("Email Id = " + email + "<br>");
			document.write("Password= " + password + "<br>");
			document.write("Course= "+course+"<br>");
			

		</script>
	</font>	
</div>
</body>
</html>
