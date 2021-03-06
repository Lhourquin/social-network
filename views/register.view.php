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
<form data-parsley-validate method="POST" id="formDataInscription" autocomplete="off">
                <div class="form-row">

                <!-- FIRST NAME -->
                  <div class="col form-group">
                    <label for="name">First name </label>   
                    <input type="text" class="inputDataOfSuscribeForm form-control" name="name" value="<?=get_input('name')?>" id="name" placeholder="" required="require" autocomplete="off" data-parsley-trigger="change" >
                  </div> <!-- form-group end.// -->

                  <!-- LASTNAME -->
                  <div class="col form-group">
                    <label for="lastName">Last name</label>
                    <input type="text" class="inputDataOfSuscribeForm form-control" name="lastName" value="<?=get_input('lastName')?>" id="lastName" placeholder=" " required="require" autocomplete="off" data-parsley-trigger="change">
                  </div> <!-- form-group end.// -->
                </div> <!-- form-row end.// -->

                <!-- MAIL ADRESS -->
                <div class="form-group">
                  <label for="mail">Email address</label>
                  <input type="email" class="inputDataOfSuscribeForm form-control" name="mail" value="<?=get_input('mail')?>" id="mail" placeholder="" required="require" autocomplete="off"  data-parsley-trigger="change" >
                  <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div> <!-- form-group end.// -->

                <!-- PSEUDO -->
                <div class="form-group">
                  <label for="pseudo">Pseudo</label>
                  <input type="text" class="inputDataOfSuscribeForm form-control" name="pseudo" value="<?=get_input('pseudo')?>" id="pseudo" placeholder="" required="require" autocomplete="off" minlength="3" data-parsley-minlength="3" data-parsley-trigger="change">
                </div> <!-- form-group end.// -->
                <!--
                <!-- GENDER >
                <div class="form-group">
                  <label for="gender">

                  <!-- WOMEN 
                    <label class="form-check form-check-inline">
                      <input class="inputDataOfSuscribeForm form-check-input" type="radio" name="genderS" value="<?=get_input('genderS')?>" id="female"  required="require">Women</input>

                    <!-- MEN
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="inputDataOfSuscribeForm form-check-input" type="radio" name="genderS" value="<?=get_input('genderS')?>" id="male"  required="require">Men</input>

                    </label>
                  </label>
                </div> <!-- form-group end.// -->

                <!-- CITY 
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="inputDataOfSuscribeForm form-control" name="city" value="<?=get_input('city')?>" id="city" required="require">
                  </div> <!-- form-group end.// -->

                  <!-- AGE 
                  <div class="form-group col-md-6">
                    <label for="age">Age</label>
                    <input type="number" class="inputDataOfSuscribeForm form-control" name="age" value="<?=get_input('age')?>" id="age" required="require">
                  </div> <!-- form-group end.// 
                </div>  form-row.// -->

                <!-- PASSWORD -->
                <div class="form-group">
                  <label for="password">Create password</label>
                  <input class="inputDataOfSuscribeForm form-control" type="password" name="password" id="password" required="require" autocomplete="off" data-parsley-trigger="change">
                </div> <!-- form-group end.// -->  

                <!-- CONFIRM PASSWORD -->
                <div class="form-group">
                  <label for="passwordConfirm">Confirm password</label>
                  <input class="inputDataOfSuscribeForm form-control" type="password" name="passwordConfirm" id="passwordConfirm" required="require" autocomplete="off" data-parsley-equalto="#password" data-parsley-trigger="change">
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