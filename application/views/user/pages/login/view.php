<div>
    <div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
        <form action="<?php echo base_url('index.php/Login/aksi_login');?>" method="post">
            <h1>Login Puskesmas</h1>
            <div>
            <input type="text" name="username" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
            <button class="btn btn-default" type="submit" name="submit" value="submit">Login</button>
            <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>
        </form>
        </section>
    </div>
    </div>
</div>