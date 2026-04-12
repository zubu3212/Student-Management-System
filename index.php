<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasyLearn Hub</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- jQuery first, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

    <nav>
        <label class="logo">EasyLearn Hub</label>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#admission">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="section1">
        <label class="img_text">We Teach Students With Care</label>
        <img class="main_img" src="class.jpg" alt="Classroom">
    </div>

   <div class="container about">
    <div class="row">

        <div class="col-md-4">
            <img class="welcome_img img-responsive" src="playground.jpg">
        </div>

        <div class="col-md-8">
            <h1>Welcome to EasyLearn Hub</h1>

            <p>
                EasyLearn Hub is committed to developing skilled professionals through modern and practical IT education.
            </p>

            <p>
                We provide Web Development, Graphic Design, and Digital Marketing courses.
            </p>

            <p>
                Students learn through real-world projects and gain freelancing skills.
            </p>

            <p>
                Our mission is to build a modern, technology-driven learning environment.
            </p>
        </div>

    </div>
</div>

    <center>
        <h1>Our Teachers</h1>
    </center>

    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <img class="teacher" src="teacher1.png" alt="Jhankar Mahbub">
                <p>Jhankar Mahbub</p>
                <p>Web Developer expert in modern web technologies with strong skills in full-stack development and practical project-based teaching.</p>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="teacher2.png" alt="Ryan Ahmed">
                <p>Mr. Ryan Ahmed</p>
                <p>Specialist in creative design, branding, and visual communication using modern design tools.</p>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="teacher3.png" alt="Daniel Hasan">
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
                <img class="teacher" src="web_development.png" alt="Web Development Course">
                <h3>Web Development</h3>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="graphic_design.png" alt="Graphic Design Course">
                <h3>Graphics Design</h3>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="digital_marketing.png" alt="Digital Marketing Course">
                <h3>Marketing</h3>
            </div>

        </div>
    </div>

<!-- Admission -->
<center>
    <h1 class="adm" id="admission">Admission Form</h1>
</center>

<div align="center">
    <form action="data_check.php" method="post">

        <div class="adm_int">
            <label class="label_text">Name</label>
            <input class="input_deg" type="text" name="name">
        </div>

        <div class="adm_int">
            <label class="label_text">Email</label>
            <input class="input_deg" type="email" name="email">
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
            <input name="apply" class="btn btn-primary" type="submit" value="Apply Now">
        </div>

    </form>
</div>

<!-- Contact Section -->
<center>
    <h1 id="contact">Contact Us</h1>
</center>

<div class="container">
    <div class="row" align="center">

        <h3>Abdulla Al Zobayer</h3>
        <p><b>Phone:</b> 01791136810</p>
        <p><b>Email:</b> zobayer3212@gmail.com</p>

    </div>
</div>

<footer>
    <h3 class="footer_text">Made by Abdulla Al Zobayer</h3>
</footer>

</body>
</html>