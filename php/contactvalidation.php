
<!--php code-->
<?php
      	 if (isset($_POST['submit'])) {
		          function user_prompt($print_message){
					  echo "<span style='color:red;' 'font:30px'>.$print_message.</span>";
					}	
							$ok = true;
							//validating name
							if (!isset($_POST['name']) || $_POST['name'] === '') {
								$ok = false;
								user_prompt("Enter the name");						
							} else {
								$name = $_POST['name'];
							}
							//validating email
							if (!isset($_POST['email']) || $_POST['email'] === '') {
								$ok = false;
								if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]??\w+)*(\.\w{2,3})+$/', $_POST["email"])) {
								user_prompt ("<span style='color:red;' 'font:30px'>Enter the email address in correct format</span>");
							    }	
							} else {

								$email = $_POST['email'];
							}
							//validating phone
							if (!isset($_POST['phone']) || $_POST['phone'] === '') {
								$ok = false;
								user_prompt("Enter the phonenumber");
							} else {
								$phone = $_POST['phone'];
							}
							//validating crop
							if (!isset($_POST['crop']) || $_POST['crop'] === '') {
								$ok = false;
								user_prompt("Enter the crop name");
							} else {
								$crop = $_POST['crop'];
							}

							//validating variety
							if (!isset($_POST['variety']) || $_POST['variety'] === '') {
								$ok = false;
								user_prompt("Enter the variety of crop");
							} else {
								$variety = $_POST['variety'];
							}

							//validating date
							if (!isset($_POST['date']) || $_POST['date'] === '') {
								$ok = false;
								user_prompt ("Enter the date");	
							} else {
								$sdate = $_POST['date'];
							}
							//validating quantity
							if (!isset($_POST['quantity']) || $_POST['quantity'] === '') {
								$ok = false;
								user_prompt("Enter the quantity");
							} else {
								$quantity = $_POST['quantity'];
							}

							$message= $_POST['Message'];

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
				    $sql="INSERT into CONTACT(name,email,phonenumber,message, crop, sdate, quantity, variety) values
				    ('$name', '$email', '$phone', '$message', '$crop', '$sdate', '$quantity','$variety')";

			        if($connection){
			        	echo "Connection established";
			            $query= mysqli_query($connection,$sql);
				}

           }
		 }

          

?>
<!--php Ends-->