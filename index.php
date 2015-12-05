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
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
</head>
<body>
  <section data-role="page" id="home" data-theme="c">
    <header data-role="header" data-position="fixed">
      <nav data-role="navbar">
        <ul>
          <li class="tab"><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom ui-btn-active ui-state-persist" href="#home">Home</a></li>
          <li class="tab"><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#services">Services</a></li>
          <li class="tab"><a class="ui-btn ui-icon-user ui-btn-icon-bottom" href="#login">Login</a></li>
          <li class="tab"><a class="ui-btn ui-icon-grid ui-btn-icon-bottom" href="#register">Register</a></li>
          <li class="tab"><a class="ui-btn ui-icon-mail ui-btn-icon-bottom" href="#contact">Contact</a></li>
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

    <div data-role="footer" data-position="fixed">
      <p>&copy; 2015 Mike Vartanian</p>
    </div><!-- /footer -->
  </section><!-- End of Home Page -->
  
  <section data-role="page" id="services" data-theme="c">
    <div data-role="header" data-position="fixed">
      <nav data-role="navbar">
        <ul>
          <li class="tab"><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#home">Home</a></li>
          <li class="tab"><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom ui-btn-active ui-state-persist" href="#services">Services</a></li>
          <li class="tab"><a class="ui-btn ui-icon-user ui-btn-icon-bottom" href="#login">Login</a></li>
          <li class="tab"><a class="ui-btn ui-icon-grid ui-btn-icon-bottom" href="#register">Register</a></li>
          <li class="tab"><a class="ui-btn ui-icon-mail ui-btn-icon-bottom" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
    <main data-role="main" class="ui-content">

    <div class="servicestitle">My Services</div>
    <div class="ui-grid-a">
      <div class="ui-block-a">
        <h2 class="servicesh2lighterblue">Retail Merchant Account:</h2>
          <img class="creditcardspic" src="./images/credit-cards.jpg">
          <p>I will support all the major payment types for you or your business needs.  I just want to be paid back... :)</p>
          <p>I have competitive rates for all four of the major credit and debit cards. I also support Diners Club®, Carte Blanche®, JCB®, stored value cards,
            corporate cards, EBT cards, WEX, Voyager, Fleet One and Fuelman. If I currently do not support your card of choice, I will make sure to quickly adopt your
            card as I am mostly concerned about getting paid back quickly...</p>
          <p>You get quick and reliable settlement to your financial institution so I get paid back quicker.
          Again, to make sure that I get paid back on time, I am set up to take care of all your merchant needs and requirements.</p>
          <p class="clear">&nbsp;</p>
      
        <h2 class="servicesh2darkerblue">Gas Stations and Convenience Store Solutions:</h2>
          <img src="./images/gas-station.jpg" class="gasstationpic">
          <p>Since I have put a lot of time in to methods for paying me back, I figured I should utilize some of this knowledge into other areas and generate potential revenue from it.
            One of these areas is the gas station and convenience store payment market.</p>
          <p>My options in this area include stand-alone terminals, ECRs (Electronic Cash Registers), and pay-at-the-pump applications in either petroleum or c-store environments.
          I am currently working on integrating some of my solutions with GasTV units and other pump based infotainment devices.</p>
          <p>Again, I support all major credit and debit cards, private label and Fleet cards, including Wright Express, Voyager, Fuelman, Visa and MasterCard Fleet, and Prepaid Cards.</p>
          
          <p class="clear">&nbsp;</p>

        <h2 class="servicesh2lighterblue">Restaurant Merchant Account:</h2>
        <img src="./images/POS_Restaurant_touchgirl.jpg" class="restmerchacctpic">
          <p>I can offer a variety of solutions to meet your processing needs, including point-of-sale (POS) interfaces stand-alone terminals and PC products.
          I integrate with major restaurant management systems including authorization systems to report reconciliations.</p>
          <p>I have a variety of restaurant applications for both Android and iOS devices so your servers and managers can use mobile devices such as smartphones and tablets to take orders, observe inventories and process payments.</p>
        <p class="clear">&nbsp;</p>

        <h2 class="servicesh2lighterblue">Pin-based Debit:</h2>
          <img src="./images/pinbaseddebit.jpg" class="pinbaseddebitpic">
          <ul>
            <li>PIN prompting for debit cards allows the transaction to be routed to the more economical debit networks.</li>
            <li>Dynamic routing of PIN-based debit cards to the least expensive debit networks increases the retailer’s margins.</li>
            <li>Provides a secure form of payment</li>
            <li>Allows you to accept PIN-based debit cards for BILL PAYMENT</li>
          </ul>
      </div> <!-- End ui-block-a -->
      <div class="ui-block-b">
        <h2 class="servicesh2darkerblue">Wireless Solutions:</h2>
        <img src="./images/mp-iphone.png" class="mobilepayphonepic">
        
        <p>Mobility to your checkout process can improve customer service, expand your sales, and gets me paid back quicker.  Wireless transactions can be processed securely and swiftly, allowing your customer to pay on the spot.</p>
        <p>Wireless point of sale terminal allows you to accept card types typically not accepted when conducting transactions without a dedicated phone line. Wireless payments requires only network connectivity for transaction processing.
          If you keep your payment device in a fixed location and want to eradicate tangled telephone cords, or if you travel with your payment device and need the ability to process a transaction from a variety of locations, wireless solution is right for your business.</p>
        <p>With my NEW Mobile Pay you can save money by downloading my app found in the Apple Store or Google Marketplace so you can utilize your smart phone or wireless device to run transactions.</P>

        <img src="./images/mobile-payment-logos.png" class="mobilepaylogospic">
          <p>I support the following wireless payment options: Apple Pay, Square, Intuit Go, Venmo, PayPal,
            Google Wallet, SnapCash, Popmoney, <span id="lesspaymentoptions"> Dwolla, TabbedOut, Zong, Stripe,
            mopay, obopay, PayOne, cellum, and mPass <span id="justlesspaymentoptions">(less).</span></span><span id="morepaymentoptions">and <span id="justmorepaymentoptions">more.</span></span></p>
          <p>If you do not see your preferred wireless payment option, please contact me
          directly and I will see what I can do to get it up and running as quickly as possible.</p>
        <p class="clear">&nbsp;</p>

        <h2 class="servicesh2darkerblue">eCommerce Solutions:</h2>
          <img src="./images/keyboard_pay.png" class="pinbaseddebitpic">
          <p>I have created several solutions that together have all the options to work with any merchant’s business online solution.  Variations within my several offerings are described below.</p>
          <p><strong>Application Programming Interface (API) -</strong> An API allows you to connect the gateway directly with your web application for a seamless customer experience. It also enables a range of processing scenarios for flexibility in implementing custom business logic, helping you gain platform independence; offers ease of integration and transaction security.</p>

          <p><strong>Payment Pages (Hosted Checkout) –</strong> Your payment processing is completely hosted by First Data and reduces PCI Scope. It rapidly integrates payment processing into your website, and optimizes for mobile devices so merchants can reach “on the go” consumers.</p>

          <p><strong>Real-time Payment Manager (RPM) –</strong> The Virtual Terminal works as base access point for the gateway solution. Its back-office web product allows you to easily look up transaction activity, service your consumers and reconcile your online store. Functionalities include detailed reporting, transaction dashboard, online virtual point-of-sale terminal, transaction history search, recurring payment plans, user administration and more.</P>
      </div> <!-- End block-b -->
    </div> <!-- End grid-a -->

    </main>
    <div data-role="footer" data-position="fixed">
      <p>&copy; 2015 Mike Vartanian</p>
    </div><!-- /footer -->
  </section><!-- End of Services Page -->

  <section data-role="page" id="login" data-theme="c">
    <div data-role="header" data-position="fixed">
      <nav data-role="navbar">
        <ul>
          <li class="tab"><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#home">Home</a></li>
          <li class="tab"><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#services">Services</a></li>
          <li class="tab"><a class="ui-btn ui-icon-user ui-btn-icon-bottom ui-btn-active ui-state-persist" href="#login">Login</a></li>
          <li class="tab"><a class="ui-btn ui-icon-grid ui-btn-icon-bottom" href="#register">Register</a></li>
          <li class="tab"><a class="ui-btn ui-icon-mail ui-btn-icon-bottom" href="#contact">Contact</a></li>
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
    <div data-role="footer" data-position="fixed">
      <p>&copy; 2015 Mike Vartanian</p>
    </div><!-- /footer -->
  </section><!-- End of Login Page -->
  
  <section data-role="page" id="register" data-theme="c">
    <div data-role="header" data-position="fixed">
      <nav data-role="navbar">
        <ul>
          <li class="tab"><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#home">Home</a></li>
          <li class="tab"><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#services">Services</a></li>
          <li class="tab"><a class="ui-btn ui-icon-user ui-btn-icon-bottom" href="#login">Login</a></li>
          <li class="tab"><a class="ui-btn ui-icon-grid ui-btn-icon-bottom ui-btn-active ui-state-persist" href="#register">Register</a></li>
          <li class="tab"><a class="ui-btn ui-icon-mail ui-btn-icon-bottom" href="#contact">Contact</a></li>
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
    <div data-role="footer" data-position="fixed">
      <p>&copy; 2015 Mike Vartanian</p>
    </div><!-- /footer -->
  </section><!-- End of Register Page -->

  <section data-role="page" id="contact" data-theme="c">
    <div data-role="header" data-position="fixed">
      <nav data-role="navbar">
        <ul>
          <li class="tab"><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#home">Home</a></li>
          <li class="tab"><a class="ui-btn ui-icon-cloud ui-btn-icon-bottom" href="#services">Services</a></li>
          <li class="tab"><a class="ui-btn ui-icon-user ui-btn-icon-bottom" href="#login">Login</a></li>
          <li class="tab"><a class="ui-btn ui-icon-grid ui-btn-icon-bottom" href="#register">Register</a></li>
          <li class="tab"><a class="ui-btn ui-icon-mail ui-btn-icon-bottom ui-btn-active ui-state-persist" href="#contact">Contact</a></li>
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

    <div data-role="footer" data-position="fixed">
      <p>&copy; 2015 Mike Vartanian</p>
    </div><!-- /footer -->
  </section><!-- End of Contact Page -->

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="./js/payment_app.js"></script>
</body>
</html>