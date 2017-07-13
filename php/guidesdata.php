
<!--php code-->
<?php
		echo "IN THE PHP";
		      $ok = true;
      	      if (isset($_POST['download'])) {
					$ok = true;
					//validating button1
					if (!isset($_POST['download']) || $_POST['download'] === '') {
						$ok = false;					
					} else {
						$download = $_POST['download'];
					}
				}else if (isset($_POST['download1'])) {
					$ok = true;
					//validating button1
					if (!isset($_POST['download1']) || $_POST['download1'] === '') {
						$ok = false;					
					} else {
						$download = $_POST['download1'];
					}
				}else if (isset($_POST['download2'])) {
					$ok = true;
					//validating button1
					if (!isset($_POST['download2']) || $_POST['download2'] === '') {
						$ok = false;					
					} else {
						$download = $_POST['download2'];
					}
				}else if (isset($_POST['download3'])) {
					$ok = true;
					//validating button1
					if (!isset($_POST['download3']) || $_POST['download3'] === '') {
						$ok = false;					
					} else {
						$download = $_POST['download3'];
					}
				}else if (isset($_POST['download4'])) {
					$ok = true;
					//validating button1
					if (!isset($_POST['download4']) || $_POST['download4'] === '') {
						$ok = false;					
					} else {
						$download = $_POST['download4'];
					}
				}else if (isset($_POST['download5'])) {
					$ok = true;
					//validating button1
					if (!isset($_POST['download5']) || $_POST['download5'] === '') {
						$ok = false;					
					} else {
						$download = $_POST['download5'];
					}
				}
								
			   if($ok){
					/*Database details*/
					 //Valid constant names
				   define("DBHOST","localhost");
				   define("DBUSERNAME","root");
				   define("DBPASS","");
				   define("DBNAME","eteina");

				   //checking the database connection
				    $connection=mysqli_connect(DBHOST,DBUSERNAME,DBPASS,DBNAME);
				    //The sql
				    $sql="INSERT into DOWNLOADERSCONTACT(information) values
				    ('$download')";

			        if($connection){
			        	echo "Connection established";
			            $query= mysqli_query($connection,$sql);
				}
           }
          

?>
<!--php Ends-->