<!DOCTYPE HTML>
<html>
    <head>
        <title>Swayam</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="container">
            <div class="main">
                <h2>Swayam Registration</h2><hr/>

                <?php
                session_start();
                if (isset($_POST['BCD1'])) {
                    if (!empty($_SESSION['post'])){

                         if (empty($_POST['course_fa'])
						|| empty($_POST['course_title1'])
						|| empty($_POST['CFB'])
						|| empty($_POST['faq'])
						
						|| empty($_POST['co_name'])
						|| empty($_POST['BCD1'])){
                            
							//Setting error for page 3
							$_SESSION['error_page3'] = "Mandatory field(s) are missing, Please fill it again";
                            header("location: page3.php"); //redirecting to third page
                        } else {
                            foreach ($_POST as $key => $value) {
                                $_SESSION['post'][$key] = $value;
                            }
							//function to extract array
                            extract($_SESSION['post']);  
							
							//Storing values in database
                           /* $connection = mysql_connect("localhost", "root", "root");
                            $db = mysql_select_db("detail", $connection);
                            $query = mysql_query("insert into table1 (name1,intro,name2,name3,name4,txtPhone,txtMobile,course_id,course_uni,course_title,birthday,birthday1,co_des,PE,BCD,course_fa,course_title1,CFB
,faq,co_name,BCD1) values('$name1','$intro','$name2','$name3','$name4','$txtPhone','$txtMobile','$course_id','$course_uni','$course_title',
'$birthday','$birthday1','$co_des','$PE','$BCD','$course_fa','$course_title1','$CFB','$faq','$co_name','$BCD1')", $connection);*/
                           
	if(empty($errorMessage)) 
	{
		$fs = fopen("mydata.csv","a");
		fwrite($fs,$name1 . ", " . $intro . ", " . $name2 . ", " . $name3 . ", " . $name4 . ", " . $txtPhone . ", " . $txtMobile . ", " . $course_id . ", " . $course_uni . ", " . $course_title . ", " . $birthday . ", " . $birthday1 . ", " . $co_des . ", " . $PE . ", " . $BCD . ", " . $course_fa . ", " . $course_title1 . ", " . $CFB . ", " . $faq . ", " . $co_name . ", " . $BCD1 . "\n");
		fclose($fs);
		
		//header("Location: thankyou.html");
		//exit;
	}

				       if ($query) {
                                
										
					
					// you should clean this..
					$uploadpath =  "./University/" . $name1.'/' . $course_id.'/' ;

					mkdir ($uploadpath, 0777, true);
					$uploadfile = $uploadpath . basename($_FILES['userfile']['name']);
					
					$filetmpname=$_FILES["userfile"]["tmp_name"];
					$dimension=getimagesize($filetmpname);
					//echo "width: ".$dimension[0]."<br />";
					//echo "Height: ".$dimension[1]."<br />";
					$h=101;

					$w=200;
					 
					$uploadfile1 = $uploadpath . basename($_FILES['userfile1']['name']);
					$filetmpname1=$_FILES["userfile1"]["tmp_name"];
					$dimension1=getimagesize($filetmpname1);
					//echo "width1: ".$dimension1[0]."<br />";
					//echo "Height1: ".$dimension1[1]."<br />";
					$hight=195;

					$width=960;
					$uploadfile2 = $uploadpath . basename($_FILES['userfile2']['name']);
					$filetmpname2=$_FILES["userfile2"]["tmp_name"];
					$dimension2=getimagesize($filetmpname2);
					//echo "width2: ".$dimension2[0]."<br />";
					//echo "Height2: ".$dimension2[1]."<br />";
					$hight2=110;

					$width2=110;

					$uploadfile4= $uploadpath . basename($_FILES['userfile4']['name']);
					$filetmpname4=$_FILES["userfile4"]["tmp_name"];
					$dimension4=getimagesize($filetmpname4);
					//echo "width2: ".$dimension2[0]."<br />";
					//echo "Height2: ".$dimension2[1]."<br />";
					$hight4=48;

					$width4=185;

					$uploadfile5= $uploadpath . basename($_FILES['userfile5']['name']);
					$filetmpname5=$_FILES["userfile5"]["tmp_name"];
					$dimension5=getimagesize($filetmpname5);
					//echo "width2: ".$dimension2[0]."<br />";
					//echo "Height2: ".$dimension2[1]."<br />";
					$hight5=37;

					$width5=175;

					$uploadfile6= $uploadpath . basename($_FILES['userfile6']['name']);
					$filetmpname6=$_FILES["userfile6"]["tmp_name"];
					$dimension6=getimagesize($filetmpname6);
					//echo "width2: ".$dimension2[0]."<br />";
					//echo "Height2: ".$dimension2[1]."<br />";
					$hight6=200;

					$width6=378;

					$uploadfile7= $uploadpath . basename($_FILES['userfile7']['name']);
					$filetmpname7=$_FILES["userfile7"]["tmp_name"];
					$dimension7=getimagesize($filetmpname7);
					//echo "width2: ".$dimension2[0]."<br />";
					//echo "Height2: ".$dimension2[1]."<br />";
					$hight7=136;

					$width7=262;

					$uploadfile8= $uploadpath . basename($_FILES['userfile8']['name']);
					$filetmpname8=$_FILES["userfile8"]["tmp_name"];
					$dimension8=getimagesize($filetmpname8);
					//echo "width2: ".$dimension2[0]."<br />";
					//echo "Height2: ".$dimension2[1]."<br />";
					$hight8=211;

					$width8=320;
					
					$uploadfile3 = $uploadpath . basename($_FILES['userfile3']['name']);
					
					
					if($h==$dimension[1] && $w==$dimension[0])
					{
					   if($_FILES['userfile']['type'] == 'image/jpeg')
					    {
						if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
					  	echo "Data inserted successfully\n";
						
						} else {
					  	 echo "Upload failed"; 
						}
					   } else {
					  	 echo "please upload JPEG file"; 
						}
					} else {
   						echo "Please insert image with 200 x 101 dimension";
						}

					
					if($hight==$dimension1[1] && $width==$dimension1[0])
					{
					   if($_FILES['userfile1']['type'] == 'image/jpeg')
					    {
						if (move_uploaded_file($_FILES['userfile1']['tmp_name'], $uploadfile1)) {
					 	 echo "Data inserted successfully\n";
					} else {
					   echo "Upload failed";
					} 
					} else {
					  	 echo "please upload JPEG file"; 
						}
					} else {
   						echo "Please insert image with 960*195 dimension";
						}

					if($hight2==$dimension2[1] && $width2==$dimension2[0])
					{

					if($_FILES['userfile2']['type'] == 'image/jpeg')
					{
					if (move_uploaded_file($_FILES['userfile2']['tmp_name'], $uploadfile2)) {
					  echo "Data inserted successfully\n";
					} else {
					   echo "Upload failed";
					}
					} else {
					  	 echo "please upload JPEG file"; 
						}
					} else {
   						echo "Please insert image with 110*110 dimension";
						}

					if($hight4==$dimension4[1] && $width4==$dimension4[0])
					{
					if($_FILES['userfile4']['type'] == 'image/png')
					{
					if (move_uploaded_file($_FILES['userfile4']['tmp_name'], $uploadfile4)) {
					  echo "Data inserted successfully4\n";
					} else {
					   echo "Upload failed4";
					}
					} else {
					  	 echo "please upload PNG file"; 
						}
					} else {
   						echo "Please insert image with 185 x 48 dimension";
						}

					if($hight5==$dimension5[1] && $width5==$dimension5[0])
					{
					if($_FILES['userfile5']['type'] == 'image/jpeg')
					{
					if (move_uploaded_file($_FILES['userfile5']['tmp_name'], $uploadfile5)) {
					  echo "Data inserted successfully5\n";
					} else {
					   echo "Upload failed5";
					}
					} else {
					  	 echo "please upload JPEG file"; 
						}
					} else {
   						echo "Please insert image with 175 x 37 dimension";
						}

					if($hight6==$dimension6[1] && $width6==$dimension6[0])
					{
						if($_FILES['userfile6']['type'] == 'image/jpeg')
						{
							if (move_uploaded_file($_FILES['userfile6']['tmp_name'], $uploadfile6)) {
					  			echo "Data inserted successfully6\n";
							} else {
					   			echo "Upload failed6";
							}
						} else {
					  	 	echo "please upload JPEG file"; 
							}
					} else {
   						echo "Please insert image with 378 x 200 dimension";
						}

					if($hight7==$dimension7[1] && $width7==$dimension7[0])
					{
					if($_FILES['userfile7']['type'] == 'image/jpeg')
					{
					if (move_uploaded_file($_FILES['userfile7']['tmp_name'], $uploadfile7)) {
					  echo "Data inserted successfully7\n";
					} else {
					   echo "Upload failed7";
					}
					}else {
					  	 echo "please upload JPEG file"; 
						}
					} else {
   						echo "Please insert image with 262 x 136 dimension";
						}

					if($hight8==$dimension8[1] && $width8==$dimension8[0])
					{
					if($_FILES['userfile8']['type'] == 'image/jpeg')
					{
					if (move_uploaded_file($_FILES['userfile8']['tmp_name'], $uploadfile8)) {
					  echo "Data inserted successfully8\n";
					} else {
					   echo "Upload failed8";
					}
					}else {
					  	 echo "please upload JPEG file"; 
						}
					} else {
   						echo "Please insert image with 320 x 211 dimension";
						}
					
					// start uploading course video
					if(($_FILES['userfile3']['type'] == 'video/mp4') || ($_FILES['userfile3']['type'] == 'video/avi'))
					{
					if (move_uploaded_file($_FILES['userfile3']['tmp_name'], $uploadfile3)) {
					  echo "Data inserted successfully\n";
						//header("location: page1.php");
					} else {
					   echo "Upload failed";
						//header("location: page3.php");
					}
					}else {
					  	 echo "please upload MP4/AVI file"; 
						}
                            } else {
                                echo '<p><span>Form Submission Failed..!!</span></p>';
                            }

			//destroying session
                            unset($_SESSION['post']);
                        }
                    } else {
                        header("location: page1.php"); //redirecting to first page
                    }
                } else {
                    header("location: page1.php"); //redirecting to first page
                }
                ?>
            </div>

        </div>
    </body>
</html>
