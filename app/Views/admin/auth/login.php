<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Admin Restaurant</title>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?= base_url('skydash/dist/assets/vendors/feather/feather.css') ?>">
    <link rel="stylesheet" href="<?= base_url('skydash/dist/assets/vendors/ti-icons/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('skydash/dist/assets/vendors/css/vendor.bundle.base.css') ?>">
    <link rel="stylesheet" href="<?= base_url('skydash/dist/assets/vendors/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('skydash/dist/assets/vendors/mdi/css/materialdesignicons.min.css') ?>">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('skydash/dist/assets/css/style.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('skydash/dist/assets/images/favicon.png') ?>" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo text-center mb-4">
                  <img src="<?= base_url('skydash/dist/assets/images/logo.svg') ?>" alt="logo">
                </div>
                <h4 class="text-center">Welcome Back</h4>
                <h6 class="font-weight-light text-center mb-4">Sign in to continue.</h6>

                <!-- ALERT MESSAGES -->
                <?php if (session()->getFlashdata('success')): ?>
                  <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('error')): ?>
                  <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>

                <form class="pt-3" action="<?= base_url('login') ?>" method="post">
                  <?= csrf_field() ?>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg <?= ($validation && $validation->hasError('username')) ? 'is-invalid' : '' ?>" name="username" placeholder="Username" value="<?= old('username') ?>" required>
                    <?php if ($validation && $validation->hasError('username')): ?>
                      <div class="invalid-feedback"><?= $validation->getError('username') ?></div>
                    <?php endif; ?>
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg <?= ($validation && $validation->hasError('password')) ? 'is-invalid' : '' ?>" name="password" placeholder="Password" required>
                    <?php if ($validation && $validation->hasError('password')): ?>
                      <div class="invalid-feedback"><?= $validation->getError('password') ?></div>
                    <?php endif; ?>
                  </div>

                  <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                      <input type="checkbox" name="remember" class="form-check-input"> Remember Me
                    </label>
                  </div>

                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                  </div>

                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- Scripts -->
    <script src="<?= base_url('skydash/dist/assets/vendors/js/vendor.bundle.base.js') ?>"></script>
    <script src="<?= base_url('skydash/dist/assets/js/off-canvas.js') ?>"></script>
    <script src="<?= base_url('skydash/dist/assets/js/template.js') ?>"></script>
    <script src="<?= base_url('skydash/dist/assets/js/settings.js') ?>"></script>
    <script src="<?= base_url('skydash/dist/assets/js/todolist.js') ?>"></script>
  </body>
</html>
