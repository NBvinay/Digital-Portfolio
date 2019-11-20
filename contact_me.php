<?php

$timezone = date_default_timezone_set("Asia/Kolkata");
$conn = mysqli_connect("localhost", "root" , "" , "portfolio");
if(mysqli_connect_errno())
{
    echo "Failed to connect" . mysqli_connect_errno();
}

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    mysqli_query($conn,"INSERT INTO `contact_me`(`name`, `email_id`, `subject`, `message`) VALUES ('$name','$email','$subject','$message');");
}

else
{
    // header("Location:index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
<style>
  body{
      padding: 0;
      margin: 0;
  }
  html {
  font-family: 'Roboto Condensed', sans-serif;
  }

  #mainnav {
    position: absolute;
    font-family: 'Roboto Condensed', sans-serif;
    z-index: 1;   
  }

  #mainnav li {
    margin: 55px 0;
    left: -550px;
    position: relative;
    display: none;
      
  }
  #mainnav a {
    color: white;   
    text-decoration: none;
    font-size: 1.4em;

  } 
  ul li{
      list-style: none;
      margin-top: -50px;
      
  }
  .hamb {
    position: absolute;
    top: 20px;
    left: 20px;
    font-size: 2.5em;
    z-index: 1;
  }
  .hamb a {
    color: #fff;
    text-decoration: none;
  }
  html, body, .hero {
    height: 100%;
  }
  .hero {
    width: 100%;
    min-height: 600px;
    background-image:url(testmonial-bg.jpg);
      background-size: cover;
  }
  h1 {
    font-size: 5em;
    text-align: center;
    font-weight: 700;
    font-family: 'Roboto Condensed', sans-serif;
    color: #fff;
    width: 100%;
    position: absolute;
    top: 42%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }
  #bubble {
    width: 100%;
    height: 100%;
    opacity: 0.9;
    position: fixed;
    display: none;
    z-index: 1;
    background: rgba(0, 0, 0, .5);
  }
  .gap{
              
    color: white;
    margin-top: 10px;
    width: 200px;  
  }
          
  h1 span{
      font-size: 90px;
      letter-spacing: 4;
      margin-left: -30px;
      color: orange;
  }
</style>
</head>
<body>
    <nav role='navigation' id="mainnav">
    <br><br><br>
    <ul class="gap" >
        <li><a href="index.html">HOME</a></li>
        <li><a href="about-me.html">About Me!</a></li>
        <li><a href="skills.html">Skills</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="hobbies.html">Hobbies</a></li>
        <li><a href="achievements.html">Achievements</a></li>
        <li><a href="contact_me.php">Contact Me!</a></li>
    
  </ul>
</nav>  

<div class="hamb">
  <a href="#"><i class="fa fa-bars"></i></a>
</div>
            <style type="text/css">
            
            * {
                margin: 0;
                padding: 0;
            }
            body {
                font-family: Raleway, Arial;
            }
            
            .content {
                height: 500px;
                background-color: #f69526;
            }
            
            .about {
                max-width: 600px;
                
                margin: 0 auto;
                padding: 100px 0;
                transform-style: preserve-3d;
                transform: perspective(800px);
            }
            .about h2 {
                text-transform: uppercase;
                font-size: 100px;
                font-weight: 400;
            }
            .about h2, .about p {
                transition: all 0.8s ease;
            }
            .about.hidden h2 {
                opacity: 0;
                transform: translate3d(0, 0, 400px) rotateY(-40deg);
            }
            .about.hidden p {
                opacity: 0;
                transform: translate3d(0, 0, 400px) rotateY(40deg);
            }      
        </style>   
<script>
        
$(function() {
$('a[href*=#]').on('click', function(e) {
e.preventDefault();
$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
});
});
</script>
<link rel="stylesheet" type="text/css" href="scroll_btn.css">

<section id="section06" class="demo">
  
<video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop width=fill height=auto>
  <source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
</video>
  
