
<?php 
$title="Register";
include("header.php");
?>

    <div class="container w-50">
         <div class="row mt-5">
            <div class="col p-5">
                <div>
                    <!-- first column -->
                    <h2 id="wel-msg">Create Your Account Below<span style="color:blue;">.</span></h2>
                </div>
                <div class="form-div">
                <form action="" method="POST">
<!-- enter first name and last name -->
<div class="form-group mb-3">
    <div class="input-group mb-2">
        <span class="input-group-text"><i class="bi bi-person-badge-fill"></i></span>
        <input type="text" class="form-control" name="f_name" placeholder="Enter Your First Name">
    </div>
</div>
</div>
<!-- entering first name and last name ends here-->


<!-- entering last name-->
<div class="form-group mb-3">
<div class="input-group">
        <span class="input-group-text"><i class="bi bi-person-badge-fill"></i></span>
        <input type="text" class="form-control" name="s_name" placeholder="Enter your second Name">
    </div>
</div>

<!--username-->
<div class="form-group mb-3">
<div class="input-group">
        <span class="input-group-text"><i class="bi bi-person-badge-fill"></i></span>
        <input type="text" class="form-control" name="username" placeholder="Create a Username">
    </div>
</div>
<!-- email address  -->
<div class="form-group mb-3">
    <div class="input-group">
        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
        <input type="email" class="form-control" name="email" placeholder="Enter a valid email address">
    </div>
</div>
<!-- email address end -->
<!-- create password -->
<div class="row form-group mb-3">
    <div class="col">
        <input type="password" name="password" class="form-control" placeholder="Create password">
    </div>
    <div class="col">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
    </div>
</div>
<div>
    <input type="submit" name="register" value="Create Account" class="btn btn-primary w-100">
</div>
</form>
                </div>
            </div>
         </div>
    </div>
<?php include("footer.php");?>