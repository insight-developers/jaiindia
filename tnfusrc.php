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
                            <h3>TAMIL NADU FOREST UNIFORMED SERVICES RECRUITMENT COMMITTEE</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Success</a></li>
                                <li class="active">TNFUSRC</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <a href="https://www.forests.tn.gov.in/pages/view/Recruitments_and_Notifications">
                <img src="images/tnforest.png" alt="tnforest logo" style="width: 100%;height: 150px"></a>
                <p><strong>VISION OF THE DEPARTMENT</strong><br><br>
The Twelfth Five Year Plan for the State of Tamil Nadu encompasses preservation of entire ecological footprint of human activity and includes increasing the forest cover, protection of wetlands, conserving groundwater, rivers and other water bodies, protection of the coastal zones including fragile ecosystems, conservation of the zoological and botanical diversity of the State. The initiatives of the Department are in line with the Late Hon’ble Chief Minister’s Vision Tamil Nadu  2023 to maintain the ecological balance across the State.</p><br>
                      <p><strong>Posts:</strong></p>
                      <ul>
                        <li>Forester</li>
                        <li>Forest Guard, Forest Guard with driving license</li>
                    </ul>
                    <p><strong>Eligibility Criteria</strong>:</p>
                        <p><strong>Forester:</strong> Bachelor’s Degree in Science or Engineering from any of the University recognized by UGC (University Grants Commission).<br>
                        Require educational qualification in the order of studies SSLC + HSC /Equivalent +  Degree.</p>
                        <p><strong>Forest Guard:</strong> Candidate should have passed HSC with Physics, Chemistry, Biology, Zoology or Botany as one of the subject.</p>
                        <table style="width:100%" class="eligibility_table">
                              <caption><strong>Age</strong></caption>
                              <tr>
                                <th rowspan="2">Post</th>
                                <th rowspan="2">Minimum Age</th>
                                <th colspan="2">Maximum Age</th>
                              </tr>
                              <tr>
                                <td>SC,SCA, MBC/BC,BCM,Destitute women of all castes</td>
                                <td>Forward caste</td>
                              </tr>
                              <tr>
                                <td>Forester</td>
                                <td>21 Years</td>
                                <td>35 Years</td>
                                <td>30 Years</td>
                              </tr>
                              <tr>
                                <td>Forest Guard</td>
                                <td>21 Years</td>
                                <td>35 Years</td>
                                <td>30 Years</td>
                              </tr>
                            </table>
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