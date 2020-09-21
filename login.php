<?php include('myfunctions.php'); ?>
<?php  include('header.php'); ?>
    <div>
        <h2 class="text-center">Login</h2>
    </div>
    <div class="form-holder">
            <form method="POST" action="register.php">
                <?php echo errorDisplay(); ?>
                <div class="form-group">
                    <label for="uername">Username</label>
                    <input type="text"name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password_1">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type ="submit" class="btn btn-primary btn-block" name="login_btn"><i class="fa fa-paper-plane"></i> Login</button>
            </form>
            <p>Not yet a member?<a href="register.php"> Register</a></p>
        </div>
<?php include('footer.php'); ?>