<!doctype html>
<html class="no-js " lang="en"> 
<head>

    <title>Success Academy | TNPSC | TNUSRB | Pudupalayam | Tiruvannamalai.</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <?php include 'include/header.php';?>
    
</head>
<body>  
    <div id="wrapper">
    
        <header class="header header-normal">
            <?php include 'include/navbar.php';?>
        </header>
        <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Railway Recruitment Board</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Success</a></li>
                                <li class="active">RRB</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="tabs">
                  <ul class="tabs-nav">
                    <li><a href="#tab-1">NTPC</a></li>
                    <li><a href="#tab-2">JE</a></li>
                    <li><a href="#tab-3">ALP</a></li>
                    <li><a href="#tab-4">Group D</a></li>
                  </ul>
                <div class="tabs-stage">
                    <div id="tab-1">
                        <p><strong>Post: </strong>Non-Technical Popular Categories (NTPC)</p>
                        <p><strong>Age: </strong>The age limit for undergraduate post is 18 to 30 years. The age limit for graduate post is 18 to 33 years.</p>
                        <p><strong>Educational Qualification</strong>: For undergraduate post, candidates must have passed Class 12th<br>For graduate post, candidates must have passed graduation.</p>
                    </div>
                    <div id="tab-2">
                        <p><strong>Post: </strong>Junior Engineer (JE)</p>
                        <p><strong>Age: </strong>18 to 33 years</p>
                        <p><strong>Educational Qualification</strong>:</p>
                        <ul>
                            <li><strong>JE: </strong> An applicant must have three years Diploma in Civil Engineering/Mechanical/ Production/ Automobile / Electrical/ Electronics/ Instrumentation & Control Engineering/ Control/ Tools & Machining/ Tools & Die Making/ Computer Science/ Computer Engineering or B.Sc in Civil Engineering from a Recognized University/Institute.</li>
                            <li><strong>DMS: </strong> Applicants need to complete a three-year Diploma in Engineering from any govt. recognized university or equivalent.</li>
                            <li><strong>JE (IT): </strong> Candidates must have PGDCA / B.Sc. (Computer Science)/ BCA/ B.Tech. (Information Technology)/ B.Tech. (Computer Science)/ DOEACC ‘B’ level course of three years duration or equivalent.</li>
                            <li><strong>CMA: </strong> Degree in Science with Physics and Chemistry with minimum 55% marks.</li>
                        </ul>
                        
                    </div>
                    <div id="tab-3">
                        <p><strong>Post</strong>Assistant Loco Pilot (ALP)</p>
                        <p><strong>Age:</strong>18 to 28 years.</p>
                        <p><strong>Educational Qualification</strong>:</p>
                        <ul>
                            <li><strong>ALP: </strong> Must have passed Class 10th/SSLC & ITI/Course Completed Act Apprentices or Diploma/Degree in Engineering.</li>
                            <li><strong>Technician: </strong> Completed Class 10th/SSLC plus ITI/ Course Completed Act Apprentices or 10+2 with Physics and Maths or Diploma in Engineering.</li>
                        </ul>
                    </div>
                    <div id="tab-4">
                        <p><strong>Post: </strong>Group D Exam/RRC Level 1</p>
                        <p><strong>Age: </strong>18 to 33 years</p>
                        <p><strong>Educational Qualification</strong>: Passed Class 10th from Institution recognized by NCVT/SCVT or equivalent or National Apprenticeship Certificate (NAC) granted by NCVT</p>
                    </div>
                  </div>
            </div>
        </div>
        </section>

        <section class="section bgcolor1">
            <div class="container text-center">
                <h3 style="color: #fff;">Admission for 2021</h3>
                            <p style="color: #fff;padding: 3% 10%;">The Success Academy has built reputation as one of the premiere coaching institute in Tiruvannamalai by imparting coaching of high standards. Success Academy has a highly effective and proven training methodology which helps its students’ achieve success.Our simple, practical and focused approach will help aspirants understand the demand of TNUSRB and TNPSC exam effectively. Our strategy is to constantly innovate to keep the preparation process dynamic and give personalized attention to individual aspirants.</p>
                            <div class="text-center"><a href="admission.php" class="btn wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;color: #fff;text-decoration: underline;">Apply now</a>
                            </div>
            </div> 
        </section>

        <?php include 'include/quick_links.php';?>
    </div><!-- end wrapper -->

    <?php include 'include/footer.php';?>
    <script>
        $('.tabs-stage div').hide();
$('.tabs-stage div:first').show();
$('.tabs-nav li:first').addClass('tab-active');

// Change tab class and display content
$('.tabs-nav a').on('click', function(event){
  event.preventDefault();
  $('.tabs-nav li').removeClass('tab-active');
  $(this).parent().addClass('tab-active');
  $('.tabs-stage div').hide();
  $($(this).attr('href')).show();
});
    </script>

</body>
</html>