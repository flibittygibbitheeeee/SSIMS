<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="req-form-style.css">
		<link 
			rel="stylesheet"
			href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
			integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
			crossorigin="anonymous"
		/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
		<title>Form</title>
	</head>
	
	<body>

		
		<!--header area start-->
		<header>
			<label for="check" style="display: none;">
				<i class="fas fa-bars" id="sidebar_btn"></i>
			</label>
			
		</header>
		
		<div style="margin-left: 33%; background-color: #F4EBE9; width: 33%;">
		
			
				
			
			
				<form id="forms" method="POST">
					<h1><p>Assessment Questions</p>
					    <p>BLA BLA BLA ETC ETC</p>
					</h1>
					
					<span><h4>(1)Rarely</h4></span>
					<span><h4>(2)Sometimes</h4></span>
					<span><h4>(3)Most of the time</h4></span>
					<span><h4>(4)Always</h4></span>
		
	
					
					<h2>Physical Health</h2>
						<p>1.) 
							
						</p>
							<input type="hidden" name="c" value="<?php echo $id ?>" required> 
							<input type="radio" id="1" name="choice1" value="1" required>
							<label for="1">1</label>
							<input type="radio" id="2" name="choice1" value="2" required>
							<label for="2">2</label>
							<input type="radio" id="3" name="choice1" value="3" required>
							<label for="3">3</label>
							<input type="radio" id="4" name="choice1" value="4" required>
							<label for="4">4</label>
						<br>
						<p>2.) 
							<?php
						
				//			$wen = $mysqli->query("SELECT question_physical FROM question_physical_table WHERE question_physical_id = 2") or die($mysqli->error);
							
				//			while($row = $wen->fetch_assoc()) 
				//				{
				//					echo $row['question_physical'];
				//				}
							?>
						</p>
							<input type="radio" id="1" name="choice2" value="1" required>
							<label for="1">1</label>
							<input type="radio" id="2" name="choice2" value="2" required>
							<label for="2">2</label>
							<input type="radio" id="3" name="choice2" value="3" required>
							<label for="3">3</label>
							<input type="radio" id="4" name="choice2" value="4" required>
							<label for="4">4</label>
						<br>
						<p>3.) 
							<?php
						
					//		$wen = $mysqli->query("SELECT question_physical FROM question_physical_table WHERE question_physical_id = 3") or die($mysqli->error);
							
					//		while($row = $wen->fetch_assoc()) 
					//			{
					//				echo $row['question_physical'];
					//			}
							?>
						</p> 
							<input type="radio" id="1" name="choice3" value="1" required>
							<label for="1">1</label>
							<input type="radio" id="2" name="choice3" value="2" required>
							<label for="2">2</label>
							<input type="radio" id="3" name="choice3" value="3" required>
							<label for="3">3</label>
							<input type="radio" id="4" name="choice3" value="4" required>
							<label for="4">4</label>
					
			
		</div>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.nav_btn').click(function(){
					$('.mobile_nav_items').toggleClass('active');
				});
			});
		</script>

	</body>
</html>