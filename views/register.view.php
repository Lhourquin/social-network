<?php 
$title = "Register";
require('partials/_head.php');
?>
<div class="container text-center">
<h1>Join Us ! </h1>
<div class="container-fluid w-50">
<form id="formDataInscription">
                <div class="form-row">
                  <div class="col form-group">
                    <label for="name">First name </label>   
                    <input type="text" class="inputDataOfSuscribeForm form-control" name="name" id="name" placeholder="">
                  </div> <!-- form-group end.// -->
                  <div class="col form-group">
                    <label for="lastName">Last name</label>
                    <input type="text" class="inputDataOfSuscribeForm form-control" name="lastName" id="lastName" placeholder=" ">
                  </div> <!-- form-group end.// -->
                </div> <!-- form-row end.// -->
                <div class="form-group">
                  <label for="mail">Email address</label>
                  <input type="email" class="inputDataOfSuscribeForm form-control" name="mail" id="mail" placeholder="">
                  <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div> <!-- form-group end.// -->
                <div class="form-group">
                  <label for="gender">
                    <label class="form-check form-check-inline">
                      <input class="inputDataOfSuscribeForm form-check-input" type="radio" name="genderS" id="female" value="Women">Women</input>

                      <!--	<span class="form-check-label"> Women </span>-->
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="inputDataOfSuscribeForm form-check-input" type="radio" name="genderS" id="male" value="Men">Men</input>

                      <!--	<span class="form-check-label"> Men</span>-->
                    </label>
                  </label>
                </div> <!-- form-group end.// -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="inputDataOfSuscribeForm form-control" name="city" id="city">
                  </div> <!-- form-group end.// -->
                  <div class="form-group col-md-6">
                    <label for="age">Age</label>
                    <input type="number" class="inputDataOfSuscribeForm form-control" name="age" id="age">
                  </div> <!-- form-group end.// -->
                </div> <!-- form-row.// -->
                <div class="form-group">
                  <label for="password">Create password</label>
                  <input class="inputDataOfSuscribeForm form-control" type="password" name="password" id="password">
                </div> <!-- form-group end.// -->  
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" id="submitRegister"> Register  </button>
                </div> <!-- form-group// -->      
                <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
              </form>
</div>



<?php
include('partials/_footer.php');