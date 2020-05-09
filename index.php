<?php
// include("utilities/config.php");
session_start();
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for Image Slider-->
  <link href="css/image-slider.css" rel="stylesheet">

  <!-- Icon -->
  <link rel="icon" href="img/icon.png">

  <title>Child Birth Reg</title>
  <style>
    ul li img {
      height: 700px;
    }
  </style>
</head>

<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">

          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                    <p>Fill the details below to Register</p>
                  </div>
                  <form class="user signupForm" id="register" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" name="fullname" class="form-control form-control-user" id="fullname" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                      <input type="text" onfocus="(this.type='date')" name="dob" class="form-control form-control-user" id="dob" placeholder="Date of Birth" required>
                    </div>
                    <div class="form-group">
                      <select class="form-control" id="state" name="state" required>
                        <option value="">Select State</option>
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="Akwa Ibom">Akwa Ibom</option>
                        <option value="Anambra">Anambra</option>
                        <option value="Bauchi">Bauchi</option>
                        <option value="Bayelsa">Bayelsa</option>
                        <option value="Benue">Benue</option>
                        <option value="Borno">Borno</option>
                        <option value="Cross River">Cross River</option>
                        <option value="Delta">Delta</option>
                        <option value="Ebonyi">Ebonyi</option>
                        <option value="Edo">Edo</option>
                        <option value="Ekiti">Ekiti</option>
                        <option value="Enugu">Enugu</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Imo">Imo</option>
                        <option value="Jigawa">Jigawa</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Kano">Kano</option>
                        <option value="Katsina">Katsina</option>
                        <option value="Kebbi">Kebbi</option>
                        <option value="Kogi">Kogi</option>
                        <option value="Kwara">Kwara</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Nasarawa">Nasarawa</option>
                        <option value="Niger">Niger</option>
                        <option value="Ogun">Ogun</option>
                        <option value="Ondo">Ondo</option>
                        <option value="Osun">Osun</option>
                        <option value="Oyo">Oyo</option>
                        <option value="Plateau">Plateau</option>
                        <option value="Rivers">Rivers</option>
                        <option value="Sokoto">Sokoto</option>
                        <option value="Taraba">Taraba</option>
                        <option value="Yobe">Yobe</option>
                        <option value="Zamfara">Zamfara</option>
                        <option value="FCT Abuja">FCT Abuja</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" name="hometown" class="form-control form-control-user" id="hometown" placeholder="Home Town" required>
                    </div>

                    <div class="form-group">
                      <input type="text" name="lga" class="form-control form-control-user" id="lga" placeholder="Local Government Area" required>
                    </div>

                    <div class="form-group">
                      <input type="text" name="occupation" class="form-control form-control-user" id="occupation" placeholder="Occupation" required>
                    </div>

                    <div class="form-group">
                      <select class="form-control" id="employmentstatus" name="employmentstatus" required>
                        <option value="">Employment Status</option>
                        <option value="Employed">Employed</option>
                        <option value="Unemployed">Unemployed</option>
                        <option value="Self Employed">Self Employed</option>
                        <option value="Pensioner">Pensioner</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <input type="tel" name="phone" class="form-control form-control-user" id="phone" placeholder="phone" required>
                    </div>

                    <div class="btn-group btn-group-toggle form-group row col-sm-10" data-toggle="buttons">
                    <label for="gender" class="col-sm-6 col-form-label form_label">Do you belong to any NGO? </label>
                      <label class="col-sm radio-inline"><input type="radio" name="gender" value="yes"> Yes</label>
                      <label class="col-sm radio-inline"><input type="radio" name="gender" value="no" checked> No</label>
                    </div>

                    <div class="form-group">
                      <input type="text" name="ngogroup" class="form-control form-control-user" id="ngogroup" placeholder="Name of NGO" required>
                    </div>

                    
                    <div class="form-group">
                      <input type="text" name="husbandname" class="form-control form-control-user" id="husbandname" placeholder="Name of your late Husband" required>
                    </div>

                    
                    <div class="form-group">
                      <input type="text" name="husbanddeathdate" class="form-control form-control-user" id="husbanddeathdate" placeholder="Date of spouse bereavement" required>
                    </div>

                    <div class="form-group">
                      <input type="text" name="husbandoccupation" class="form-control form-control-user" id="husbandoccupation" placeholder="Occupation of your late husband" required>
                    </div>

                    <div class="form-group">
                      <input type="text" name="yearofmarriage" class="form-control form-control-user" id="yearofmarriage" placeholder="Year of your marriage" required>
                    </div>

                    <div class="form-group">
                      <input type="text" name="numberofchildren" class="form-control form-control-user" id="numberofchildren" placeholder="Number of Children" required>
                    </div>

                    <div class="form-group">
                      <label class="small" style="color:#ff0000; font-size:12px" id="error"></label>
                    </div>
                    <button class="btn btn-primary btn-user btn-block">Submit
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="index.php">Have you registered already?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <script src="js/jquery-3.3.1.js"></script>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Main js files -->
  <script src="js/image-slider/screen.js" type="text/javascript"></script>
  <!-- Tooltip -->
  <script src="js/image-slider/poshytip-1.0/src/jquery.poshytip.min.js" type="text/javascript"></script>
  <!-- Tabs -->
  <script src="js/image-slider/tabs.js" type="text/javascript"></script>
  <!-- Include prettyPhoto -->
  <script src="js/image-slider/jquery.prettyPhoto.js" type="text/javascript"></script>
  <!-- Flexslider -->
  <script src="js/image-slider/jquery.flexslider-min.js" type="text/javascript"></script>
</body>

</html>