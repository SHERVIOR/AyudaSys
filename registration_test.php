
<?php
  include_once 'includes/db.inc.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>AyudaSys Registration</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;0,900;1,300;1,400&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;0,900;1,300;1,400&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

  <section id="title">
  <!-- Nav Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand brand-title" href="index.html">AyudaSys </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link links" href="index.html">Home</a>
        </li>
      
      </ul>
    </div>
  </nav>
</section>



    <!-- Custom styles for this template -->
    <link href="styles/Registration.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">

        <h2>Registration Page</h2>
        <p class="lead">Properly Input the correct Data for the Ayuda System.</p>
      </div>

        </div>
        <div class="col-md-12 order-md-1 fontcolor1">
          <form action="includes/register.inc.php" method="POST" class="needs-validation" novalidate>
          <h4 class="mb-3">Citizen Info</h4>
          <div class="mb-3">
            <label for="username">Barangay ID</label>
            <div class="input-group">

              <input type="text" class="form-control" id="Barangay ID " name="rbid" placeholder="Barangay ID" required>
              <div class="invalid-feedback" style="width: 100%;">
                Your Barangay ID is required.
              </div>
            </div>
          </div>
          <!--<form class="needs-validation" novalidate> -->
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="rfn" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="MiddleName">Middle name</label>
                <input type="text" class="form-control" id="Middle Name" name="rmn" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="rln" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="Number">Number of people in the household</label>
              <input type="text" class="form-control" id="number" name="rnom" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            </form>
            <!--<form class="needs-validation" novalidate> -->
              <div class="row">
                <div class="col-md-4 mb-3">
                  <label for="House">House No.</label>
                  <input type="text" class="form-control" id="address" name="rhn" placeholder="House No" required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="Street">Street</label>
                  <input type="text" class="form-control" id="address" name="rs" placeholder="Street" required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="Barangay">Barangay</label>
                  <input type="text" class="form-control" id="address" name="rb" placeholder="Barangay" required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
              </div>






            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="Package">Ayuda Package</label>
                <select class="custom-select d-block w-100" id="Package" required>
                  <option value="">Package...</option>
                  <option>Package A</option>
                  <option>Package B</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="email">Email <span class="text-muted"></span></label>
                <input type="email" class="form-control" id="email" name="re" placeholder="you@example.com" required>
                <div class="invalid-feedback">
                  Please enter a valid email address for updates.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="Contact Information">Contact Number</label>
                <input type="text" class="form-control" id="zip" name="rcn" placeholder="" required>
                <div class="invalid-feedback">
                  Contact Number required.
                </div>
              </div>
            </div>
            <hr class="my-4">

          <button class="w-100 btn btn-primary " type="submit">Submit Information</button>

        </form>

      <div class="hello">

      </div>






    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script src="java/registration.js" charset="utf-8"></script>
  </body>
</html>
