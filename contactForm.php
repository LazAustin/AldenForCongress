		<?php
			
			$error = "";
			
			$successMessage = "";
			
			if ($_POST) {
			
				if (!$_POST["email"]) {
				
					$error .= 'An email address is required.<br>';
					
				}
				
				if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
				
					$error .= "The email address is invalid.<br>";
					
				}
				
				
				if (!$_POST["subject"]) {
				
					$error .= "The subject field is required.<br>";
				
				}
				
				if (!$_POST["content"]) {
				
					$error .= "The content field is required.<br>";
					
				}
				
				if ($error != ""){
				
					$error .= '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
				
				}
			
			} else {

				$emailTo = "lazaustin94@gmail.com";
				
				$subject = $_POST["subject"]."AldenForCongress";
				
				$content = $_POST["content"];
				
				$headers = "From:".$_POST["email"]."on AldenForCongress.com";
				
				if (mail($emailTo, $subject, $content, $headers)) {
					
					$successMessage = '<div class="alert alert-success" role="alert"><strong>Your message was sent!</strong>We will get back to you soon.</div>';
					
				} else {
					
					$error = '<div class="alert alert-success" role="alert"><strong>There were error(s) in your form:</strong> Your message could not be sent. Please try again. </div>'
					
				}
			
			}
		
		?>