<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<nav>
		<label class="logo">Pokie - IT School</label>

		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Admission</a></li>
			<li><a href="login.php" class="btn btn-success">Login</a></li>
		</ul>
	</nav>


	<div class="section1">
		
		<label class="img_text">We Teach Students With Care</label>
		<img class="main_img" src="class.jpg">
	</div>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="welcome_img" src="playground.jpg">
				
			</div>

			<div class="col-md-8">

				<h1>Welcome to pokie- IT School</h1>

				<p>Pokie IT School is committed to developing skilled professionals through modern and practical IT education. Our goal is to prepare students for today’s digital world by providing career-focused and industry-relevant training.

Since its establishment, Pokie IT School has been offering hands-on courses in Web Development, Graphic Design, and Digital Marketing, where students learn through real-world projects and practical experience.</p>

<p> mission is to create a modern, technology-driven, and supportive learning environment—
where skill development, creative thinking, and practical knowledge are given top priority.</p>

At Pokie IT School, students do not only gain theoretical knowledge, but also build real working experience, freelancing readiness, and the confidence needed for a successful future career.</p>
				
			</div>
			

		</div>
		

	</div>


	<center>
		<h1>Our Teachers</h1>
	</center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="teacher1.png">

				<p>Jhankar Mahbub</p>
                <p>Web Developer Expert in modern web technologies with strong skills in full-stack development and practical project-based teaching.</p>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="teacher2.png">
				<p>Mr. Ryan Ahmed</p>
                <p>Specialist in creative design, branding, and visual communication using modern design tools.</p>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="teacher3.png">
				<p>Mr. Daniel Hasan</p>
                <p>Professional digital marketer with expertise in SEO, social media marketing, and online advertising.</p>
				
			</div>
			

		</div>
		

	</div>






	<center>
		<h1>Our Courses</h1>
	</center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="web_development.png">
				<h3>Web Development</h3>
				
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="graphic_design.png">
				<h3>Graphics Design</h3>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="digital_marketing.png">
				<h3>Marketing</h3>
				
			</div>
			

		</div>
		

	</div>


<center>
    <h1 class="adm">Admission Form</h1>
</center>

<div align="center" class="admission_form">
    <form action="data_check.php" method="post">
        
        <div class="adm_int">
            <label class="label_text">Name</label>
            <input class="input_deg" type="text" name="name">
        </div>

        <div class="adm_int">
            <label class="label_text">Email</label>
            <input class="input_deg" type="text" name="email">
        </div>

        <div class="adm_int">
            <label class="label_text">Phone</label>
            <input class="input_deg" type="text" name="phone">
        </div>

        <div class="adm_int">
            <label class="label_text">Message</label>
            <textarea class="input_txt" name="message"></textarea>
        </div>

        <div class="adm_int">
            <input class="btn btn-primary" id="submit" type="submit" name="apply" value="apply">
        </div>

    </form>
</div>
    </form>
</div>


	<footer>
		<h3 class="footer_text">Made by Abdulla Al Zobayer</h3>
	</footer>


</body>
</html>