<h1>CONTACT ME !</h1>
<a href="#text"><span id="text"></span><span ></span><span > </span>Scroll</a>
</section>
<div class="about hidden" >
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">      
  <div class="container-contact100">

		<div class="wrap-contact100">

			<form class="contact100-form validate-form" method="post" action = "contact_me.php">
				<span class="contact100-form-title">
					Tell me Something !
				</span>

				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="name" placeholder="Full Name" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
					<input class="input100" type="text" name="email" placeholder="E-mail" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
					<input class="input100" type="text" name="subject" placeholder="subject" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					<textarea class="input100" name="message" placeholder="Your Message" required></textarea>
					<span class="focus-input100"></span>
				</div>
                <div>
                <center>
                    <style>
                            input[type="submit"] {
                                background-color: #000000; /* Green */
                                border: none;
                                color: white;
                                padding: 16px 32px;
                                text-align: center;
                                text-decoration: none;
                                display: inline-block;
                                font-size: 16px;
                                margin: 4px 2px;
                                -webkit-transition-duration: 0.4s; /* Safari */
                                transition-duration: 0.4s;
                                cursor: pointer;
                                }

                                input[type="submit"] {
                                background-color: white; 
                                color: black; 
                                border: 2px solid #555555;
                                border-radius : 15px;
                                }

                                input[type="submit"]:hover {
                                    background-color: #555555;
                                    color: white;
                                }
                    </style>
                    <input type="submit" name = "submit" class="btn btn-primary" id = "button1" class= "button1">
                </center>
              
                </div>

			</form>
		</div>
  </div>
  
  <div id="dropDownSelect1"></div>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    
    (function() {
        var aboutEl = $('div.about'),
            aboutElOffset = aboutEl.offset().top/100,
            documentEl = $(document);
        
        documentEl.on('scroll', function() {
            if ( documentEl.scrollTop() > aboutElOffset && aboutEl.hasClass('hidden') ) 
                    aboutEl.removeClass('hidden'); 
        });   
    })();  

</script>


<canvas id="bubble">
</canvas>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.js"></script>
<script>
  
var w = window.innerWidth,
    h = window.innerHeight,
    canvas = document.getElementById('bubble'),
    ctx = canvas.getContext('2d'),
    rate = 60,
    arc = 100,
    time,
    count,
    size = 7,
    speed = 20,
    lights = new Array,
    colors = ['#d59254','#ffffff','#1f2839','#cf7693'];

canvas.setAttribute('width',w);
canvas.setAttribute('height',h);

function init() {
  time = 0;
  count = 0;

  for(var i = 0; i < arc; i++) {
    lights[i] = {
      x: Math.ceil(Math.random() * w),
      y: Math.ceil(Math.random() * h),
      toX: Math.random() * 5 + 1,
      toY: Math.random() * 5 + 1,
      c: colors[Math.floor(Math.random()*colors.length)],
      size: Math.random() * size
    }
  }
}

function bubble() {
  ctx.clearRect(0,0,w,h);

  for(var i = 0; i < arc; i++) {
    var li = lights[i];
    
    ctx.beginPath();
    ctx.arc(li.x,li.y,li.size,0,Math.PI*2,false);
    ctx.fillStyle = li.c;
    ctx.fill();
    
    li.x = li.x + li.toX * (time * 0.05);
    li.y = li.y + li.toY * (time * 0.05);
    
    if(li.x > w) { li.x = 0; }
    if(li.y > h) { li.y = 0; }
    if(li.x < 0) { li.x = w; }
    if(li.y < 0) { li.y = h; }
  }
  if(time < speed) {
    time++;
  }
  timerID = setTimeout(bubble,1000/rate);
}
init();
bubble(); 

//navigation (this is my code)
var animation = 'easeOutCubic';
    delay     = 60;

$(document)
  .on('click', '.fa-bars', function(){
    var i = 0;
    $('nav').before($('#bubble'));
    $('#bubble').fadeIn();
    $('#mainnav').find('li').each(function(){
      var that = $(this);
      i++;
      (function(i, that){
          setTimeout(function(){
            that
              .animate(
                { 'left'   : '20px' }, 
                { duration : 350, 
                  easing   : animation })
              .fadeIn({queue: false});
          }, delay * i)
      }(i, that))
    }); 
    $('.fa-bars').fadeOut(100,function(){
      $(this)
        .removeClass('fa-bars')
        .addClass('fa-times')
        .fadeIn(); 
    });
  })
  .on('click', '#bubble, .fa-times', function(){ 
    $('#bubble').fadeOut();
    $('#mainnav').find('li')
      .animate(
        { 'left'   : '-550px' }, 
        { duration : 250 })
      .fadeOut({queue: false});
    
    $('.hamb').fadeOut(100, function(){
      $(this)
        .find($('i'))
        .removeClass('fa-times')
        .addClass('fa-bars')
        .end()
        .fadeIn();
    });
  }) 
    
</script>
</body>
</html>