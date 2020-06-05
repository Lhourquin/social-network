<?php 
$title = "Connection";
require('includes/functions.php');
require('partials/_head.php');
?>
<div class="container text-center">
    <h1>Connection</h1>
    <div class="container-fluid col-md-5">
        <div>
            <div  id="form-conection">
                <form data-parsley-validate method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="user">Email address</label>
                        <input type="text" class="form-control" id="user" name="user" aria-describedby="emailHelp" placeholder="Enter email or Pseudo" value="<?= get_input('user')?>" required>
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <!--
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    -->
                    <button type="submit" id="submitConection" class="btn btn-primary" name="connection">Submit</button>
                </form>
            </div>
        </div>
    </div>

    
</div>

<?php
require('partials/_footer.php');
?>
