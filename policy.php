<?php 
session_start();
    include 'config/config.php';
    class data extends Connection{ public function managdata(){
?>
<?php include 'contact1.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="images/logo1.png" rel="icon">
    <link href="images/logo1.png" rel="apple-touch-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">
    <title>THE FITNESS AVE. GYM</title>
    
  </head>
    <style>

.box:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container-fluid{
    background-color: black;
    box-shadow: 1px 1px 2px #000000;
    width: 100%; 
    margin-top:0px;
    transition: top 0.3s; 
    position: fixed ;
    z-index: 1;
    display:block;
}
    html{
      scroll-behavior: smooth;
    }
.faq-section {
    background: #fdfdfd;
    min-height: 10vh;
    padding: 10vh 0 0;
}
.faq-title h2 {
  position: relative;
  margin-bottom: 45px;
  display: inline-block;
  font-weight: 600;
  line-height: 1;
}
.faq-title h2::before {
    content: "";
    position: absolute;
    left: 50%;
    width: 60px;
    height: 2px;
    background: #E91E63;
    bottom: -25px;
    margin-left: -30px;
}
.faq-title p {
  padding: 0 190px;
  margin-bottom: 10px;
}

.faq {
  background: #FFFFFF;
  box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
  border-radius: 4px;
}

.faq .card {
  border: none;
  background: none;
  border-bottom: 1px dashed #CEE1F8;
}

.faq .card .card-header {
  padding: 0px;
  border-bottom: 1px solid;
  background: none;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.faq .card .card-header:hover {
    background: rgba(233, 30, 99, 0.1);
    padding-left: 10px;
}
.faq .card .card-header .faq-title {
  width: 100%;
  text-align: left;
  padding: 0px;
  padding-left: 30px;
  padding-right: 30px;
  font-weight: 400;
  font-size: 15px;
  letter-spacing: 1px;
  color: #3B566E;
  text-decoration: none !important;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  cursor: pointer;
  padding-top: 20px;
  padding-bottom: 20px;
}

.faq .card .card-header .faq-title .badge {
  display: inline-block;
  width: 20px;
  height: 20px;
  line-height: 14px;
  float: left;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  text-align: center;
  background: #E91E63;
  color: #fff;
  font-size: 12px;
  margin-right: 20px;
}

.faq .card .card-body {
  padding: 30px;
  padding-left: 35px;
  padding-bottom: 16px;
  font-weight: 400;
  font-size: 16px;
  color: #6F8BA4;
  line-height: 28px;
  letter-spacing: 1px;
  border-top: 1px solid #F3F8FF;
}

.faq .card .card-body p {
  margin-bottom: 14px;
}

@media (max-width: 991px) {
  .faq {
    margin-bottom: 30px;
  }
  .faq .card .card-header .faq-title {
    line-height: 26px;
    margin-top: 10px;
  }
}
<style>
    html{
      scroll-behavior: smooth;
    }
    
.banner-section {
	height: 60vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(images/loginbg.jpg);
    background-image: cover;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

.bs-text.service-banner .bt-tips {
	margin-bottom: 35px;
}

.bs-text h2 {
	font-size: 48px;
	color: #ffffff;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 25px;
}

.bs-text .bt-tips {
	font-size: 20px;
	color: #c4c4c4;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 45px;
}

.bs-text .primary-btn {
	background: transparent;
	border: 2px solid #f36100;
}

.bs-text .play-btn {
	display: inline-block;
	height: 70px;
	width: 70px;
	background: #f36100;
	border-radius: 50%;
	line-height: 70px;
	text-align: center;
	font-size: 36px;
	color: #ffffff;
}
.line div{
    margin: 0 0.2rem;
    
}
.line div:nth-child(1),
.line div:nth-child(3){
    height: 3px;
    width: 70px;
    background: gold;
    border-radius: 5px;
}
.line{
    display: flex;
    align-items: center;
    margin-left: 460px;
}
.line div:nth-child(2){
    width: 20px;
    height: 20px;
    background: black;
    border-radius: 50%;
    
}
  </style>
</head>
  <body>
  <div class="container-fluid" style="background-color: #000; border-bottom: 1px solid gray;">
    	<div class="container">
    		<?php include 'navbar.php'; ?>
    	</div>
    </div>
     <!--alert messages start-->
     <?php echo $alert; ?>
    <!--alert messages end-->
    <section class = "contact-section" style="padding-top: 100px;">
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>Privacy Policy</h2>
                        <div class = "line">
                          <div></div>
                          <div></div>
                          <div></div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <br><br>
      <div class="container mt-5">
        <p>
            At The Fitness Ave. Gym we respect your privacy. This privacy policy explains how The Fitness Ave. Gym, 
            through its website or app, may collect, use, and share information about you. Since this policy may 
            change over time as we modify or expand our services, we suggest that you check from time to time in 
            order to understand how we treat your personal information. Your use of this website and its services 
            constitute your agreement to The Fitness Ave. Gym using information about you in accordance with this 
            privacy policy.</p>

          <br>
        <section class="faq-">
                        <div class="faq" id="accordion">
                        <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge">1</span> Who We Are 
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>This Site is published and maintained by or on behalf of The Fitness Ave. 
                                            located at FCV Building, J.P Rizal St., Olympia, Makati, Philippines, 1207.
                                            Any questions about your data privacy or this privacy policy, please send us 
                                            an email at thefitnessave@gmail.com.</p>

                                            
                                        <p><strong>Third Party Links</strong>

                                        This website may not include links to third-party websites, plug-ins and applications. 
                                        We do not control these third-party websites and are not responsible for their privacy 
                                        statements. When you leave our website, we encourage you to read the privacy notice of
                                         every website you visit.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <span class="badge">2</span>The Data We Collect About You and How We Collect It
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We collect several different types of personal data from you depending on how you 
                                            interact with our sites. Most of the information we collect is given to us by you 
                                            through filling out forms, registering for an account, or otherwise providing 
                                            information when asked. Occasionally, we do collect information about you without 
                                            you providing it, such as when you participate in a race and we collect your race 
                                            times, etc. Because we may change our website and the services, we offer from time 
                                            to time, the means and methods to provide us with personal data may also change. 
                                            Depending on how you interact with us and use the website, the personal data we collect may vary.
                                            Please read below for the common ways in which we collect your personal data.
                                        <p>
                                   
                                        <p><strong>Creating an Account on the Sites</strong>

                                            You are not required to provide any information to the The Fitness Ave. Gym sites. 
                                            However, if you create an account with The Fitness Ave. Gym, we collect data from 
                                            you in order to associate the account with you. This information includes your 
                                            full name, email address, a password you create, and your date of birth 
                                            (we use your birthdate to make sure you are put into the correct race categories 
                                            and to make sure you are eligible to participate in The Fitness Ave. Gym events) 
                                            (“Account Information”). By default, we’ll only use your personal data to administer 
                                            your account and to provide the products and services you requested from us.
                                        </p>

                                        <p><strong> Filling Out Your Info</strong>

                                            Once you have created an account, you are free to provide other personal information 
                                            about yourself related to your The Fitness Ave. Gym status. This can include uploading
                                            a picture of yourself, including your height, weight, workout benchmarks, athlete bio, 
                                            and other information about yourself (“Personal Bio”). By providing this information 
                                            you are consenting to our processing of it. You may edit, delete, and otherwise change 
                                            this information at any time.
                                        </p>

                                        <p><strong>Making a Purchase</strong>

                                            When you make a purchase on our website or elsewhere, we collect your contact information 
                                            and proof of payment through G-Cash. We use this information to process payment, and for 
                                            legitimate interests like preventing fraud.</p>

                                        <p><strong>Information Collected Automatically From Using Our Site</strong>

                                            As you interact with the The Fitness Ave. Gym sites, we may automatically collect 
                                            information about your equipment, browsing actions and patterns (“Technical Data”).
                                            We collect this technical data by using cookies and other similar technologies. 
                                            Technical data may include your IP address; device identifier data, the type of 
                                            device you use, your operating system and version, the URLs of our web pages that 
                                            you visit, the URLs of referring and exiting pages, the pages you view, the time 
                                            spent on a page, the number of clicks made, the platform type, and generalized, 
                                            non-specific location data. When we collect data that does not identify you as a 
                                            natural person, we are permitted to use and disclose this information for any purpose, 
                                            notwithstanding anything contrary in this notice, except were prohibited by law.
                                        </p>    
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge">3</span>Sensitive Personal Information
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>From time to time, we collect and process sensitive personal information which may include 
                                            racial or ethnic origin, genetic data, biometric data, and data concerning health. 
                                            Other than a few necessary exceptions, you are never required to provide this information, 
                                            but may consent to our processing it. For example, you may provide information about your 
                                            personal fitness (exercise regimen, workout routines, vital sign numbers, etc.) on your 
                                            personal bio page to share that information with other members of the The Fitness Ave. Gym 
                                            community. Whenever the processing of this data is based on consent, you are free to 
                                            withdraw that consent at any time by removing such information or asking us to remove it for you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <span class="badge">4</span> How We Use Your Personal Data
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We will only use your personal data when allowed by law. Generally, we will use your personal 
                                            data: (a)where we need to perform the contract we are about to enter into or have entered 
                                            into with you; (b) where it is necessary for our legitimate interests and your interests 
                                            and fundamental rights do not override those interests; and (c) where we need to comply 
                                            with a legal or regulatory obligation.
                                        </p>

                                        <p><strong>Purposes for Which We Will Use Your Personal Data</strong>

                                            Below is a chart of some of the common ways in which we process your personal data. We have 
                                            identified what our legitimate interests are where appropriate. Note that we may process your
                                            personal data for more than one lawful ground depending on the specific purpose for which we are
                                            using your data. Please contact us if you need details about the specific legal ground, we are 
                                            relying on to process your personal data where more than one ground has been set out in the table 
                                            below.
                                        </p>
                                        <br><br>

                                        <div class="row">
                                            <div class="col-lg-4">
                                            <strong>Purpose/Activity</strong>  
                                            <p>To fulfill a purchase order.</p>
                                            <p>Notifying you about changes to our terms or privacy notice.</p>
                                            <p>To administer and protect our business and this website (including troubleshooting, data analysis, 
                                                testing, system maintenance, support, reporting and hosting of data).
                                            </p>
                                            <p>To provide you with information and marketing communications about our products and services.</p>
                                            <p>To provide you with third party offers that may be relevant to you.</p>
                                            <p>To respond to customer service requests including order status and chat communications.</p>
                                            <p>To enroll you in a race or other event</p>
                                            </div>
                                            <div class="col-lg-4">
                                            <strong>Type of data (varies depending on circumstances)</strong>
                                            <p>Contact Information Billing Information</p>
                                            <p>Contact Information</p>
                                            <p>Contact Information</p>
                                            <p>Contact Information</p>
                                            <p>Contact Information</p>
                                            <p>Contact Information</p>
                                            <p>Contact Information Billing Information Personal Bio Other Information</p>
                                            </div>
                                            <div class="col-lg-4">
                                            <strong>Lawful Basis for Processing Including Basis of Legitimate Interest</strong>
                                            <p>In furtherance of performance of a contract with you.</p>
                                            <p>Necessary to comply with a legal obligation</p>
                                            <p>Necessary for our legitimate interests (for running our business, provision of administration and IT 
                                                services, network security, to prevent fraud and in the context of a business reorganization or group 
                                                restructuring exercise)
                                            </p>
                                            <p>Consent Legitimate interests (in marketing goods or services in personal in which you may have a 
                                                personal interest based on our ongoing business relationship).
                                            </p>
                                            <p>Consent</p>
                                            <p>Legitimate interest (for running our business, provision of administration and IT services, network 
                                                security, to prevent fraud and in the context of a business reorganization or group restructuring 
                                                exercise) Consent
                                            </p>
                                            <p>Performance of a contract Legitimate interest (for running our business, provision of administration 
                                                and IT services, network security, to prevent fraud and in the context of a business reorganization 
                                                or group restructuring exercise)
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-5">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">5</span> Disclosures Of Your Personal Data
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>From time to time, we may need to share your personal data with others.
          
                                        <p><strong>Publicly Available Information</strong>

                                        <p>Some of your data will be shared with the general public, including:<p>
                                            <ul>
                                            <li>if you participate in an event like the The Fitness Ave. Gym Games or the Open, your name, 
                                                event results, performance times, and other information about may be posted publicly
                                            </li>
                                            <li>the information you include in your profile page on the The Fitness Ave. Gym website;</li>
                                            <li>posts, new articles, updates, race results, and other information that we provide to 
                                                the public about our events may include personally identifiable information. For example,
                                                we may report on the winners of a particular event which requires us to identify them 
                                                by name.
                                            </li>
                                            </ul>
                                    
                                        <p><strong>With our Affiliates and Partners—</strong>

                                            When participating in events or activities that we offer along with our partners and/or 
                                            affiliates, you may be asked to share personal information with those affiliates and/or 
                                            partners. For example, some of our certificate courses, events, competitions, seminars,
                                            programs, contests, sweepstakes and other offerings may be co-sponsored by another 
                                            company or companies. In those situations, the information we obtain from you in 
                                            connection with such contest, sweepstake or offering may be shared with our co-sponsor, 
                                            unless you instruct us not to. In some of those cases, we may act as co-controllers 
                                            of your personal information, depending on the circumstances.
                                        </p>
                                        
                                        <p><strong>With Unaffiliated Controllers—</strong>

                                            In some cases we may transfer personal data to unaffiliated third-party data controllers. 
                                            These third parties do not act as agents or service providers and are not performing 
                                            functions on our behalf. We may transfer your personal data to third-party data controllers 
                                            for the following purposes:<br> 1) to provide you with third-party offers;<br> 2) 
                                            to provide us information about the quality of our services offerings. 
                                            We will only provide your personal data to third-party data controllers where you have 
                                            not opted-out of such disclosures, or in the case of sensitive personal data, where you 
                                            have opted in if the disclosure requires consent. We enter into written contracts with 
                                            any unaffiliated third-party data controllers requiring them to provide the same level 
                                            of protection for your personal information that is required of us. We also limit their 
                                            use of your personal data so that it is consistent with any consent you have provided 
                                            and with the notices you have received.
                                        </p>
                                        
                                        <p><strong>Protection of The Fitness Ave. Gym and Others—</strong>

                                            We may share personal data when we believe it is appropriate to enforce or apply our Terms 
                                            of Service and other agreements; or protect the rights, property, or safety of 
                                            The Fitness Ave. Gym, our products and services, our users, or others. This includes 
                                            exchanging information with other companies and organizations for fraud protection and 
                                            risk reduction. This does not include selling, renting, sharing, or otherwise disclosing 
                                            personal data of our customers for commercial purposes in violation of the commitments 
                                            set forth in this notice.
                                        </p>                                        

                                        <p><strong>Response to Subpoenas and Other Legal Requests—</strong>

                                            We may share your information with courts, law enforcement agencies, or other government 
                                            bodies when we have a good faith belief, we’re required or permitted to do so by law, 
                                            including to meet national security or law enforcement requirements, to protect our 
                                            company, or to respond to a court order, subpoena, search warrant, or other law 
                                            enforcement request.
                                        </p>
                                        
                                        <p><strong>Sale of Our Business—</strong>

                                            If we sell, merge, or transfer any part of our business, we may be required to share 
                                            your information. If so, you will be asked if you’d like to stop receiving promotional 
                                            information following any change of control.
                                        </p>
                                        
                                        <p><strong>With Your Consent—</strong>

                                            Other than as set out above, we will provide you with notice and the opportunity to
                                            choose when your personal data may be shared with other third parties.
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-6">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                            <span class="badge">6</span> SMS Messages
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> We may make available a service through which you can receive messages on your wireless 
                                            device via short message service (“SMS Service”). If you subscribe to one of our SMS Services, 
                                            you thereby agree to receive SMS service messages at the address you provide for such purposes. 
                                            Such messages may come from Aces Fitness, the rest of the Aces Fitness family and/or the rest 
                                            of the third parties with which we share your address (unless and until you have elected not 
                                            to receive such messages by following the instructions in the Right to opt In and opt Out section above).
                                            You understand that your wireless carrier’s standard rates apply to these messages, and that 
                                            you may change your mind at any time by following the instructions in the Right to Opt In and 
                                            Opt Out section above. You represent that you are the owner or authorized user of the wireless 
                                            device you use to sign up for the SMS service, and that you are authorized to approve the 
                                            applicable charges. To use the SMS service, you must be 18 years of age or older and reside 
                                            in the United States. You must first register and provide all required Personal Information, 
                                            which may include, for example, your name, SMS address, wireless carrier and, if fees are 
                                            applicable to the SMS Service you subscribe to, billing information (either your credit card 
                                            information or mobile service carrier information if applicable fees will be billed through 
                                            your carrier). We may also obtain the date, time and content of your messages in the course 
                                            of your use of the SMS Service. We will use the information we obtain in connection with our
                                            SMS service in accordance with this Privacy Policy. If fees are charged to your wireless 
                                            account invoice, we may provide your carrier with your applicable information in connection 
                                            therewith. Your wireless carrier and other service providers may also collect data about your
                                             wireless device usage, and their practices are governed by their own policies.
                                            You acknowledge and agree that the SMS service is provided via wireless systems which use radios
                                            (and other means) to transmit communications over complex networks. We do not guarantee that 
                                            your use of the SMS service will be private or secure, and we are not liable to you for any 
                                            lack of privacy or security you may experience. You are fully responsible for taking precautions 
                                            and providing security measures best suited for your situation and intended use of the SMS service. 
                                            We may also access the content of your account and/or wireless account with your carrier for the 
                                            purpose of identifying and resolving technical problems and/or service-related complaints.
                                            By signing up for the SMS service, you consent to receiving, from time to time, further messages 
                                            which may include news, promotions and offers from us, our subsidiaries, entities owned, related 
                                            to or controlled by us and partners, and you consent to our sharing of your personal information 
                                            with such parties for such purposes, unless and until you have opted out of these activities by 
                                            following the instructions in the Right to Opt In and Opt Out section above. Please follow the 
                                            instructions provided to you by third parties to unsubscribe from their messages.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <span class="badge">7</span> Data Security
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We have put in place appropriate security measures to prevent your personal data from being accidentally 
                                            lost, used or accessed in an unauthorized way, altered or disclosed. In addition, we limit access to 
                                            your personal data to those employees, agents, contractors and other third parties who have a business 
                                            need to know. They will only process your personal data on our instructions and they are subject to a 
                                            duty of confidentiality. We have put in place procedures to deal with any suspected personal data 
                                            breach and will notify you and any applicable regulator of a breach where we are legally required to do so.
                                        </p>
          
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-8">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-8" data-aria-expanded="false" data-aria-controls="faqCollapse-8">
                                            <span class="badge">8</span>Data Retention
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> We will only retain your personal data for as long as necessary to fulfil the purposes we collected it for, 
                                            including for the purposes of satisfying any legal, accounting, or reporting requirements. To determine the 
                                            appropriate retention period for personal data, we consider the amount, nature, and sensitivity of the personal 
                                            data, the potential risk of harm from unauthorized use or disclosure of your personal data, the purposes for 
                                            which we process your personal data and whether we can achieve those purposes through other means, and the applicable 
                                            legal requirements. In some circumstances you can ask us to delete your data (see “EU Data Subjects Legal Rights”). 
                                            In some circumstances we may anonymize your personal data (so that it can no longer be associated with you) for 
                                            research or statistical purposes in which case we may use this information indefinitely without further notice to you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-9">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-9" data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                                            <span class="badge">9</span> Data Subjects Privacy Rights
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>EU data subjects have certain rights with respect to your personal data that we collect and process. We respond to all 
                                            requests we receive from individuals in the EEA wishing to exercise their data protection rights in accordance with 
                                            applicable data protection laws.
                                        </p>
                                        <ul>
                                            <li><strong>Access, Correction or Deletion—</strong>You may request access to, correction of, or deletion of your personal 
                                                data. You can often go directly into the service under Account Settings to take these actions. Please note that even if you 
                                                request for your personal data to be deleted, certain aspects may be retained for us to: meet our legal or regulatory 
                                                compliance (e.g. maintaining records of transactions you have made with us); exercise, establish or defend legal claims; 
                                                and to protect against fraudulent or abusive activity on our Service. Data retained for these purposes will be handled as 
                                                described in Section 7 “Data Retention,” above.
                                            </li>
                                            <li><strong>Objection—</strong>You may object to processing of your personal data where we are relying on a legitimate 
                                                interest (or those of a third party) and there is something about your particular situation which makes you want to object 
                                                to processing on this ground as you feel it impacts on your fundamental rights and freedoms. You also have the right to 
                                                object where we are processing your personal data for direct marketing purposes. In some cases, we may demonstrate that 
                                                we have compelling legitimate grounds to process your information which override your rights and freedoms.
                                            </li>
                                            <li><strong>Restriction—</strong>You have the right to ask us to suspend the processing of your personal data in the following 
                                                scenarios: (a) if you want us to establish the data’s accuracy; (b) where our use of the data is unlawful but you do not want
                                                us to erase it; (c) where you need us to hold the data even if we no longer require it as you need it to establish, exercise 
                                                or defend legal claims; or (d) you have objected to our use of your data but we need to verify whether we have overriding 
                                                legitimate grounds to use it.
                                            </li>
                                            <li><strong>Portability—</strong>You have the right to request the transfer of your personal data to you or to a third-party. 
                                                We will provide to you, or a third party you have chosen, your personal data in a structured, commonly used, machine-readable 
                                                format. Note that this right only applies to automated information which you initially provided consent for us to use or where 
                                                we used the information to perform a contract with you.
                                            </li>
                                            <li><strong>Withdraw Consent—</strong>If we have collected and processed your personal data with your consent, you can 
                                                withdraw your consent at any time. Withdrawing your consent will not affect the lawfulness of any processing we conducted 
                                                prior to your withdrawal, nor will it affect processing of your personal data conducted in reliance on lawful processing 
                                                grounds other than consent.
                                            </li>
                                            <li><strong>File a Complaint—</strong>You have the right to file a complaint with a supervisory authority about our collection 
                                                and processing of your personal data.
                                            </li>
                                        </ul>

                                        <p>To file a request or take action on one of your rights, please contact us at the contact details provided. You will 
                                            not have to pay a fee to access your personal data (or to exercise any of the other rights). However, we may charge 
                                            a reasonable fee if your request is clearly unfounded, repetitive or excessive. Alternatively, we may refuse to comply 
                                            with your request in these circumstances.
                                        </p>

                                        <p>We may need to request specific information from you to help us confirm your identity and ensure your right to access 
                                            your personal data (or to exercise any of your other rights). This is a security measure to ensure that personal data 
                                            is not disclosed to any person who has no right to receive it. We may also contact you to ask you for further information 
                                            in relation to your request to speed up our response. We try to respond to all legitimate requests within one month. 
                                            Occasionally it may take us longer than a month if your request is particularly complex or you have made a number of requests. 
                                            In this case, we will notify you and keep you updated.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-10">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="false" data-aria-controls="faqCollapse-10">
                                            <span class="badge">10</span> Children’s Privacy 
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-10" class="collapse" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> We are committed to complying with the Children’s Online Privacy Protection Act (COPPA). The Fitness Ave.
                                            and services are not directed to children under the age of 16. We do not knowingly collect personal 
                                            information from children under the age of 16. If we receive personal information that we discover 
                                            was provided by a child under the age of 16, we will promptly destroy such information. Additional 
                                            information is available on the Direct Marketing Association’s home page at http://www.the-dma.org. 
                                            If you would like to learn more about COPPA, visit the Federal Trade Commission home page at 
                                            http://www.ftc.gov.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-9">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                            <span class="badge">11</span> Updates to Our Privacy Notice
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>By using this website, you agree to the terms and conditions contained in this Privacy Notice and 
                                            Conditions of Use and/or any other agreement that we might have with you. If you do not agree to 
                                            any of these terms and conditions, you should not use this website. You agree that any dispute 
                                            over privacy or the terms contained in this Privacy Notice will be governed by the laws of the 
                                            State of Arizona. You also agree to arbitrate such disputes in Arizona and to abide by any limitation 
                                            on damages contained in any agreement we may have with you. This notice is expected to change from 
                                            time to time. We reserve the right to amend this Notice at any time and provide notice to you by 
                                            posting of the amended Privacy Notice on the website. We may also email you to give you notice of 
                                            material changes to this Notice. The provisions contained herein supersede all previous notices or 
                                            statements regarding our privacy practices and the terms and conditions that govern the use of this
                                            website.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-12">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                            <span class="badge">12</span> How to Contact Us
                                        </h5>
                                    </div>
                                </div>
                                <div  class="collapse" id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>If you have any questions or wish to register a complaint in relation to this Privacy Notice or the manner 
                                            in which your personal data is used by us, please contact us by any of the following means:
                                        <p>Email: fitnessave@gmail.com</p>
                                        <p>Facebook Page: https://www.facebook.com/TheFitnessAveMakati</p>
                                        <p>Contact Number: 0915 944 0058</p>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <br>
                        <br>
                </section>
      </div>

   <?php include 'footer1.php'?>
    <!-- Footer Section End --> 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="dist/js/fontawesome.js"></script>
  
    <style>
.faq-section {
    background: #fdfdfd;
    min-height: 10vh;
    padding: 10vh 0 0;
}
.faq-title h2 {
  position: relative;
  margin-bottom: 45px;
  display: inline-block;
  font-weight: 600;
  line-height: 1;
}
.faq-title h2::before {
    content: "";
    position: absolute;
    left: 50%;
    width: 60px;
    height: 2px;
    background: #E91E63;
    bottom: -25px;
    margin-left: -30px;
}
.faq-title p {
  padding: 0 190px;
  margin-bottom: 10px;
}

.faq {
  background: #FFFFFF;
  box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
  border-radius: 4px;
}

.faq .card {
  border: none;
  background: none;
  border-bottom: 1px dashed #CEE1F8;
}

.faq .card .card-header {
  padding: 0px;
  border-bottom: 1px solid;
  background: none;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.faq .card .card-header:hover {
    background: rgba(233, 30, 99, 0.1);
    padding-left: 10px;
}
.faq .card .card-header .faq-title {
  width: 100%;
  text-align: left;
  padding: 0px;
  padding-left: 30px;
  padding-right: 30px;
  font-weight: 400;
  font-size: 15px;
  letter-spacing: 1px;
  color: #3B566E;
  text-decoration: none !important;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  cursor: pointer;
  padding-top: 20px;
  padding-bottom: 20px;
}

.faq .card .card-header .faq-title .badge {
  display: inline-block;
  width: 20px;
  height: 20px;
  line-height: 14px;
  float: left;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  text-align: center;
  background: #E91E63;
  color: #fff;
  font-size: 12px;
  margin-right: 20px;
}

.faq .card .card-body {
  padding: 30px;
  padding-left: 35px;
  padding-bottom: 16px;
  font-weight: 400;
  font-size: 16px;
  color: black;
  line-height: 28px;
  letter-spacing: 1px;
  border-top: 1px solid #F3F8FF;
}

.faq .card .card-body p {
  margin-bottom: 14px;
}

@media (max-width: 991px) {
  .faq {
    margin-bottom: 30px;
  }
  .faq .card .card-header .faq-title {
    line-height: 26px;
    margin-top: 10px;
  }
}
.contact-bg{
    height: 60vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url(images/loginbg.jpg);
    background-position: 50% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    text-align: center;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.contact-bg h3{
    font-size: 1.3rem;
    font-weight: 400;
}
.contact-bg h2{
    font-size: 3rem;
    text-transform: uppercase;
    padding: 0.4rem 0;
    letter-spacing: 4px;
}
.line div{
    margin: 0 0.2rem;
}
.line div:nth-child(1),
.line div:nth-child(3){
    height: 3px;
    width: 70px;
    background: gold;
    border-radius: 5px;
}
.line{
    display: flex;
    align-items: center;
}
.line div:nth-child(2){
    width: 20px;
    height: 20px;
    background: black;
    border-radius: 50%;
}
.text{
    font-weight: 300;
    opacity: 0.9;
    margin-top: 30px;
}
.contact-bg .text{
    margin: 1.6rem 0;
}
.contact-body{
    max-width: 1320px;
    margin: 0 auto;
    padding: 0 1rem;
}
.contact-info{
    margin: 2rem 0;
    text-align: center;
    padding: 2rem 0;
}
.contact-info span{
    display: block;
}
.contact-info div{
    margin: 0.8rem 0;
    padding: 1rem;
}
.contact-info span .fa{
    font-size: 2rem;
    padding-bottom: 0.9rem;
    color: black;
}
.contact-info div span:nth-child(2){
    font-weight: 500;
    font-size: 1.1rem;
}
.contact-info .text{
    padding-top: 0.1rem;
}
.contact-form{
    padding: 2rem 0;
    border-top: 1px solid #c7c7c7;
}
.contact-form form{
    padding-bottom: 1rem;
}
.send-btn{
    font-family: 'Open Sans', sans-serif;
    font-size: 1rem;
    text-transform: uppercase;
    color: #fff;
    background: #3C8DBC;
    border: none;
    border-radius: 5px;
    padding: 0.7rem 1.5rem;
    cursor: pointer;
    transition: all 0.4s ease;
    margin-left: 240px;
    margin-top: 165px;
    width: 250px;
    height: 60px; 
}
.send-btn:hover{
    opacity: 0.8;
}
.contact-form > div img{
    width: 85%;
}
.contact-form > div{
    margin: 0 auto;
    text-align: center;
}
.contact-footer{
    padding: 2rem 0;
    background: #000;
}
.contact-footer h3{
    font-size: 1.3rem;
    color: #fff;
    margin-bottom: 1rem;
    text-align: center;
}
.social-links{
    display: flex;
    justify-content: center;
}
.social-links a{
    text-decoration: none;
    width: 40px;
    height: 40px;
    color: #fff;
    border: 2px solid #fff;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0.4rem;
    transition: all 0.4s ease;
}
.social-links a:hover{
    color: #f7327a;
    border-color: #f7327a;
}

@media screen and (min-width: 768px){
    .contact-bg .text{
        width: 70%;
        margin-left: auto;
        margin-right: auto;
    }
    .contact-info{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
}

@media screen and (min-width: 992px){
    .contact-bg .text{
        width: 50%;
    }
    .contact-form{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
    }
}

@media screen and (min-width: 1200px){
    .contact-info{
        grid-template-columns: repeat(4, 1fr);
    }
}

    </style>
    
  </body>
</html>
<?php } } $datarun = new data(); $datarun->managdata(); ?>