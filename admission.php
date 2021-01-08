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
                            <h3>Admission</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Success</a></li>
                                <li class="active">Admission</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <section class="gallery">
            <div class="container">
                <!-- <h2>Written Test</h2> -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3" style="margin-bottom: 3%">
                            <div class="section-title text-center contact-form">
                                <h3>Admission form</h3>
                                <p>Submit the form to register with us</p>
                            </div><!-- end title -->
                            
                            <form class="big-contact-form" role="search" id="admission_form">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name.." required>
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email.." required>
                                <label>Phone number</label> required
                                <input type="text" name="phone" class="form-control" placeholder="Your phone..">
                                <label for="course">Select your course</label><br>
                                <select name="course" id="courses" class="form-control" required>
                                  <option value="TNPSC">TNPSC</option>
                                  <option value="TNUSRB">TNUSRB</option>
                                  <option value="TNFUSRC">TNFUSRC</option>
                                  <option value="TNTET">TNTET</option>
                                  <option value="RRB">RRB</option>
                                  <option value="SSC">SSC</option>
                                </select>
                                <label>Message(optional)</label>
                                <textarea class="form-control" placeholder="Message goes here.." name="message"></textarea>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                </div>
            </div>
        </section>

        <?php include 'include/quick_links.php';?>
    </div><!-- end wrapper -->

   <?php include 'include/footer.php';?>
   <script src="https://static.formx.stream/tracker/v1/bundle.js"></script>
    <script>
    var formx = FormX.set()
    formx.trackProject('Success Academy_b2cf9a66-da7a-4891-ac61-d7a466e14bda')
    formx.trackForm('admission_877efb3b-ac5e-41a6-8d2d-a855cf468a36', 'admission_form')
    formx.start()
    </script>
</body>
</html>