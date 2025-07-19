<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin | Restaurant</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('public/bootstrapdash/assets/vendors/feather/feather.css') ?>">
  <link rel="stylesheet" href="<?= base_url('public/bootstrapdash/assets/vendors/ti-icons/css/themify-icons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('public/bootstrapdash/assets/vendors/css/vendor.bundle.base.css') ?>">
  <link rel="stylesheet" href="<?= base_url('public/bootstrapdash/assets/vendors/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('public/bootstrapdash/assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
  
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('bootstrapdash/assets/css/vertical-layout-light/style.css') ?>">
  <link rel="shortcut icon" href="<?= base_url('bootstrapdash/assets/images/favicon.png') ?>" />
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo text-center">
                <img src="<?= base_url('bootstrapdash/assets/images/logo.svg') ?>" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>

              <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
              <?php endif; ?>

              <form class="pt-3" action="<?= base_url('admin/login') ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
                </div>
                <div class="mt-3 d-grid gap-2">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- plugins:js -->
  <script src="<?= base_url('bootstrapdash/assets/vendors/js/vendor.bundle.base.js') ?>"></script>
  <!-- inject:js -->
  <script src="<?= base_url('bootstrapdash/assets/js/off-canvas.js') ?>"></script>
  <script src="<?= base_url('bootstrapdash/assets/js/template.js') ?>"></script>
  <script src="<?= base_url('bootstrapdash/assets/js/settings.js') ?>"></script>
  <script src="<?= base_url('bootstrapdash/assets/js/todolist.js') ?>"></script>
</body>
</html>
