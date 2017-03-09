

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Robert Paton: Homepage</title>

    <!-- Bootstrap -->

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" type="img/png" href="../img/favicon.ico">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <section class="container-fluid" id="text">

      <div class="col-lg-1">
        <img src="../img/logo.png" alt="Robert Paton Logo" id="logo" class="img-responsive">
      </div>
      <div class="col-lg-8 col-lg-offset-1">
        <p id="intro">Hello!<br><br>I'm Robert Paton. I'm a front end web developer based in London, Ontario. I have a strong passion for web development and enjoy every moment of it. I can work alone or in a team. Workin in a team is always a learning experience, it doesn't matter if they're new people or I've worked with them before I always learn something new. I'm a strong problem solver, whenever there's a problem I'll weigh my options and exhaust every possibility in getting it fixed.
        </p>
      </div>
    </section>

    <section class="container-fluid" id="web">
      <div>
        <p id="work">My Work</p>
      </div>
      <div class="col-md-3">
        <a href="http://audiophile.robertpaton.com/" target="blank">
          <img src="../img/audiophile.png" alt="Audiophile" class="img-responsive web_hover">
        </a>
      </div>
      <div class="col-md-3">
        <a href="http://christinatischler.robertpaton.com/" target="blank">
          <img src="../img/christinatischler.png" alt="Christina Tischler" class="img-responsive web_hover">
        </a>
      </div>
      <div class="col-md-3">
        <a href="http://projectx.robertpaton.com/" target="blank">
          <img src="../img/projectx.png" alt="Project X" class="img-responsive web_hover">
        </a>
      </div>
      <div class="col-md-3">
        <a href="http://mcore.robertpaton.com/" target="blank">
          <img src="../img/mcore.png" alt="Mcore" class="img-responsive web_hover">
        </a>
      </div>
      <div class="col-md-3">
        <a href="http://stevesdesign.robertpaton.com/" target="blank">
          <img src="../img/steves.png" alt="Steve's Designs" class="img-responsive web_hover">
        </a>
      </div>
      <div class="col-md-3">
        <a href="http://bttf.robertpaton.com/" target="blank">
          <img src="../img/bttf.png" alt="Back to the Future" class="img-responsive web_hover">
        </a>
      </div>
    </section>

    <section class="container">
      <div>
        <h1 id="contact">Contact Me</h1>
      </div>
        <div class="col-xs-12">
          <form method="post" role="form" action="includes/email.php">

            <div class="form-group">
              <label for="InputName">Name</label>
              <input name="name" type="text" class="form-control" id="inputName" placeholder="Enter Name">
            </div>

            <div class="form-group">
              <label for="InputEmail">Email</label>
              <input name="email" type="text" class="form-control" id="inputEmail" placeholder="Enter Email">
            </div>

            <div class="form-group">
              <label for="InputText">Message</label>
              <textarea name="message" type="text" class="form-control" id="inputText" placeholder="Enter Enter Message"></textarea>
            </div>
            <button name="submit" type="submit" class="btn btn-default" id="button">Send</button>
          </form>
        </div>

<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'robert.a.paton@gmail.com';
  $subject = 'Hello';
  $header = "From .". $name . " <" . $email . ">\r\n";

  mail ($to, $subject, $message, $header);
  echo "<h1 id='sent'>Your Message has been Sent.</h1>";
?>
        
        <h1 id="find">Find me on Social Media</h1>

        <div class="col-md-1 socialMedia">
          <a href="https://twitter.com/Robert_a_Paton" target="_blank"><img src="../img/twitter.svg" alt="Twitter" id="twitter" class="img-responsive"></a>
        </div>
        <div class="col-md-1 socialMedia">
          <a href="http://robert-paton.tumblr.com/" target="_blank"><img src="../img/tumblr.svg" alt="Tumblr" id="tumblr" class="img-responsive"></a>
        </div>
        <div class="col-md-1 socialMedia">
          <a href="https://www.google.com/+RobertPaton" target="_blank"><img src="../img/g+.svg" alt="Google Plus" id="g+" class="img-responsive"></a>
        </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>