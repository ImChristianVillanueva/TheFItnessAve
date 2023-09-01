<?php 
session_start();
    include 'config/config.php';
    class data extends Connection{ public function managdata(){
?>
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
  < <style>
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
    margin-top: -100px;
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
    
      <br><br>
     <!--alert messages start-->
     <?php echo $alert; ?>
    <!--alert messages end-->
    <section class = "contact-section" style="padding-top: 100px;">
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>Terms and Services</h2>
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
      <div class="container mt-5">
        <p>This website is operated by the owner of The Fitness Ave. Gym. 
            Throughout the site, the terms “we”, “us” and “our” refer to 
            The Fitness Ave. Gym. The Fitness Ave. Gym offers this website, 
            including all information, tools and services available from 
            this site to you, the user, conditioned upon your acceptance 
            of all terms, conditions, policies and notices stated here.</p>

        <p>By visiting our site and/ or purchasing something from us, 
            you engage in our “Service” and agree to be bound by the 
            following terms and conditions (“Terms of Service”, “Terms”), 
            including those additional terms and conditions and policies 
            referenced herein and/or available by hyperlink. These Terms 
            of Service apply to all users of the site, including without 
            limitation users who are browsers, vendors, customers and merchants.</p>

        <p>Please read these Terms of Service carefully before accessing 
            or using our website. By accessing or using any part of the 
            site, you agree to be bound by these Terms of Service. If you
            do not agree to all the terms and conditions of this agreement, 
            then you may not access the website or use any services. 
            If these Terms of Service are considered an offer, acceptance 
            is expressly limited to these Terms of Service.</p>

        <p>Any new features or tools which are added to the current store 
            shall also be subject to the Terms of Service. You can review 
            the most current version of the Terms of Service at any time 
            on this page. We reserve the right to update, change or 
            replace any part of these Terms of Service by posting updates 
            and/or changes to our website. It is your responsibility to 
            check this page periodically for changes. Your continued use 
            of or access to the website following the posting of any changes 
            constitutes acceptance of those changes.</p>

        <br>
        <section class="faq-">
                        <div class="faq" id="accordion">
                        <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge">1</span>Eligibility 
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>This is a contract between you and The Fitness Ave. Gym . You must read and agree to these terms 
                                            before using the Service. If you do not agree, you may not use the Service. You may use 
                                            the Service only if you can form a binding contract with The Fitness Ave. Gym , and only in 
                                            compliance with this Agreement and all applicable local, state, national, and international
                                            laws, rules and regulations. Any use or access to the Service by anyone under 13 is strictly
                                            prohibited and in violation of this Agreement. Any use of or access to the Service by 
                                            anyone under 18 is only permitted with the express written permission of such individual’s 
                                            legal guardian, and, if necessary, you represent and warrant that you have received such 
                                            permission. The Service is not designed for use by or in connection with anyone under the 
                                            age of 18, and you accept all responsibility that may arise from your use of the Service
                                            in connection with any minors. The Service is not available to any Users previously 
                                            removed from the Service by The Fitness Ave. Gym.</p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <span class="badge">2</span>The Fitness Ave. Gym Service
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Subject to the terms and conditions of this Agreement, you are hereby granted a non-exclusive, 
                                            limited, non-transferable, freely revocable license to use the Service solely as permitted by 
                                            the features of the Service, which may vary by User. We reserve all rights not expressly 
                                            granted herein in the Service and the Aces Fitness Content (as defined below). We may terminate 
                                            this license or your access to the Service at any time for any reason or no reason. 
                                            Your The Fitness Ave. Gym account gives you access to the services and functionality that 
                                            we may establish and maintain from time to time and in our sole discretion. 
                                            We may maintain different types of accounts for different types of Users. If you open an 
                                            The Fitness Ave. Gym  account on behalf of a company, organization, or other entity, 
                                            then (a) “you” includes you and that entity, and (b) you represent and warrant that you 
                                            are an authorized representative of the entity with the authority to bind the entity to 
                                            this Agreement, and that you agree to this Agreement on the entity’s behalf.
                                            By connecting to Aces Fitness with a third-party service, you give us permission
                                            to access and use your information from that service as permitted by that service, 
                                            and to store your log-in credentials for that service. <br><br>

                                            You acknowledge and agree that if you are opening an account or otherwise using the 
                                            Service as or on behalf of an employer company, organization or other entity, your 
                                            employees who open employee accounts must and do separately agree to be bound by this Agreement.<p>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge">3</span>Service Rules and Restrictions 
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>You agree not to engage in any of the following prohibited activities: <br>(i) copying, distributing, 
                                            or disclosing any part of the Service in any medium, including without limitation by any 
                                            automated or non-automated “scraping”;<br> (ii) using any automated system, including without limitation
                                            “robots,” “spiders,” “offline readers,” etc., to access the Service in a manner that sends more 
                                            request messages The Fitness Ave. Gym servers than a human can reasonably produce in the same period of 
                                            time by using a conventional on-line web browser (except that The Fitness Ave. Gym grants the operators 
                                            of public search engines revocable permission to use spiders to copy publicly available materials 
                                            from thefitnessave.com for the sole purpose of and solely to the extent necessary for creating publicly 
                                            available searchable indices of the materials, but not caches or archives of such materials); 
                                            <br>(iii) uploading, posting, hosting, or transmitting spam, chain letters, SMSs or other unsolicited 
                                            email or messages; <br>(iv) attempting to interfere with, compromise the system integrity or security 
                                            or decipher any transmissions to or from the servers running the Service;<br> (v) taking any action 
                                            that imposes, or may impose at our sole discretion an unreasonable or disproportionately large load 
                                            on our infrastructure;<br> (vi) uploading invalid data, viruses, worms, or other software agents or any 
                                            code of a destructive nature through the Service; <br>(vii) collecting or harvesting any personally 
                                            identifiable information, including account names, from the Service;<br> (viii) using the Service for 
                                            any commercial solicitation purposes;<br> (ix) impersonating another person or otherwise misrepresenting 
                                            your affiliation with a person or entity, conducting fraud, hiding or attempting to hide your identity; 
                                            <br>(x) interfering with the proper working of the Service; <br>(xi) accessing any content on the Service through 
                                            any technology or means other than those provided or authorized by the Service; <br>(xii) bypassing the 
                                            measures we may use to prevent or restrict access to the Service, including without limitation 
                                            features that prevent or restrict use or copying of any content or enforce limitations on use of the S
                                            ervice or the content therein; <br>(xiii) verbally, physically or other abuse 
                                            (including threats of abuse or retribution) of any other User or any The Fitness Ave. Gym customer,
                                            employee, member, or officer; <br>(xiv) reproducing, duplicating, copying, selling, reselling or otherwise 
                                            exploiting any portion of the Service, use of the Service, or access to the Service without the express 
                                            written permission by The Fitness Ave. Gym or <br>(xv) modifying, adapting or hacking the Service or modifying another 
                                            website so as to falsely imply that it is associated with the Service, The Fitness Ave. Gym, or any other 
                                            The Fitness Ave. Gym service.</p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <span class="badge">4</span> User Content 
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Some areas of the Service allow Users to post or provide content such as profile information, images, comments, questions, and other content or information (any such materials a User submits, posts, displays, or otherwise makes available on the Service is referred to as “User Content”). We claim no ownership rights over User Content created by you. The User Content you create remains yours; however, by providing or sharing User Content through the Service, you agree to allow others to view, edit, and/or share your User Content in accordance with your settings and this Agreement. Aces Fitness has the right (but not the obligation) in its sole discretion to remove any User Content that is shared via the Service. The User Content may be viewed or shared with others in accordance with your profile settings and the Privacy Policy</p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-5">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">5</span> No Professional Advice
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>If the Service provides professional information (for example, medical, legal, or financial), such information is for informational purposes only and should not be construed as professional advice. No action should be taken based upon any information contained in the Service. You should seek independent professional advice from a person who is licensed and/or qualified in the applicable area.</p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-6">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                            <span class="badge">6</span> Text Messaging and Consent
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>The Fitness Ave. Gym makes it easy for you to add employees to your The Fitness Ave. Gym account so that you can manage your schedule and exchange messages with each other. YOU REPRESENT AND WARRANT TO US THAT EACH PERSON YOU ADD TO YOUR THE FITNESS AVE. GYM ACCOUNT HAS CONSENTED TO BE ADDED TO THE ACCOUNT AND TO RECEIVE ADMINISTRATIVE MESSAGES FROM  THE FITNESS AVE. GYM AND TEXT MESSAGES FROM YOU AND ANYONE ELSE ASSOCIATED WITH THE ACCOUNT. You represent and warrant that all communications you cause to be sent through the Service shall at all times comply with all applicable state and federal laws and regulations, including, but not limited to, the Telephone Consumer Protection Act, the Telemarketing Sales Rule, the CAN-SPAM Act, and all other laws and regulations concerning privacy, telemarketing, and the sending of SMS text messages. As part of the Service,  The Fitness Ave. Gym sometimes causes administrative messages to be sent to users, including both employers and employees. For example, upon adding a new employee to an employer’s Aces Fitness account, the new employee will receive a welcome message, instructions on how to register for the Service, and a link with more information about the service.  The Fitness Ave. Gym may send other administrative messages as well. BY SIGNING UP FOR THE FITNESS AVE. GYM, YOU AGREE TO RECEIVE TEXT MESSAGES FROM US.</p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <span class="badge">7</span> Security
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>The Fitness Ave. Gym utilizes physical, managerial, and technical safeguards to preserve the integrity and security of your personal information and implement your privacy settings. However, we cannot guarantee that unauthorized third parties will never be able to defeat our security measures or use your personal information for improper purposes. You acknowledge that you provide your personal information at your own risk. </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-8">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-8" data-aria-expanded="false" data-aria-controls="faqCollapse-8">
                                            <span class="badge">8</span> Indemnity
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>You agree to defend, indemnify and hold harmless The Fitness Ave. Gym and its subsidiaries, agents, licensors, managers, and other affiliated companies, and their employees, contractors, agents, officers and directors, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney’s fees) arising from: (i) your use of and access to the Service, including any data or content transmitted or received by you; (ii) your violation of any term of this Agreement, including without limitation your breach of any of the representations and warranties above; (iii) your violation of any third-party right, including without limitation any right of privacy or Intellectual Property Rights; (iv) your violation of any applicable law, rule or regulation; (v) User Content or any content that is submitted via your account including without limitation misleading, false, or inaccurate information; (vi) your gross negligence or willful misconduct; or (vii) any other party’s access and use of the Service (or access and use of any third-party service via the Service) with your unique username, password or other appropriate security code. </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-9">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-9" data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                                            <span class="badge">9</span> No Warranty
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>The service is provided on an “as is” and “as available” basis. Use of the service is at your own risk. To the maximum extent permitted by applicable law, the service is provided without warranties of any kind, whether express or implied, including, but not limited to, implied warranties of merchantability, fitness for a particular purpose, or noninfringement. No advice or information, whether oral or written, obtained by you from The fitness ave. gym or through the service will create any warranty not expressly stated herein. Without limiting the foregoing, the fitness ave. gym, its subsidiaries, its affiliates, and its licensors do not warrant that the content is accurate, reliable or correct; that the service will meet your requirements; that the service will be available at any particular time or location, uninterrupted or secure; that any defects or errors will be corrected; or that the service is free of viruses or other harmful components. Any content downloaded or otherwise obtained through the use of the service is downloaded at your own risk and you will be solely responsible for any damage to your computer system or mobile device or loss of data that results from such download or your use of the service. The fitness ave. gym does not warrant, endorse, guarantee, or assume responsibility for any product or service advertised or offered by a third party through the service or any hyperlinked website or service, and the fitness ave. will not be a party to or in any way monitor any transaction between you and third-party providers of products or services. Federal law, some states, provinces and other jurisdictions do not allow the exclusion and limitations of certain implied warranties, so the above exclusions may not apply to you. This agreement gives you specific legal rights, and you may also have other rights which vary from state to state. The disclaimers and exclusions under this agreement will not apply to the extent prohibited by applicable law. </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-10">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="false" data-aria-controls="faqCollapse-10">
                                            <span class="badge">10</span> Limitation of Liability 
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-10" class="collapse" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>To the maximum extent permitted by applicable law, in no event shall the fitness ave. gym, its affiliates, agents, directors, employees, suppliers or licensors be liable for any indirect, punitive, incidental, special, consequential or exemplary damages, including without limitation damages for loss of profits, goodwill, use, data or other intangible losses, arising out of or relating to the use of, or inability to use, this service. Under no circumstances will the fitness ave. gym be responsible for any damage, loss or injury resulting from hacking, tampering or other unauthorized access or use of the service or your account or the information contained therein. To the maximum extent permitted by applicable law, the fitness ave. gym assumes no liability or responsibility for any (i) errors, mistakes, or inaccuracies of content or the service; (ii) personal injury or property damage, of any nature whatsoever, resulting from your access to or use of our service; (iii) any unauthorized access to or use of our secure servers and/or any and all personal information stored therein; (iv) any interruption or cessation of transmission to or from the service; (v) any bugs, viruses, trojan horses, or the like that may be transmitted to or through our service by any third party; (vi) any errors or omissions in any content or for any loss or damage incurred as a result of the use of any content posted, emailed, transmitted, or otherwise made available through the service; and/or (vii) user content or the defamatory, offensive, or illegal conduct of any third party. In no event shall Aces fitness, its affiliates, agents, directors, employees, suppliers, or licensors be liable to you for any claims, proceedings, liabilities, obligations, damages, losses or costs in an amount exceeding the amount you paid to The fitness ave. gym hereunder. This limitation of liability section applies whether the alleged liability is based on contract, tort, negligence, strict liability, or any other basis, even if the fitness ave. gym has been advised of the possibility of such damage. The foregoing limitation of liability shall apply to the fullest extent permitted by law in the applicable jurisdiction. Some states do not allow the exclusion or limitation of incidental or consequential damages, so the above limitations or exclusions may not apply to you. This agreement gives you specific legal rights, and you may also have other rights which vary from state to state. The disclaimers, exclusions, and limitations of liability under this agreement will not apply to the extent prohibited by applicable law. </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-9">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                            <span class="badge">11</span> Assignment
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>This Agreement, and any rights and granted, may not be transferred or assigned by you, but may be assigned by The Fitness Ave. Gym without restriction. Any attempted transfer or assignment in violation hereof shall be null and void. <p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-12">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                            <span class="badge">12</span> Entire Agreement/Severability
                                        </h5>
                                    </div>
                                </div>
                                <div  class="collapse" id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>This Agreement, together with any amendments and any additional agreements you may enter into with The Fitness Ave. Gym in connection with the Service, shall constitute the entire agreement between you and The Fitness Ave. Gym concerning the Service. If any provision of this Agreement is deemed invalid by a court of competent jurisdiction, the invalidity of such provision shall not affect the validity of the remaining provisions of this Agreement, which shall remain in full force and effect, except that in the event of unenforceability of the universal Class Action/Jury Trial Waiver, the entire arbitration agreement shall be unenforceable. </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header" id="faqHeading-13">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                            <span class="badge">13</span>  No Waiver
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> No waiver of any term of this Agreement shall be deemed a further or continuing waiver of such term or any other term, and The Fitness Ave. Gym failure to assert any right or provision under this Agreement shall not constitute a waiver of such right or provision.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                </section>
      </div>

      <br><br><br><br><br><br>
      <?php include 'footer1.php' ?>
   
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