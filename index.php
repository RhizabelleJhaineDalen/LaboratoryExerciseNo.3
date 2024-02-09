<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Shadows+Into+Light&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
  <link rel="stylesheet" href="styles.css"/>
  <title>FORM</title>
</head>
<body>
  <header class="header-fix" >
    <div class="header-container">
        <h1><a href="http://localhost/exerciseno.3/"><i class="fas fa-table"></i> Forms</a></h1>
    </div>
  </header>

  <div class="container">
    <section>
      <aside>
        <h2><i class="fas fa-question"></i>INFO</h2>

        <ul>
          <li>method: POST</li>
          <li>Mandatory fields</li>
          <li>Standard field: text and password</li>
          <li>Checkbox: checkbox</li>
          <li>Standard button: submit</li>
        </ul>
      </aside>

      <article>
        <h2>Login Form</h2>
        <p class="marginbot50">Standard form to enter these <strong>login credentials:</strong></p>

        <form action="/index.php" class="form-element" method="post">
          <div>    
            <label for="username">Enter your username: </label>
            <input type="text" name="username" id="username"><br><br>

            <label for="password">Enter your password: </label>
            <input type="password" name="password" id="password"><br><br>

            <div class="check">
              <input type="checkbox" name="rememberMe" id="rememberMe">
              <label for="rememberMe">Remember me</label><br><br>
            </div>

            <div class="align-right">
              <label for="remember_me"></label>
              <input type="submit" name="form" value="Login">
            </div>
          </div>
        </form>
        </article>

        <?php 
        if(!empty($_POST) && $_POST ['form']==="Login") { ?>
          <div class="result">
            <b>Values returned by the form:</b><br>
            <ul>
              <?php foreach($_POST as $key => $value) { echo '<li>'.$key.' =>'.$value.'</li>';
              } ?>
            </ul>
          </div>
          <?php 
        } ?>
    </section>
 
  <hr>
  <section>
    <aside>
      <h2><i class="fas fa-question"></i>INFO</h2>
      <ul>
          <li>method: POST</li>
          <li>Mandatory fields</li>
          <li>File sending</li>
          <li>Standard field:text,email,date,file and password</li>
          <li>Checkbox:checkbox</li>
          <li>Radio button: submit</li>
          <li>Standard button: submit</li>
        </ul>
    </aside>

    <article>
          <h2> Registration Form</h2>
          <p class="marginbot50">Standard form for<strong> online registration</strong> on a website:</p>
          
          <form action="/index.php" class="form-element" method="post">
          <div>    
            <label for="gender">Enter your <strong>Gender</strong>: </label>
            <input type="checkbox" id="subject1" id="Male" value="Male"/>
            <label for="male">Male</label>
            <input type="checkbox" id="subject2" id="male" value="male"/>
            <label for="male">Female</label><br><br>

            <label for="lastname">Enter your <strong>Lastname</strong>: </label>
            <input type="lastname" name="lastname" id="lastname"><br><br>

            <label for="firstname">Enter your <strong>Firstname</strong>: </label>
            <input type="firstname" name="firstname" id="firstname"><br><br>

            <label for="date">Enter your <strong>Date of Birth</strong>: </label>
            <input type="date" id="birthday" name="birthday"><br><br>

            <label for="file">Enter your <strong>Photo</strong>: </label>
            <input type="file" id="id14471" name="my files"><br><br>

            <label for="email">Enter your <strong>Email address</strong>: </label>
            <input type="email" name="email" id="email"><br><br>

            <label for="password">Enter your <strong>Password</strong>:</label>
            <input type="password" name="password" id="password"><br><br>

            <label for="password"><strong>Confirm</strong> your Password:</label>
            <input type="password" name="password" id="password"><br><br>

            <div class="check">
              <input type="checkbox" name="accept" id="accept">
              <label for="accept">Accept TOS</label><br><br>
            </div>

            <div class="right">
              <input type="submit" name="reg" value="Registration" >
            </div>
          </div>
        </form>
        </article>
        <div class="result">

        <?php if(!empty($_POST) && $_POST['form'] === "Registration") { ?>
                    <div class="result">
                    <b>Values returned by the form:</b><br>
                    <ul>
                        <?php foreach($_POST as $key => $value) { echo '<li>' .$key.' =>'.$value.'</li>';} ?>
                    </ul>

                    <br>

                    <b>Image preview:</b><br>
                    <?php
                        if(isset($_POST['form'])) { 
                            $filepath = "uploads/" . $_FILES["photo"]["name"];

                            if(move_uploaded_file($_FILES["photo"]["tmp_name"], $filepath)) {
                                echo "<img src=".$filepath." width=250px  />";
                            } 
                        } 
                    ?>        
                    </div>
                <?php } ?>
      </section>
        <hr>
        <section>
          <aside>
          <h2><i class="fas fa-question"></i>INFO</h2>
      <ul>
          <li>method: POST</li>
          <li>Mandatory fields</li>
          <li>File sending</li>
          <li>Standard field:text,email,date,file and password</li>
          <li>Checkbox:checkbox</li>
          <li>Radio button: submit</li>
          <li>Standard button: submit</li>
        </ul>
          </aside>

          <article>
            <h2>Contact Form</h2>
            <p class="marginbot50">Standard form for making an<strong> information request </strong> on a website:</p>
                 
          <form action="/index.php" class="form-element" method="post">
          <div>

          <label>Department you wish to contact:</label><text></text>
          <select name="department" id="num4">
          <option value="sales">Sales Department</option>
          <option value="comm">Communication Department</option>
          <option value="tech">Technical Department</option>
          </select><br><br>
           
               
          <label class="text_title">Enter a <strong>Title:</strong></label><text></text>
          <input type="text" id="num" name="title" placeholder="More than 20 characters" minlength="20" required><br><br>

          <!--textarea input-->
          <label>Enter a <strong>Question:</strong></label><text></text>
          <textarea name="comment" id="num" cols="10" rows="10" maxlength="1000" placeholder="Maximum of 1000 characters..." required></textarea><br><br>

          <label for="email">Enter your <strong>Email address</strong>: </label>
          <input type="email" name="email" placeholder="Your email..."><br><br>

          <div class="right">
          <input type="submit" name="form" value="Contact">
      </div>
      </form>
    </article>

    <?php if(!empty($_POST) && $_POST['form'] === "Contact") { ?>
                    <div class="result">
                    <b>Values returned by the form:</b><br>
                    <ul>
                        <?php foreach($_POST as $key => $value)
                        
                        { echo '<li>' .$key.' =>'.$value.'</li>';}
                        ?>
                    </ul>
                    </div>
                <?php } ?>

      </section>
    </div>    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
</html>