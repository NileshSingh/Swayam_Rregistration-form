<?php
session_start();
//checking first page values for empty,If it finds any blank field then redirected to first page
if (isset($_POST['name1'])){
    if (empty($_POST['name1'])
	|| empty($_POST['intro'])
	|| empty($_POST['name2'])
	|| empty($_POST['name3'])
	|| empty($_POST['name4'])
	
	|| empty($_POST['txtPhone'])
	|| empty($_POST['txtMobile'])){
        
		//setting error message
		$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
        header("location: page1.php"); //redirecting to first page
    
	} else {
	//Sanitizing email field to remove unwanted characters
        $_POST['email'] = filter_var($_POST['name4'], FILTER_SANITIZE_EMAIL);
	
	//After sanitization Validation is performed
        if (filter_var($_POST['name4'], FILTER_VALIDATE_EMAIL)){
		
	//Validating Contact Field	using regex
            if (!preg_match("/^[0-9]{10}$/", $_POST['txtMobile'])){
			
                $_SESSION['error'] = "10 digit contact number is required.";
                header("location: page1.php");
            } else {
                if (($_POST['txtPhone']) === ($_POST['txtPhone'])) {
                    foreach ($_POST as $key => $value) {
                        $_SESSION['post'][$key] = $value;
                    }
                } else {
                    $_SESSION['error'] = "Password does not match with Confirm Password.";
                    header("location: page1.php"); //redirecting to first page
                }
            }
        } else {
            $_SESSION['error'] = "Invalid Email Address";
            header("location: page1.php");//redirecting to first page
        }
    }
} else {
    if (empty($_SESSION['error_page2'])) {
        header("location: page1.php");//redirecting to first page
    }
}
?>


<!doctype html>
<html>
<head>

<script type="text/javascript">

function alphabet(){
if (!form.name1.value.match(/^[a-zA-Z]+$/) && form.name1.value !="")
{
form.name1.value="";
form.name1.focus();
alert("please enter character/alphabets");
}
}
</script><!-- Script by hscripts.com -->


<script type="text/javascript">
    var datefield=document.createElement("input")
    datefield.setAttribute("type", "date")
    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
    }
</script>
 <script>
$(document).ready(function() {
    var text_max = 146;
    $('#textarea_feedback').html(text_max + ' characters remaining');

    $('#textarea').keyup(function() {
        var text_length = $('#textarea').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
});
</script>
<script>
if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
    jQuery(function($){ //on document.ready
        $('#birthday').datepicker();
    })
}
</script>
<script>
if (datefield.type!="date1"){ //if browser doesn't support input type="date", initialize date picker widget:
    jQuery(function($){ //on document.ready
        $('#birthday1').datepicker();
    })
}
</script>


<meta charset="utf-8">
<title>New Course Registration</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,800,700italic,700,600italic,600,400italic,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://ssl.gstatic.com/docs/script/css/add-ons.css">
<link rel="stylesheet" href="CSS/university_des.css" type="text/css" media="all">
<link href="CSS/bootstrap.css" rel="stylesheet">
<link href="CSS/bootstrap-responsive.css" rel="stylesheet">

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
<form class="form-horizontal" name="form" id="registration" method='post' action='page3.php'>
<fieldset>
<legend>New Course Registration Form</legend>
<div class="control-group">
<label class="control-label">Course ID:</label>
<div class="controls">
<input type="text" id="name"  name="course_id" placeholder="Enter Institute Name" required>
</div>
</div>
<div class="control-group">
<label class="control-label">Course University/Institute Name:</label>
<div class="controls">

<input type="text" id="name"  name="course_uni" onkeyup="alphabet()" placeholder="Enter Course University/Institute Name" required>
    
</div>
</div>

<div class="control-group">
<label class="control-label">Course Title :</label>
<div class="controls">
<input type="text" id="name" name="course_title" placeholder="Enter Course Title up to 60 character" required maxlength="60"><br>
Max character 60
</div>
</div>
<div class="control-group">
<label class="control-label">Class Start date :</label>
<div class="controls">
	
    <input type="date" id="birthday" name="birthday" size="40" placeholder="mm/dd/yy" required >

</div>
</div>


<div class="control-group">
<label class="control-label">Class End date:</label>
<div class="controls">
<input type="date1" id="birthday1" name="birthday1" size="40" placeholder="mm/dd/yy" required >

</div>
</div>
<div class="control-group">
<label class="control-label">Estimated Time Commitment (per week) :</label>
<div class="controls">
<input type="text" id="co_des" name="co_des" placeholder="Enter Estimated Time Commitment (per week)" required >
</div>
</div>
<div class="control-group">
<label class="control-label">Prerequisite and Experience :</label>
<div class="controls">
<textarea class="form-control" rows="3" name="PE" placeholder="Mention Prerequisite and Experience" required></textarea>
</div>
</div>
<div class="control-group">
<label class="control-label">Brief Course Description:</label>
<div class="controls">
<textarea id="textarea" class="form-control" name="BCD"  rows="3" placeholder="Enetr Brief Course Description" required maxlength="146">
</textarea>
<div id="textarea_feedback"></div>


</div>
</div>


<div class="control-group">
<label class="control-label"></label>
<div class="controls">
<button type="reset" value="Send File" class="btn btn-success" >Reset</button>
<button type="submit" class="btn btn-success" >Next</button>

</div>
</div>

</fieldset>
</form>
</div>
</div>
</body>
</html>
