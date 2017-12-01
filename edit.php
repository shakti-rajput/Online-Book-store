<!DOCTYPE html>
<html>
<style>
body {
    background-image:url(background-pattern-design-90.jpg);
}
</style>
<style>
input:focus { 
    background-color:pink;
}
input[type=text], select {
    margin: 8px -1px;
	 padding: 3px 10px;
    display: inline-block;
    border: 1px solid deeppink;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    
    background-color:#7D0552;
    color: white;
    padding: 14px 20px;
    margin: 8px 110px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=message], select {
   
    padding: 6px 5px;
    margin: 18px 2px;
    display: inline-block;
    border: 1px solid deeppink;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit]:hover {
    background-color:steelblue;
}

div {
width:30%;
    border-radius: 5px;
    padding-left: 450px;
	padding-top: 50px;
}
fieldset{

border-radius: 5px;
 border-color: magenta;
 background-color: mistyrose;
}
legend{
border-radius: 5px;
border: 2px solid magenta;
background-color: mistyrose;
border-color: deeppink deeppink mistyrose deeppink;
}
body{
color:deeppink;}
</style>
<script type="text/javascript">

function movetoNext(current, nextFieldID) {

if (current.value.length >= current.maxLength) {

document.getElementById(nextFieldID).focus();

}

}


		function validate()
		{	
					var namepattern=/^[a-zA-Z ]*$/;
					var unamepattern=/^[a-zA-Z 0-9]*$/;
					var z=0;
					var x=0;
            		var msg="";
					var uname0=document.form1.uname.value;
					
           			 if (uname0 == "")
            		{
						msg=msg+"Please provide your Old User Name\n";
             			document.form1.uname.focus();
						x++;
				
           			 }
					else
						{
							if(!namepattern.test(uname0))
							msg=msg+"Only characters and white spaces are allowed in Old User Name block\n";
					
						}
					var uname=document.form1.uname.value;
           			 if (uname == "")
            		{
						msg=msg+"Please provide your User Name\n";
             			document.form1.uname.focus();
						x++;
           			 }
					else
					{
						if(!namepattern.test(uname))
						msg=msg+"Only characters and white spaces are allowed in User Name block\n";
					
					}
			
				
			var uname3=document.form1.password10.value;
			 if (uname3 == "")
            		{
						msg=msg+"Please provide your Password\n";
             			document.form1.password10.focus();
						x++;
           			 }
					
			
			
			
			
			var p1=document.form1.password1.value;
			var p2=document.form1.password2.value;

           			 if (p1 == "")
            		{
				msg=msg+"Please provide your password\n";
             			document.form1.password1.focus();
				x++;
           			 }
				else{
					
					if (p2=="")
					{
					msg=msg+"Please provide your password\n";
             			document.form1.password2.focus();
				x++;
					}
					else{
					if(p1==p2)
					{
					
					}
					else{
					msg=msg+"Please provide same password in both blocks\n";
             			document.form1.password2.focus();
					}
					}
					}
		
			if(msg!="")
			{
				window.alert(msg);
				return false;	
			}
			else
			{
				
				return true;
				
			} 	           	
          
}
</script>
<body>



<h1 align="center" style="color:#7D0552;">SignUp Page</h1>
<div>
<fieldset><legend>SIGN UP FORM</legend>
  <form action="changesignup.php"  name="form1" onsubmit=" return validate()" method="POST">
  

	

	<label for="name">New UserName *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text"  name="uname" placeholder="Username"><br>
 
  <label for="password">Old Password *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
  
  <input type="password"name="password10" placeholder="Password"><br>
 <br>
  <label for="password">New Password *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
  
  <input type="password"  name="password1" placeholder="Password"><br>
 <br>
  <label for="password">ConfirmPassword *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
  
  <input type="password"  name="password2" placeholder="Password"><br>
 <br>

	 <input type="submit" value="Submit">
    
   
  </form>
  </fieldset>
</div>
<br><br><br>


</body>
</html>

