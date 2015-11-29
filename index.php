<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>Payment Tracking Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
  <link href="./css/menu.css" rel="stylesheet">
  <link href="./css/services.css" rel="stylesheet">
  <link href="./css/imagestyle.css" rel="stylesheet">  
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

</head>
<body>
  <div data-role="page" id="home">
    <div data-role="header">
        <ul class="nav">
            <li class="logo"><a href="#">Mike's Payments</a>
            <li class="btn"><a href="#" class="btn-link">&#9776;</a>
              <ul class="menu">
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./services.php">Services</a></li>
                <li><a href="./createcard.php">Create Card</a></li>
                <li><a href="./login.php">Login</a></li>
                <li><a href="./register.php">Register</a></li>
                <li><a href="./contact.php">Contact</a></li>
              </ul>
          </li>
        </ul>
      </div>
    </div>
    
    <div role="main" class="ui-content" >
      <div class="messydeskpic">
        <div class="storyandsolution">
        <h1>My Basic Problem</h1>
        <img src="./images/people-grabbing-money-from-businessman.jpg" alt="Grabbing Money" class="greedyhandspic">
        <img src="./images/greedy-man-asking-for-money.jpg" alt="Greedy Man" class="greedyhandspic">
        <p>So here is the basic story... The abbreviated version of course...:)</p>
        <p>I have loaned out way too much money to my friends and it has become very difficult for
        me to keep track of who owes me what...</p>
        <p>Of course I should not have been loaning out this money as it was causing me a
        lot of grief and I was not getting paid back 100% but I feel bad for the people asking to borrow money
        and am a gigantic sucker...</p>
        <p class="clear">&nbsp;</p>
        <img src="./images/woman-asking-for-money-pre.jpg" alt="Woman Asking for Money" class="womanaskingformoneypic">
        <span id="sobstoryquotes">
          <p>Any sob story you tell me can extract any amount of money from me...</p>
          <p><em>"I am trying to pay my way through my web development class and cannot afford to pay rent now..."</em></p>
          <p><em>"I cannot pay you rent because I forgot about my
          insurance payment..."</em></p>
          <p><em>"I will get you your money next week..."</em></p>
          <p><em>"I thought you didn't need the money until next week?"</em></p>
          <p><em>"Wait a second... I thought I only owed you two thousand bucks?"</em></p>
        </span>
        <p>I have tried to work on this but have not been able
        to correct this non-productive behavior of mine...</p>
        <p class="clear">&nbsp;</p>
        <img src="./images/man-pulling-hair-out.jpg" alt="Man Pulling His Hair Out" class="manpullinghairoutpic">
        <img src="./images/guy-pulling-hair-out2.jpg" alt="Another Man Pulling His Hair Out" class="manpullinghairoutpic">
        <img src="./images/hair-pulling.jpg" alt="And Another Man Pulling His Hair Out" class="manpullinghairoutpic">
        <p>With all of today's technology I figured there should be an easy way for me to keep better track of the money that is owed
          to me as well as facilitate methods for more convenient payment methods (both for me and the person that owes me money!!)</p>
          <p class="clear">&nbsp;</p>
        <h1>How did I do this before?</h1>
        <img src="./images/paper-on-desk.jpg" alt="Paper on Desk" class="paperondeskpic">
        <p>Lending out money and attempting to collect in the past has been a very difficult and frustrating process to say the least.</p>
        <p>I have used Excel, Quicken, Word, Email, and paper slips to track how much money I have loaned out to who and when... I would
          xerox checks that were sent to me and provide paper receipts for those who paid with cash...</p>
          <p>Needless to say that this system became very cumbersome and any lapse on my part (ie forgetting to document a loan or payment), dramatically increased the complexity
          of my system...</p>
          <p class="clear">&nbsp;</p>
        <h1>The Solution(s)...</h1>
        <p>With cheap cloud computing and storage, ubuiquity of smart mobile devices with strong application ecosystems, and the 
          skills that I have gathered in my web development classes, I have put together a full payment solution that 
          significantly reduces the stress and issues associated with loans and payment collection.</p>
        <p> It turns out that this solution can be used by others as well and with the increased use of normalized APIs,
            I can connect my solution with other systems and infrastructure such as payment, workforce, and asset tracking 
            solutions, both new and legacy.</p>
            <h1>Is this for you?</h1>
            <p>Well if you owe me money, you have to use this...:) If you want to borrow money from me, you have to use this...:)
        </div>
      </div>
    </div>

    <div data-role="footer" data-theme="a">
      <h4>Page Footer</h4>
    </div><!-- /footer -->
  </div><!-- End of Home Page -->
  
  <div data-role="page" id="services">
    <div data-role="header">
    </div>
    <div role="main" class="ui-content">
    </div>
    <div data-role="footer" data-theme="a">
      <h4>Page Footer</h4>
    </div><!-- /footer -->
  </div><!-- End of Services Page -->

  <div data-role="page" id="createcard">
    <div data-role="header">

