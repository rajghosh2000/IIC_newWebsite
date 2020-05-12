<?php
			$username = trim($_POST['uname']);
			$password = trim($_POST['pwd']);
			
			if((!$username == "raj")&&(!$password == "123"))
			{
				echo("wrong");
			}
			else
			{
				echo '<script type="text/javascript">';
				echo ' alert("Logged In")';  
				echo '</script>';

				header('Location: insert.php');
				exit;

			}
			session_start();
			
?>





