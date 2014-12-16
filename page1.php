<?php
//Session starts here
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Swayam</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,800,700italic,700,600italic,600,400italic,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://ssl.gstatic.com/docs/script/css/add-ons.css">
<link rel="stylesheet" href="CSS/university_des.css" type="text/css" media="all">
<link href="CSS/bootstrap.css" rel="stylesheet">
<link href="CSS/bootstrap-responsive.css" rel="stylesheet">

<script type="text/javascript">

function alphabet(){
if (!form.name1.value.match(/^[a-zA-Z]+$/) && form.name1.value !="")
{
form.name1.value="";
form.name1.focus();
alert("please enter character/alphabets");
}
}

function alphabet1(){
if (!form.name2.value.match(/^[a-zA-Z]+$/) && form.name2.value !="")
{
form.name2.value="";
form.name2.focus();
alert("please enter character/alphabets");
cd }
}
function alphabet3(){
if (!form.name3.value.match(/^[a-zA-Z]+$/) && form.name3.value !="")
{
form.name3.value="";
form.name3.focus();
alert("please enter character/alphabets");
cd }
}

function IsValidEmail(email) {
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            return expr.test(email);
        };
        function ValidateEmail() {
            var email = document.getElementById("txtEmail").value;
            if (!IsValidEmail(email)) {
                alert("Invalid email address.");
            }
            else {
                alert("Valid email address.");
            }
        }

function Validate()
        {
            var x = document.form.txtPhone.value;
            var y = document.form.txtMobile.value;
           if(isNaN(x)||x.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false; 
           }
           if (x.length>8)
           {
                alert("enter 8 characters");
                return false;
           }
          
 
           if(isNaN(y)||y.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false; 
           }
           if (y.length>10)
           {
                alert("enter 10 characters");
                return false;
           }
          
        }

</script>

</head>
<body>
<div class="wrapper">
	<div class="wrapper-container">
    <!-- banner ----->
        <div class="banner-image">
        	<img src="images/university/Visva-Bharati_universiti_MainBanner_960x195.jpg"></img>
        </div>
    <!-----banner closed------->
        

    
        <div class="container">
<span id="error">
			<!----Initializing Session for errors--->
                    <?php
                    if (!empty($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </span>
<form class="form-horizontal" name="form" enctype="multipart/form-data" id="registration" method='post' action="page2.php" autocomplete="on">
<fieldset>
<legend>Swayam Partner University / Institute Registration Form</legend>
<div class="control-group">
<label class="control-label">University Name/Title :</label>
<div class="controls">
<input type="text" id="name" name="name1" onkeyup="alphabet()" placeholder="Enter Institute Name" required >
</div>
</div>
<div class="control-group">
<label class="control-label">Introduction Text:</label>
<div class="controls">
<textarea class="form-control" rows="3" name="intro" required ></textarea>
</div>
</div>



<legend>Designated Coordinator for MOOCs Programme</legend>
<div class="control-group">
<label class="control-label">Coordinator Name:</label>
<div class="controls">
<input type="text" id="name2" name="name2" onkeyup="alphabet1()" placeholder="Enter Name" required >
</div>
</div>
<div class="control-group">
<label class="control-label">Coordinator Designation:</label>
<div class="controls">
<input type="text" id="co_des" name="name3" onkeyup="alphabet3()" placeholder="Enter Designation" required >
</div>
</div>
<div class="control-group">
<label class="control-label">Coordinator E-mail:</label>
<div class="controls">
<input type="email" class="form-control" name="name4" id="exampleInputEmail1"  onclick = "ValidateEmail()" placeholder="Enter email" required >
</div>
</div>
<div class="control-group">
<label class="control-label">Coordinator Phone No.(Landline):</label>
<div class="controls">
<input type="text" class="form-control" id="exampleInputEmail1" name="txtPhone" onkeyup ="Validate()" maxlength="11" placeholder="Enter Phone No.(Landline)" required >
</div>
</div>

<div class="control-group">
<label class="control-label">Coordinator Phone No.(Mobile):</label>
<div class="controls">
<input type="text" class="form-control" id="exampleInputEmail1" name="txtMobile" onkeyup ="Validate()" maxlength="11" placeholder="Enter Phone No.(Mobile)" required >
</div>
</div>

<div class="control-group">
<label class="control-label"></label>
<div class="controls">
<button type="reset" value="Send File" class="btn btn-success" >Reset</button>
<button type="submit" value="Send File" class="btn btn-success" >Next</button>

</div>
</div>

</fieldset>
</form>

</div>
</div>
</body>
</html>
