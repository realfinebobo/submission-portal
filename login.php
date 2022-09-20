<?php
$title = "Login";
include("header.php");
?>
<body>
    <div class="container w-50">
         <div class="row mt-5">
            <div class="col p-5">
                <div>
                    <!-- first column -->
                    <h2 id="wel-msg">Hello Again<span style="color:blue;">.</span></h2>
            <form action="" method="POST">
                <div class="form-group">
                <label for="username" class="mb-2">Enter Username</label>
                <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
    </div>
                <div class="form-group mb-3">
                <label for="password" class="mb-2">Enter password</label>
                <div class="input-group">
               <span class="input-group-text"><i class="bi bi-eye-fill"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
        </div>
    </div>
    <div>
        <input type="submit" name="login" value="Login" class="btn btn-primary w-100">
    </div>
</form>
                </div>
            </div>
         </div>
    </div>
<?php include("footer.php");?>