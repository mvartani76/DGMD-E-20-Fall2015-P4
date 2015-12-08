<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Payment Tracking Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="themes/cool-slate.min.css" />
  <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/imagestyle.css">
  <link rel="prefetch" href="images/mobile_internet1.jpg">
  <link rel="prefetch" href="images/mobile_internet2.jpg">
  <link rel="prefetch" href="images/mobile_internet3.jpg">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
</head>
<body>
  <section data-role="page" id="home" data-theme="c">
    <header data-role="header" data-position="fixed">
      <nav data-role="navbar">
        <ul>
          <li><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom ui-btn-active ui-state-persist" href="#home">Home</a></li>
          <li><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#services">Services</a></li>
          <li><a class="ui-btn ui-icon-user ui-btn-icon-bottom" href="#login">Login</a></li>
          <li><a class="ui-btn ui-icon-grid ui-btn-icon-bottom" href="#register">Register</a></li>
          <li><a class="ui-btn ui-icon-mail ui-btn-icon-bottom" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main data-role="main" class="ui-content">
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
          <li><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#home">Home</a></li>
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
      very affordable price. I will work hard finding creative ways to build affordable websites that kick-ass! (Well maybe
      not quite kick-ass but kinda good...:))
      A great website doesn't have to cost thousands, but it does have to be awesome!</p>
    <div class="ui-grid-b">
      <div class="ui-block-a">
       <div data-role="collapsible">
          <h2>Web and Mobile App Design</h2>
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
          <p>Let me show you how I can help convert
          those visitors to buyers at a fraction of the price!</p>
          <div class="mobileexamplefunctionality">
            <h3>Mobile App Example Functionality</h3>
            <h4>Orientation Example...</h4>
            <div id="orientation">Orientation Change Not Supported on this device</div>
            <h4>Swipe Examples...</h4>
            <div id="mobileinternetswipe" class="start"></div>
            <h4>Tap/Hold Examples...</h4>
          </div>
        </div>
      </div> <!-- End ui-block-a -->
      <div class="ui-block-b">
        <div data-role="collapsible">
          <h2>Web Hosting</h2>
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
      </div> <!-- End block-b -->
      <div class="ui-block-c">
        <div data-role="collapsible">
          <h2>Online/Mobile Marketing Strategy</h2>
          <p>The landscape and tactics used for online marketing are ever changing. What might work today, doesn't always work
          tomorrow. What used to be state of the art today, is old news tomorrow...</p>
          <p>Online marketing has exploded way beond the digital realm and has crept back into the physical world through the
            billions of smart devices that we use every day.</p>
          Successful businesses are constantly evolving their marketing strategy to stay in-tune with what is
          working, and spending less on what's not. From Email Marketing to pay-per-click ads, there are a number of ways to
          market your business online. Some of these methods cost next to nothing, while others can cost a fortune. The
          problem is, a lot of business owners don't know what will work, or what is currently working to drive traffic to
          their website. This means a lot of wasted money on ineffective online strategies. We work with our clients to build
          highly-effective online marketing strategies. No matter if it's a doctor's office or  a restaurant, each strategy
          is a customized solution for best results. We'll show you exactly what to do to make the internet work for you!</p>
        </div>
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
          <li><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#home">Home</a></li>
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
          <li><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#home">Home</a></li>
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
          <li><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#home">Home</a></li>
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

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="./js/p4_app.js"></script>
</body>
</html>