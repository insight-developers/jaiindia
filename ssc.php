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
                            <h3>STAFF SELECTION COMMISSION</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Success</a></li>
                                <li class="active">SSC</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <a href="https://ssc.nic.in/">
                <img src="images/ssc.png" alt="tnforest logo" style="width: 150px;height: 150px;object-fit:contain;margin-bottom: 2%"></a>
                <p><strong>VISION OF THE DEPARTMENT</strong><br><br>
                The Twelfth Five Year Plan for the State of Tamil Nadu encompasses preservation of entire ecological footprint of human activity and includes increasing the forest cover, protection of wetlands, conserving groundwater, rivers and other water bodies, protection of the coastal zones including fragile ecosystems, conservation of the zoological and botanical diversity of the State. The initiatives of the Department are in line with the Late Hon’ble Chief Minister’s Vision Tamil Nadu  2023 to maintain the ecological balance across the State.</p><br>
                <p><strong>SSC CGL</strong></p>
                <ul>
                    <li>Assistant Audit Officer</li>
                    <li>Assistant Accounts Officer</li>
                    <li>Assistant Section Officer</li>
                    <li>Inspector of Income Tax</li>
                    <li>Assistant Superintendent</li>
                    <li>Divisional Accountant</li>
                    <li>Junior Statistical Officer</li>
                    <li>Auditor</li>
                    <li>Tax Assistant</li>
                    <li>Upper Divisions Clerk, etc.</li>
                </ul>
                <p><strong>SSC CHSL</strong></p>
                <ul>
                    <li>Lower Divisional Clerk (LDC)</li>
                    <li>Junior Secretariat Assistant (JSA)</li>
                    <li>Postal Assistant (PA)</li>
                    <li>Sorting Assistant (SA)</li>
                    <li>Data Entry Operator (DEO)</li>
                    <li>DEO (Grade A)</li>
                </ul>
                <p><strong>SSC JE</strong></p>
                <ul>
                    <li>Civil Junior Engineer</li>
                    <li>Electrical Junior Engineer</li>
                    <li>Mechanical Junior Engineer</li>
                    <li>Surveying and Contract Junior Engineer</li>
                </ul>
                <p><strong>SSC GD</strong></p>
                <ul>
                    <li>Constable (General Duty)</li>
                </ul>
                <p><strong>SSC CPO</strong></p>
                <ul>
                    <li>Sub-Inspector and Assistant Sub-Inspector</li>
                </ul>
                <p><strong>SSC JHT</strong></p>
                <ul>
                    <li>Junior Translator</li>
                    <li>Senior Hindi Translator</li>
                    <li>Junior Hindi Translator </li>
                    <li>Hindi Pradhyapak</li>
                </ul>
                <p><strong>SSC Stenographer</strong></p>
                <ul>
                    <li>Stenographer Grade-C (Group B-Non-Gazetted) and Stenographer Grade-D (Group-C)</li>
                </ul>
                <p><strong>SSC MTS</strong></p>
                <ul>
                    <li>Multi-tasking staff</li>
                </ul>
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