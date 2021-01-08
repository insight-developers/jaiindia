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
                            <h3>Tamil Nadu Teachers Eligibility Test</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Success</a></li>
                                <li class="active">TNTET</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                      <p><strong>Post: </strong>Tamil Nadu Teachers Eligibility Test</p>
                        <p><strong>Age: </strong>Candidates between 18 and 40 years of age are eligible to apply. Reserved and special category candidates will enjoy age relaxation as per government rules.</p>
                        <p><strong>Educational Qualification:</strong><br>
                        <p><strong>Paper I: </strong><br>
                        <ul>
                            <li>Higher Secondary or its equivalent with at least 50% marks and passed or appearing in final year of 2-year Diploma in Elementary Education (by whatever name known), or</li>
                            <li>Higher Secondary or its equivalent with at least 45% marks and passed or appearing in final year of 2-year Diploma in Elementary Education, or</li>
                            <li>Higher Secondary or its equivalent with at least 50% marks and passed or appearing in final year of 4-year Bachelor in Elementary Education (B.El.Ed.), or</li>
                            <li>Graduation and passed or appearing in final year of 2-year Diploma in Elementary Education, or</li>
                            <li>Graduation with atleast 50% marks and passed or appearing in final year of Bachelor of Education (B.Ed.)</li>
                        </ul>
                        </p>
                        <p><strong>Paper II: </strong><br>
                        <ul>
                            <li>Graduation with at least 50% marks and passed or appearing in final year of Bachelor in Education (B.Ed.), or</li>
                            <li>Graduation with at least 45% marks and passed or appearing in final year of Bachelor in Education (B.Ed.), or</li>
                            <li>Graduation with at least 50% marks and passed or appearing in final year of B.Ed. (Special Education)</li>
                        </ul>
                        <p><strong>Note: </strong>Based on the performance in the written exam, the candidates will be given a TET certificate. The validity of the certificate is seven years.</p>
                        </p>
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

        <section class="section gb nopadtop">
            <div class="container">

                <hr class="invis">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box text-center">
                            <img src="https://www.jobriya.in/wp-content/uploads/2019/03/TNUSRB-300x300.png" class="psc_usrb">
                            <h4>TNUSRB</h4>
                            <p>TNUSRB is entrusted with the responsibility of recruiting personnel to the Police Department, Fire and Rescue Services Department and Prison Department. Success academy has been conducting classes for TNUSRB since 2015.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box text-center">
                            <img src="https://www.tnpsc.gov.in/English/images/TNPSC-logo.jpg" class="psc_usrb">
                            <h4>TNPSC</h4>
                            <p>TNPSC conducts multiple competitive exams on a regular basis to recruit personnel for different levels of administrative services. Success academy has been conducting TNPSC Group I,Group II and Group IV classes since 2015.</p>
                            <a href="#" class="readmore">Read more</a>
                        </div>
                    </div>
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