<div class="wrapper">
      <div class="navigation">
        <ul class="nav">
            <li class="logo"><a href="#">Mike's Payments</a>
            <li class="btn"><a href="#" class="btn-link">&#9776;</a>
              <ul class="menu">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./services.php">Services</a></li>
                <li class="active"><a href="./createcard.php">Create Card</a></li>
                <li><a href="./login.php">Login</a></li>
                <li><a href="./register.php">Register</a></li>
                <li><a href="./contact.php">Contact</a></li>
              </ul>
          </li>
        </ul>
      </div>
    </div>


    </div>
    <div role="main" class="ui-content">

  <div class="createcardcontainer">  
    <form id="createcard_id" method="post">
      <h3>Create Your Card</h3>
        <h4>Please enter the following information to design your custom credit card...</h4>
        <fieldset>
          <select id="card_image">
            <option value="" disabled selected>Select your Background Image</option>
            <option value="nature">Nature</option>
            <option value="sports">Sports</option>
            <option value="automotive">Automotive</option>
            <option value="skyline">City Skyline</option>
          </select>
        </fieldset>
        <fieldset><input placeholder="First Name" id="card_firstname" name="firstname" type="text" required></fieldset>
        <fieldset><input placeholder="Last Name" id="card_lastname" name="lastname" type="text" required></fieldset>
        <fieldset>
          <label>Bank Logo Color (Red) </label>
          <input type="range" min="0" max="255" name="scale" id="card_image_rgb_red">
        </fieldset>
        <fieldset>
          <label>Bank Logo Color (Green) </label>
          <input type="range" min="0" max="255" name="scale" id="card_image_rgb_green">
        </fieldset>
        <fieldset>
          <label>Bank Logo Color (Blue) </label>
          <input type="range" min="0" max="255" name="scale" id="card_image_rgb_blue">
        </fieldset>        
        <fieldset>
          <button type="submit" id="createcard_id-create">Create Card</button>
        </fieldset>
        <fieldset>
          <button type="submit" id="createcard_id-clear">Clear Card</button>
        </fieldset>
      </form>
  </div>

  <div class="canvascontainer">
    <canvas id="canvas1"></canvas>
    <canvas id="canvas2"></canvas>
    <canvas id="canvas3"></canvas>
    <canvas id="canvas4"></canvas>
  </div>

      
    </div>
    <div data-role="footer" data-theme="a">
      <h4>Page Footer</h4>
    </div><!-- /footer -->
  </div><!-- End of Create Card Page -->

  <div data-role="page" id="login">
    <div data-role="header">

<div class="wrapper">
      <div class="navigation">
        <ul class="nav">
            <li class="logo"><a href="#">Mike's Payments</a>
            <li class="btn"><a href="#" class="btn-link">&#9776;</a>
              <ul class="menu">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./services.php">Services</a></li>
                <li><a href="./createcard.php">Create Card</a></li>
                <li class="active"><a href="./login.php">Login</a></li>
                <li><a href="./register.php">Register</a></li>
                <li><a href="./contact.php">Contact</a></li>
              </ul>
          </li>
        </ul>
      </div>
    </div>

    </div>
    <div role="main" class="ui-content">
    
  <div class="logincontainer">  
    <form id="login_id" method="post">
      <h3>Login</h3>
        <h4>Please enter your username and password to login...</h4>
        <fieldset><input placeholder="Username" id="login_username" name="username" type="text" tabindex="1" required autofocus></fieldset>
        <fieldset><input placeholder="Password" id="login_userpassword" name="userpassword" type="password" tabindex="2" required></fieldset>
        <fieldset>
          <button name="submit" type="submit" id="login_id-submit" data-submit="...Sending">Submit</button>
        </fieldset>
      </form>
  </div>


    </div>
    <div data-role="footer" data-theme="a">
      <h4>Page Footer</h4>
    </div><!-- /footer -->
  </div><!-- End of Login Page -->
  
  <div data-role="page" id="register">
    <div data-role="header">

    <div class="wrapper">
      <div class="navigation">
        <ul class="nav">
            <li class="logo"><a href="#">Mike's Payments</a>
            <li class="btn"><a href="#" class="btn-link">&#9776;</a>
              <ul class="menu">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./services.php">Services</a></li>
                <li><a href="./createcard.php">Create Card</a></li>
                <li><a href="./login.php">Login</a></li>
                <li class="active"><a href="./register.php">Register</a></li>
                <li><a href="./contact.php">Contact</a></li>
              </ul>
          </li>
        </ul>
      </div>
    </div>

    </div>
    <div role="main" class="ui-content">

