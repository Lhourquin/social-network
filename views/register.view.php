<?php 
$title = "Register";
require('partials/_head.php');
?>
<div class="container text-center">
<h1>Join Us !</h1>
<div class="container-fluid col-md-6">

<?php
  include('partials/_errors.php');
?>
<form method="POST" id="formDataInscription">
                <div class="form-row">

                <!-- FIRST NAME -->
                  <div class="col form-group">
                    <label for="name">First name </label>   
                    <input type="text" class="inputDataOfSuscribeForm form-control" name="name" id="name" placeholder="" required="require">
                  </div> <!-- form-group end.// -->

                  <!-- LASTNAME -->
                  <div class="col form-group">
                    <label for="lastName">Last name</label>
                    <input type="text" class="inputDataOfSuscribeForm form-control" name="lastName" id="lastName" placeholder=" " required="require">
                  </div> <!-- form-group end.// -->
                </div> <!-- form-row end.// -->

                <!-- MAIL ADRESS -->
                <div class="form-group">
                  <label for="mail">Email address</label>
                  <input type="email" class="inputDataOfSuscribeForm form-control" name="mail" id="mail" placeholder="" required="require">
                  <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div> <!-- form-group end.// -->

                <!-- PSEUDO -->
                <div class="form-group">
                  <label for="pseudo">Pseudo</label>
                  <input type="text" class="inputDataOfSuscribeForm form-control" name="pseudo" id="pseudo" placeholder="" required="require">
                </div> <!-- form-group end.// -->

                <!-- GENDER -->
                <div class="form-group">
                  <label for="gender">

                  <!-- WOMEN -->
                    <label class="form-check form-check-inline">
                      <input class="inputDataOfSuscribeForm form-check-input" type="radio" name="genderS" id="female" value="Women" required="require">Women</input>

                    <!-- MEN -->
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="inputDataOfSuscribeForm form-check-input" type="radio" name="genderS" id="male" value="Men" required="require">Men</input>

                    </label>
                  </label>
                </div> <!-- form-group end.// -->

                <!-- CITY -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="inputDataOfSuscribeForm form-control" name="city" id="city" required="require">
                  </div> <!-- form-group end.// -->

                  <!-- AGE -->
                  <div class="form-group col-md-6">
                    <label for="age">Age</label>
                    <input type="number" class="inputDataOfSuscribeForm form-control" name="age" id="age" required="require">
                  </div> <!-- form-group end.// -->
                </div> <!-- form-row.// -->

                <!-- PASSWORD -->
                <div class="form-group">
                  <label for="password">Create password</label>
                  <input class="inputDataOfSuscribeForm form-control" type="password" name="password" id="password" required="require">
                </div> <!-- form-group end.// -->  

                <!-- CONFIRM PASSWORD -->
                <div class="form-group">
                  <label for="passwordConfirm">Confirm password</label>
                  <input class="inputDataOfSuscribeForm form-control" type="password" name="passwordConfirm" id="passwordConfirm" required="require">
                </div> <!-- form-group end.// -->  

                <!-- SUBMIT -->
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" id="submitRegister" name="register"> Register  </button>
                </div> <!-- form-group// -->      
                <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
              </form>
</div>



<?php
include('partials/_footer.php');