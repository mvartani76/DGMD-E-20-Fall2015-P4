<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mike's Amateur Web Design</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <link rel="stylesheet" href="css/jquery-ui.structure.min.css">
  <link rel="stylesheet" href="css/jquery-ui.theme.min.css">

  <link rel="stylesheet" href="themes/cool-slate.min.css" />
  <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />

  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/imagestyle.css">
  <link rel="prefetch" href="images/mobile_internet1.jpg">
  <link rel="prefetch" href="images/mobile-internet2.jpg">
  <link rel="prefetch" href="images/mobile-internet3.jpg">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
</head>
<body>
  <section data-role="page" id="home" data-theme="c">
    <header data-role="header" data-position="fixed">
      <nav data-role="navbar">
        <ul>
          <li><a class="ui-btn ui-icon-home ui-btn-icon-bottom ui-btn-active ui-state-persist" href="#home">Home</a></li>
          <li><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#services">Services</a></li>
          <li><a class="ui-btn ui-icon-user ui-btn-icon-bottom" href="#login">Login</a></li>
          <li><a class="ui-btn ui-icon-grid ui-btn-icon-bottom" href="#register">Register</a></li>
          <li><a class="ui-btn ui-icon-mail ui-btn-icon-bottom" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main data-role="main" class="ui-content larger-vertical">
      <h1>Web Design Home Page for Mike Vartanian</h1>
        <p>So I am a very average web developer but I am constantly trying to improve my skills.
          I am open for work and offer many services described in my services page... On this page in the jQuery UI tabs below,
          I briefly describe myself and show some of the new and cool jQuery UI based web designs that I can offer... :)</p>
      
      <div id="tab_example">
        <ul>
          <li><a href="#tab-1"><span>One</span></a></li>
          <li><a href="#tab-2"><span>Some Effects</span></a></li>
          <li class="jqueryUItabgame"><a href="#tab3"><span>Drag/Drop Game (Desktop Only)</span></a></li>
        </ul>
        <div id="tab-1">
          <p>First tab is active by default:</p>
          <pre><code>$( "#tabs" ).tabs(); </code></pre>
        </div>
        <div id="tab-2">
          <div id="bounce_example"></div>
          <div id="color_example">Lets Change Some Colors!!</div>
        </div>
        <div id="tab3">
          <p>So this is a very simple game where you can drag the smiley faces to the sad or happy boxes and depending
            on which box you drag the smiley over, the smiley will get sad or more happy... This makes use of the jQueryUI
            droppable and draggable widgets...</p>
          <div id="draggable1"></div>

          <div id="draggable2"></div>
          
          <div id="dropSad">
            <p>Drop here for Sadness...</p>
          </div>
          <div id="dropHappy">
            <p>Drop here for Happiness...</p>
          </div>
        </div>
      </div>
    </main>

    <div data-role="footer" data-position="fixed" style="text-align:center;">
      &copy; 2015 Mike Vartanian
      <div data-role="controlgroup" data-type="horizontal">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Facebook</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Twitter</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On LinkedIn</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Instagram</a>
      </div>
    </div><!-- /footer -->
  </section><!-- End of Home Page -->
  
  <section data-role="page" id="services" data-theme="c">
    <header data-role="header" data-position="fixed">
      <nav data-role="navbar">
        <ul>
          <li><a class="ui-btn ui-icon-home ui-btn-icon-bottom" href="#home">Home</a></li>
          <li><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom ui-btn-active ui-state-persist" href="#services">Services</a></li>
          <li><a class="ui-btn ui-icon-user ui-btn-icon-bottom" href="#login">Login</a></li>
          <li><a class="ui-btn ui-icon-grid ui-btn-icon-bottom" href="#register">Register</a></li>
          <li><a class="ui-btn ui-icon-mail ui-btn-icon-bottom" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>

    <main data-role="main" class="ui-content">
    <h1 class="servicestitle">My Services</h1>
    <p>I have been providing very assignment relevant website designs for a couple years now and can utillize this knowledge
    for your small or medium sized business.</p>
    
    <p>As a small/medium sized business owner, you intimately understand the balance of money in and money out. I understand
      this too. And since I only have a few web design classes under my belt, I offer this lack of skill and experience at a
      very affordable price.</p>
    <p>I will work hard finding creative ways to build affordable websites that kick-ass! (Well maybe
      not quite kick-ass but kinda good...:))
      A great website doesn't have to cost thousands, but it does have to be awesome!</p>
    <div class="ui-grid-b">
      <div class="ui-block-a">
        <div data-role="collapsible" class="collapsible-a">
          <h2 class="h2-collapsible-a">Web and Mobile App Design</h2>
          <p>A website (and now a mobile application) is pretty much the core of any business. It is one of the initial steps
          in building a strong, coherent, and successful marketing strategy.</p>
          <p>So.... Think about it.... When you hand out a business card, you are telling the recipient to visit your site or
          download your mobile application. When you run Google Ad campaigns, you are driving traffic to your website.
          When you meet someone, and the conversation turns into what you do for a living, that person will inevitably visit
          your place in cyber world.</p>
          <p>Everything we do drives traffic to our digital presence, but unfortunately, most small/medium
          sized business sites out there today are not that great. They are usually quite mediocre.. And cost way too much...</p>
          <p>If you want mediocre, I can give you that for a fraction of the price... But seriously, the fact is, business owners,
          startup dreamers/geeks/nerds/visionaries/etc., and general old fashioned entrepreneurs spend a lot of time and
          money driving traffic to websites or mobile applications that don't necessarily convert visitors into buyers.</p>
          <p>Soooo... We need to correct this... Stop paying too much for your website...</p>
          <p>Let me show you how I can help convert those visitors to buyers at a fraction of the price!</p>
          <div class="mobileexamplefunctionality">
            <h3>Mobile App Example Functionality</h3>
            <h4>Orientation Example...</h4>
            <div id="orientation">Orientation Change Not Supported on this device</div>
            <h4>Swipe Example</h4>
            <p>Swipe left and right to display different images...</p>
            <div id="mobileinternetswipe" class="start"></div>
            <h4>Tap/Hold Example</h4>
            <p>Tap and hold box below to display an image...</p>
            <div id="mobileinternettaphold" class="start"></div>
          </div>
        </div>
        <img src="./images/Web-Graphic-Design.jpg" class="servicespics-a">
      </div> <!-- End ui-block-a -->
      <div class="ui-block-b">
        <div data-role="collapsible" class="collapsible-b">
          <h2 class="h2-collapsible-b">Web Hosting</h2>
          <p>It is really no big secret that building a strong internet presence can do more for your business than most forms of
            offline marketing.</p>
          <p>From websites, to mobile applications, to email marketing, and to very contextually relevant offers, each aspect of
            your online presence plays a very important role in finding new clients and engaging with customers. The core of your
            business online is your suite of online homes from your website, your mobile application, and your social media.</p>
          <p>While smart business owners invest time and money into a great digital brand, most opt for the most inexpensive website hosting.
            Why? Cheap, unreliable website hosting can lead to loss of revenue, negative effects on SEO Ranking, security
            issues, and frustration.... I am not saying I can give you the best digital/online image, but I think I can do okay
            and do it very cheaply....</p>
          <p>Furthermore, most website hosting establishments don't offer support or troubleshoot issues, other
            than those originating from their servers.</p>
          <p>So what does this mean to you? This means that if your digital brand isn't functioning
            quite right, it's up to you to find a developer or developers, or fix it yourself. So what's the solution?</p>
        </div>
        <img src="./images/web-hosting.jpg" class="servicespics-b">        
      </div> <!-- End block-b -->
      <div class="ui-block-c">
        <div data-role="collapsible" class="collapsible-c">
          <h2 class="h2-collapsible-c">Online/Mobile Marketing Strategy</h2>
          <p>The landscape and tactics used for online marketing are ever changing. What might work today, doesn't always work
          tomorrow. What used to be state of the art today, is old news tomorrow...</p>
          <p>Online marketing has exploded way beond the digital realm and has crept back into the physical world through the
          billions of smart devices that we use every day.</p>
          <p>Successful businesses are constantly evolving their marketing strategy to stay in-tune with what is
          working, and spending less on what's not. From Email Marketing to pay-per-click ads, there are a number of ways to
          market your business online. Some of these methods cost next to nothing, while others can cost a fortune.</p>
          <p>The problem is, a lot of business owners don't know what will work, or what is currently working to drive traffic to
          their website. This means a lot of wasted money on ineffective online strategies.</p>
          <p>I work with my clients to build highly-effective online marketing strategies. No matter if it is a doctor's
          office or a restaurant or a gas station, each strategy is a customized solution for optimum results. I will try to
          show you exactly what to do to make the "interwebs" and mobile apps work for you! And remember I do this for a
          a very affordable price too!!!</p>
        </div>
        <img src="./images/online-strategy.png" class="servicespics-c">
      </div> <!-- End block-c -->
    </div> <!-- End grid-b -->

    </main>
    <div data-role="footer" data-position="fixed" style="text-align:center;">
      &copy; 2015 Mike Vartanian
      <div data-role="controlgroup" data-type="horizontal">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Facebook</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Twitter</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On LinkedIn</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Instagram</a>
      </div>
    </div><!-- /footer -->
  </section><!-- End of Services Page -->

  <section data-role="page" id="login" data-theme="c">
    <div data-role="header" data-position="fixed">
      <nav data-role="navbar">
        <ul>
          <li><a class="ui-btn ui-icon-home ui-btn-icon-bottom" href="#home">Home</a></li>
          <li><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#services">Services</a></li>
          <li><a class="ui-btn ui-icon-user ui-btn-icon-bottom ui-btn-active ui-state-persist" href="#login">Login</a></li>
          <li><a class="ui-btn ui-icon-grid ui-btn-icon-bottom" href="#register">Register</a></li>
          <li><a class="ui-btn ui-icon-mail ui-btn-icon-bottom" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
    <main data-role="main" class="ui-content">
    
      <div class="logincontainer ui-corner-all">  
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
    </main>
    <div data-role="footer" data-position="fixed" style="text-align:center;">
      &copy; 2015 Mike Vartanian
      <div data-role="controlgroup" data-type="horizontal">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Facebook</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Twitter</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On LinkedIn</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Instagram</a>
      </div>
    </div><!-- /footer -->
  </section><!-- End of Login Page -->
  
  <section data-role="page" id="register" data-theme="c">
    <div data-role="header" data-position="fixed">
      <nav data-role="navbar">
        <ul>
          <li><a class="ui-btn ui-icon-home ui-btn-icon-bottom" href="#home">Home</a></li>
          <li><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#services">Services</a></li>
          <li><a class="ui-btn ui-icon-user ui-btn-icon-bottom" href="#login">Login</a></li>
          <li><a class="ui-btn ui-icon-grid ui-btn-icon-bottom ui-btn-active ui-state-persist" href="#register">Register</a></li>
          <li><a class="ui-btn ui-icon-mail ui-btn-icon-bottom" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>

    <main data-role="main" class="ui-content">
      <div class="registercontainer ui-corner-all">  
        <form id="register_id" method="post">
          <h3>Registration</h3>
          <h4>Please fill out the information below to register with my site...</h4>
          <div class="ui-grid-a">
            <div class="ui-block-a">
              <fieldset><input placeholder="First Name" id="firstname" name="firstname" type="text" tabindex="1" required autofocus><span class="error"></span></fieldset>
              <fieldset><input placeholder="Last Name" id="lastname" name="lastname" type="text" tabindex="2" required><span class="error"></span></fieldset>
              <fieldset><input placeholder="Street Address 1" id="streetaddr1" name="streetaddr1" type="text" tabindex="3" required><span class="error"></span></fieldset>
              <fieldset><input placeholder="Street Address 2" id="streetaddr2" name="streetaddr2" type="text" tabindex="4"></fieldset>
              <fieldset><input placeholder="City" id="city" name="city" type="text" tabindex="5" required><span class="error"></span></fieldset>
              <fieldset><input placeholder="State/Province" id="state_prov" name="state_prov" type="text" tabindex="6" required><span class="error"></span></fieldset>
              <fieldset><input placeholder="Zip Code / Postal Code" id="zip_post_code" name="zip_post_code" type="text" tabindex="7" required><span class="error"></span></fieldset>
              <fieldset><input placeholder="Country" id="country" name="country" type="text" tabindex="8" required><span class="error"></span></fieldset>
            </div>
            <div class="ui-block-b">
              <fieldset><input placeholder="Your Email Address (minimum of 5 characters)" id="emailaddr" name="emailaddr" type="email" tabindex="9" required><span class="error"></span></fieldset>
              <fieldset><input placeholder="Confirm Email Address" id="confirmemailaddr" name="confirmemailaddr" type="email" tabindex="10" required><span class="error"></span></fieldset>
              <fieldset><input placeholder="Your Phone Number" id="phonenumber" name="phonenumber" type="tel" tabindex="11" required><span class="error"></span></fieldset>
              <fieldset><input placeholder="Your Web Site starts with http://" id="weburl" name="weburl" type="url" tabindex="12"></fieldset>
              <fieldset><input placeholder="Desired Username" id="username" name="username" type="text" tabindex="13" required><span class="error"></span></fieldset>
              <fieldset><input placeholder="Password" id="userpassword" name="userpassword" type="password" tabindex="14" required><span class="error"></span></fieldset>
              <fieldset><input placeholder="Confirm Password" id="confirmuserpassword" name="confirmuserpassword" type="password" tabindex="15" required><span class="error"></span></fieldset>
            </div>
          </div>
          <fieldset>
            <button name="submit" type="submit" id="register-submit" data-submit="...Sending">Submit</button>
          </fieldset>
        </form>
      </div>
    </main>
    <div data-role="footer" data-position="fixed" style="text-align:center;">
      &copy; 2015 Mike Vartanian
      <div data-role="controlgroup" data-type="horizontal">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Facebook</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Twitter</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On LinkedIn</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Instagram</a>
      </div>
    </div><!-- /footer -->
  </section><!-- End of Register Page -->

  <section data-role="page" id="contact" data-theme="c">
    <div data-role="header" data-position="fixed">
      <nav data-role="navbar">
        <ul>
          <li><a class="ui-btn ui-icon-home ui-btn-icon-bottom" href="#home">Home</a></li>
          <li><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#services">Services</a></li>
          <li><a class="ui-btn ui-icon-user ui-btn-icon-bottom" href="#login">Login</a></li>
          <li><a class="ui-btn ui-icon-grid ui-btn-icon-bottom" href="#register">Register</a></li>
          <li><a class="ui-btn ui-icon-mail ui-btn-icon-bottom ui-btn-active ui-state-persist" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>

    <main data-role="main" class="ui-content">
      <div class="contactcontainer ui-corner-all">  
        <form id="contact_id" method="post">
          <h3>Quick Contact</h3>
          <h4>Contact us today, and get reply with in 24 hours!</h4>
          <fieldset>
            <input placeholder="First Name" id="firstname" name="firstname" type="text" tabindex="1" required autofocus>
            <input placeholder="Last Name" id="lastname" name="lastname" type="text" tabindex="2" required>
            <input placeholder="Your Email Address" id="emailaddr" name="emailaddr" type="email" tabindex="3">
            <input placeholder="Your Phone Number" id="phonenumber" name="phonenumber" type="tel" tabindex="4">
            <input placeholder="Your Web Site starts with http://" id="weburl" name="weburl" type="url" tabindex="5">
          </fieldset>
          <fieldset id="radio_msg" data-role="controlgroup" data-type="horizontal">
            <h4>What type of message do you want to send?</h4>
              <input type="radio" id="dept1" name="dept" value="general" tabindex="6" checked>
              <label for="dept1">General</label>
              <input type="radio" id="dept2" name="dept" value="sales" tabindex="7">
              <label for="dept2">Sales</label>
              <input type="radio" id="dept3" name="dept" value="marketing" tabindex="8">
              <label for="dept3">Marketing</label>
              <input type="radio" id="dept4" name="dept" value="technical" tabindex="9">
              <label for="dept4">Technical</label>
          </fieldset>

          <fieldset>
            <textarea placeholder="Type your Message Here...." tabindex="10" required></textarea>
          </fieldset>
          <h4>Preferred time for phone contact...</h4>
          <div class="ui-grid-a">
            <div class="ui-block-a">
              <fieldset>
                <label for="start_time">Start Time</label>
                <input id="start_time" name="start_time" type="time" tabindex="11" value="00:00">
              </fieldset>
            </div>
            <div class="ui-block-b">
              <fieldset>
                <label for="end_time">End Time</label>
                <input id="end_time" name="end_time" type="time" tabindex="12" value="23:59">
              </fieldset>
            </div>
          </div>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" 
            class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-star">Submit</button>
          </fieldset>
        </form>
      </div>
    </main>

    <div data-role="footer" data-position="fixed" style="text-align:center;">
      &copy; 2015 Mike Vartanian
      <div data-role="controlgroup" data-type="horizontal">
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Facebook</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Twitter</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On LinkedIn</a>
        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add Me On Instagram</a>
      </div>
    </div><!-- /footer -->
  </section><!-- End of Contact Page -->

    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- It appears that jquery UI does not work with jquery 1.11.3 so I am reverting back to 1.10.2
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="./js/p4_app.js"></script>
</body>
</html>