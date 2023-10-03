<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Codeigniter Login with Email/Password Example</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <h2>Login</h2>
            <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo base_url(); ?>/UserController/login" method="post">
                <div class="form-group mb-3">
                    <input type="text" name="username" placeholder="Username" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Signin</button>
                    <br>
                      <p>Dont have an account?<p>
                    <button href="/Register" class="btn btn-success">Register</button>

                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