<div class="registercontainer">  
  <form id="register_id" method="post">
    <h3>Registration</h3>
    <h4>Please fill out the information below to register with my site...</h4>
    <div class="form50">
      <fieldset><input placeholder="First Name" id="firstname" name="firstname" type="text" tabindex="1" required autofocus><span class="error"></span></fieldset>
      <fieldset><input placeholder="Last Name" id="lastname" name="lastname" type="text" tabindex="2" required><span class="error"></span></fieldset>
      <fieldset><input placeholder="Street Address 1" id="streetaddr1" name="streetaddr1" type="text" tabindex="3" required><span class="error"></span></fieldset>
      <fieldset><input placeholder="Street Address 2" id="streetaddr2" name="streetaddr2" type="text" tabindex="4"></fieldset>
      <fieldset><input placeholder="City" id="city" name="city" type="text" tabindex="5" required><span class="error"></span></fieldset>
      <fieldset><input placeholder="State/Province" id="state_prov" name="state_prov" type="text" tabindex="6" required><span class="error"></span></fieldset>
      <fieldset><input placeholder="Zip Code / Postal Code" id="zip_post_code" name="zip_post_code" type="text" tabindex="7" required><span class="error"></span></fieldset>
      <fieldset><input placeholder="Country" id="country" name="country" type="text" tabindex="8" required><span class="error"></span></fieldset>
    </div>
    <div class="form50">
      <fieldset><input placeholder="Your Email Address (minimum of 5 characters)" id="emailaddr" name="emailaddr" type="email" tabindex="9" required><span class="error"></span></fieldset>
      <fieldset><input placeholder="Confirm Email Address" id="confirmemailaddr" name="confirmemailaddr" type="email" tabindex="10" required><span class="error"></span></fieldset>
      <fieldset><input placeholder="Your Phone Number" id="phonenumber" name="phonenumber" type="tel" tabindex="11" required><span class="error"></span></fieldset>
      <fieldset><input placeholder="Your Web Site starts with http://" id="weburl" name="weburl" type="url" tabindex="12"></fieldset>
      <fieldset><input placeholder="Desired Username" id="username" name="username" type="text" tabindex="13" required><span class="error"></span></fieldset>
      <fieldset><input placeholder="Password" id="userpassword" name="userpassword" type="password" tabindex="14" required><span class="error"></span></fieldset>
      <fieldset><input placeholder="Confirm Password" id="confirmuserpassword" name="confirmuserpassword" type="password" tabindex="15" required><span class="error"></span></fieldset>
    </div>
    <fieldset>
      <button name="submit" type="submit" id="register-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>

</div>

    </div>
    <div data-role="footer" data-theme="a">
      <h4>Page Footer</h4>
    </div><!-- /footer -->
  </div><!-- End of Register Page -->

  <div data-role="page" id="contact">
    <div data-role="header">

<div class="wrapper">
      <div class="navigation">
        <ul class="nav">
            <li class="logo"><a href="#">Mike's Payments</a>
            <li class="btn"><a href="#" class="btn-link">&#9776;</a>
              <ul class="menu">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./services.php">Services</a></li>
                <li><a href="./createcard.php">Create Card</a></li>
                <li><a href="./login.php">Login</a></li>
                <li><a href="./register.php">Register</a></li>
                <li class="active"><a href="./contact.php">Contact</a></li>
              </ul>
          </li>
        </ul>
      </div>
    </div>

    </div>
    <div role="main" class="ui-content">

<div class="contactcontainer">  
  <form id="contact_id" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset><input placeholder="First Name" id="firstname" name="firstname" type="text" tabindex="1" required autofocus></fieldset>
    <fieldset><input placeholder="Last Name" id="lastname" name="lastname" type="text" tabindex="2" required></fieldset>
    <fieldset><input placeholder="Your Email Address" id="emailaddr" name="emailaddr" type="email" tabindex="3"></fieldset>
    <fieldset><input placeholder="Your Phone Number" id="phonenumber" name="phonenumber" type="tel" tabindex="4"></fieldset>
    <fieldset><input placeholder="Your Web Site starts with http://" id="weburl" name="weburl" type="url" tabindex="5">
    </fieldset>
  <fieldset><h4>What type of message do you want to send?</h4>
      <input type="radio" id="dept1" name="dept" value="general" tabindex="6" checked> General
      <input type="radio" id="dept2" name="dept" value="sales" tabindex="7"> Sales
      <input type="radio" id="dept3" name="dept" value="marketing" tabindex="8"> Marketing
      <input type="radio" id="dept4" name="dept" value="technical" tabindex="9"> Technical
  </fieldset>
    <fieldset><textarea placeholder="Type your Message Here...." tabindex="10" required></textarea>
    </fieldset>
    <h4 class="centerh4">Preferred time for phone contact...</h4>
    <div class="form50">
    <fieldset><label>Start Time</label><input id="start_time" name="start_time" type="time" tabindex="11" value="00:00"></fieldset>
  </div>
      <div class="form50">
    <fieldset><label>End Time</label><input id="end_time" name="end_time" type="time" tabindex="12" value="23:59"></fieldset>
  </div>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>

</div>

    </div>
    <div data-role="footer" data-theme="a">
      <h4>Page Footer</h4>
    </div><!-- /footer -->
  </div><!-- End of Contact Page -->

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="./js/payment_app.js"></script>
</body>
</html>