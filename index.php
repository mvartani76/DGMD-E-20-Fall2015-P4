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
        </br>
        <p>The custom theme I used for the jQueryUI portion is based off the vader sample theme but with some tweaks to have
          the theme somewhat match the jQuery mobile theme. The only place where the jQueryUI theme is observable is in
          the tabs...</p>
      
      <!-- So this section of the code is the jQueryUI tabs widget and should fulfill the jQueryUI widget requirement...
            There are three tabs. The first tab is basically some text and pictures of me... The second tab is incorporates
            some jQueryUI effects... And the third tab is a jQueryUI interaction based game that uses draggable/droppable... -->
      <div id="tab_example">
        <ul>
          <li><a href="#tab1"><span>About Me</span></a></li>
          <li><a href="#tab2"><span>Some Effects</span></a></li>
          <li class="jqueryUItabgame"><a href="#tab3"><span>Drag/Drop Game (Desktop Only)</span></a></li>
        </ul>
        <div id="tab1">

          <p>Well since I don't really know how to talk about myself, I pretty much just pasted my CV in this section...
            I did, however, use the jQueryUI accordion widget to separate the different sections and I put a nice looking
            picture of myself in one of the accordion panels...:)</p>
          <div id="accordion">
            <h1>EMPLOYMENT HISTORY</h1>
            <div>
              <h3>Senior Business Development Manager 9/2015-Present</br>
              Qualcomm, Inc. Auburn Hills, MI</br>
              <em>Developer and innovator of advanced wireless technologies, products and services – 2015FY Revenue of $25.3B</em>
              </h3>
              <ul>
                <li>Define Develop and Drive “Internet of Things” (IOT) channel marketing/sales support/demand creation
                strategy to deliver a worldwide integrated channel delivery and developer program</li>
                <li>Define Develop and Deliver IoT Channel marketing materials, sales training, and tools for all aspects of the
                channel including direct and indirect partner marketing programs, VARs, Distributors, and DMR Sales teams</li>
                <li>Track and analyze program data/indicators to improve program impact</li>
                <li>Lead, direct and manage external consultants, agencies and other third-party vendors to ensure flawless 
                execution of IoT Channel campaigns and programs with the ultimate goal of enabling our customers to easily
                build their IoT connected product using Qualcomm silicon and services</li>
                <li>Partner closely with business units and sales teams to build solid and consistent marketing programs and 
                strategies.</li>
              </ul>
              <h3>Senior Business Development Manager 5/2014-8/2015</br>

              Cambridge Silicon Radio, Plc Auburn Hills, MI</br>

              <em>Fabless Semiconductor provider of Wireless Connectivity Solutions - 2013 Annual Revenue of $961M</em></h3>
              <ul>
                <li>Led the worldwide business development effort for establishing, developing, and executing key commercial 
                agreements with both customers and partners for CSR with a focus on building and expanding CSR’s Service 
                Delivery Platform (CSDP)</li>
                <li>Aligned and partnered with the internal/external engineering and marketing leads and was responsible for 
                prospecting potential customers and partners and upon identification, opening discussions with prospects, 
                negotiating business terms, contracts and all relevant duties associated with developing new and existing 
                partnerships.</li>
                <li>Secured commercial engagements and partnerships for the successful positioning of the CSR Service Deliv ery 
                Platform (CSDP); developing strong day to day relationships with business counterparts; understanding partner 
                business and product strategy objectives and ensuring those objectives are integrated into CSR’s business 
                strategy; working across the CSR organization to surface and support customer and partner-specific initiatives; 
                analyzing overall deal performance; and developing initiatives designed to grow business in new areas –
                successful partnerships included Phunware, Pulsate, Spreo, Zebra Technologie's, and Westfield Labs</li>
                <li>Led the development and collaboration efforts for a companywide innovation portal that funneled innovation 
                from all levels of the company to drive future looking advanced technology development, improve business 
                process, add features/improvements to existing products, and derive new use cases for existing and future 
                looking products – 850 ideas, 205 submitters, 5 funded projects as of August 2015</li>
                <li>Worked with the Chief Innovation Officer to align direction for future advanced technology development</li>
                <li>Educated executive management on key company, product, and ecosystem/partner requirements, performance 
                indicators, and overall strategy to successfully enter Internet of Things market</li>
                <li>Drafted anti-monopoly documents stating why the Qualcomm acquisition of CSR would not be anti-competitive 
                and sent to a majority of the major economic countries such as The United States, Germany, MOFCOM (China), 
                England, Japan, and South Korea</li>
              </ul>

              <h3>Senior Corporate Development Manager 1/2012-4/2014</br>
              Cambridge Silicon Radio, Plc Auburn Hills, MI</h3>
              <ul>
                <li>Developed and managed company wide financial market models and market research database used for 
                investor and executive presentations</li>
                <li>Led initial stage financial valuation, technical due diligence, and strategic analysis for small to medium sized 
                M&A activities such as the acquisition of the DDFA class D audio product line from Zetex Semiconductor and 
                MAP-X DSP product line from Trident Semiconductor</li>
                <li>Supported head of strategy and company general counsel in developing financial/operational models, legal 
                framework, technical/financial due diligence in divestment of mobile handset wireless connectivity business to 
                Samsung Electronics for $310M</li>
                <li>Developed top level, matrix management driven, multi-phase product development and lifecycle planning 
                process used for all company products</li>
              </ul>
              <h3>Corporate Strategy Analyst 6/2009-1/2012</br>
              Cambridge Silicon Radio, Plc Auburn Hills, MI</h3>
              <ul>
                <li>Selected from a group of 800 engineers to be part of the corporate strategic planning group</li>
                <li>Supported head of strategy in development of strategic plan during acquisitions of SiRF Technology, Inc. and 
                Zoran Corporation as well as smaller “tuck in” technology acquisitions such as APT -X</li>
                <li>Led strategy analysis and preparation of board and executive team recommendations for 5 year plans</li>
                <li>Managed two summer interns to support market research and competitive analysis for company board meeting</li> 
                <li>Performed market segmentation and industry revenue analysis that revealed the limited attractiveness of a 
                multi-billion dollar business for CSR resulting in the closure of relevan t product lines</li>
                <li>Designed and implemented analytical models resulting in the identification of wireless market trends</li>
              </ul>
              <h3>Senior DSP Software Engineer 3/2001-6/2009</br>
              Cambridge Silicon Radio, Plc (formerly Clarity Technologies, Inc.) Auburn Hills, MI</h3>
              <ul>
                <li>Created technical sales and DSP programming training programs administered to internal engineers, sales 
                personnel, customers, and distributors</li>
                <li>Led worldwide technical training programs in several countries across North America, Europe, and Asia, 
                providing efficiency savings of >$10M</li>
                <li>Led technical development of strategic CSR eXtension Partner Program that brought third party software 
                processing to the CSR platform, generating additional annual revenue of >$2M</li>
                <li>Managed worldwide technical support program for 5 mobile handset OEMs and >20 Tier 1 suppliers with total 
                annual revenue of >$75M</li>
                <li>Led technical collaboration with sales team on feasibility studies, resource requirement and project timing 
                estimations, and marketing presentations to win / secure contracts with several OEMs and Tier 1 suppliers</li>
                <li>Designed and implemented a suite of innovative handsfree algorithms that have generated >$20M in royalties 
                and led to acquisition of Clarity Technologies, Inc. by CSR</li>
              </ul>
              <h3>DSP Software Engineer 5/1999-3/2001</br>
              Visteon Corporation Allen Park, MI</br>
              <em>Tier 1 Automotive Supplier – 2001 Annual Sales of $17.9B</em></h3>
              <ul>
                <li>Designed and developed Intermediate Frequency and Baseband audio algorithms for proprietary DSP core</li>
                <li>Presented paper, “Practitioner’s Guide to Digital Boost/Cut Filter Design” at the 1999 International Conference 
                on Signal Processing Applications and Technology (ICSPAT) in Orlando, FL.</li>
              </ul>
            </div>
            <h1>EDUCATION</h1>
            <div>
              <h3>Harvard University Extension School, Cambridge, MA Expected December, 2018</br>
              Masters in Information Management Systems (I think...)</h3>

              Major Concentration: Web Development, Database Management

              Relevant Coursework: Dynamic Web Application Development, Web-Based Database Applications, Web Content 
              Management Systems, Mobile and Cloud Computing
              
              <h3>University of Michigan, Ann Arbor, MI December, 2008</br>
              Master of Business Administration (High Distinction)</h3>
              Major Concentration: Finance, Accounting, Strategy
              Relevant Coursework: Financial Valuation, Venture Capital / PE Finance, Quantitative Investment Strategy, 
              Mergers and Acquisitions, Corporate Restructuring, Financial Statement Analysis

              <h3>University of Michigan, Ann Arbor, MI May, 2001</br>
              Master of Science in Electrical Engineering GPA 7.24/9.0</h3>

              Major Concentration: Signal Processing

              <p>Relevant coursework: stochastic processes, information theory, adaptive modeling, statistical signal 
              processing, multi-variate optimization methods, probability theory, numerical and statistical methods
              University of Michigan, Ann Arbor, MI May, 1999</p>

              <h3>Bachelor of Science in Electrical Engineering (Summa Cum Laude) GPA 3.88/4.0</br>
              University of Michigan, Ann Arbor, MI May, 1999</h3>
              <h3>Bachelor of Fine Arts in Performing Arts and Technology (with Highest Honors) GPA 3.88/4.0</br>
              University of Michigan, Ann Arbor, MI May, 1999</h3>
            </div>
            <h1>SKILLS & INTERESTS</h1>
            <div>
              <ul>
                <li>Ability to leverage technical background in the discussion and implementation of corporate strategic initiatives</li>
                <li>Deep understanding of mobile handset and consumer products software/hardware design and market trends</li>
                <li>Well versed in both front and back end coding languages and frameworks such as HTML5/CSS, PHP(Laravel), 
                Javascript, jQuery, node.js, JSON, Ajax, Python, MySQL, iOS, Objective C, Swift, Wordpress, Joomla, and 
                Drupal</li>
                <li>Excellent coding abilities in C/C++, Matlab, and various assembly languages</li>
                <li>Very interested in open source software/hardware movement with years of experience developing Internet of 
                Things/Cloud Based applications/projects using several open source devices such as Raspberry Pi, Arduino, 
                Beagle Bone Black, Intel Edison, etc.</li>
                <li>Mentor for graduate level entrepreneurial finance classes at the University of Michigan in Ann Arbor through 
                which I serve on the advisory board for several startups within the Southeast Michigan area</li>
                <li>Business advisor to University of Michigan based wireless power startup company, Xondas</li>
                <li>Consultant to several web services companies that develop contextual platforms for retail, hospitality, loyalty 
                programs, healthcare, etc.</li>
                <li>Highly accomplished musician, frequently playing as a session musician for leading artists</li>
              </ul>
            </div>
            <h1>PATENTS</h1>
            <div>
              <ul>
                <li><em>Alves, Rogerio; Yen, Kuan-chieh; Vartanian, Michael; Gadre, Sameer. </em>Method and Apparatus for Improving 
                Intelligibility of Audible Speech Represented by a Speech Signal. U.S. Patent 8,321,215, filed November 23, 
                2009, and issued November 27, 2012.</li>
                <li><em>Alves, Rogerio; Yen, Kuan-chieh; Vartanian, Michael; Gadre, Sameer.</em> Speech Intelligibility. U.S. Patent 
                8,489,393, filed November 23, 2009, and issued July 16, 2013.</li>
                <li><em>Vartanian, Michael.</em> Method for Embedding Product Information in Video Using Radio Frequency Information. 
                U.S. Patent Application Serial No. 14/289,307 filed May 28, 2014.</li>
              </ul>
            </div>
            <h1>A NICE PHOTO OF ME...</h1>
                <img src="./images/mikepic.png" class="mikepic">
          </div>
        </div>
        <!-- This tab section exhibits various jQueryUI effects -->
        <div id="tab2">
          <div id="bounce_example">Click me to bounce!</div>
          <div id="color_example">Lets Change Some Colors!!</div>
        </div> <!-- End of jQuery UI effects section -->
        <!-- This section is the html portion of the jQueryUI interaction requiement -->
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
        </div> <!-- End of jQueryUI interaction section -->
      </div> <!-- End of jQueryUI tabs widget section -->
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
    <!-- This is the start of the jQuery mobile grid system... I am using 3 columns (ui-grid-b) but change the width
          to 100% if the screen size decreases below a threshold... -->
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
          
          <!-- This section below exhibits the touch functionality -->
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
          </div> <!-- End of the touch functionality -->
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