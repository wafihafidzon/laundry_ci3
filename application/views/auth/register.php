<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form action="<?= base_url('register'); ?>" method="post" class="user">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                  placeholder="Masukkan nama" name="nama">
              </div>
              <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                  placeholder="Masukkan username" name="username">
              </div>
              <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                    placeholder="Password" name="password_1">
                </div>
                <?= form_error('password_1', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                    placeholder="Repeat Password" name="password_2">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
                Register Account
              </button>
              <hr>
              <a href="index.html" class="btn btn-google btn-user btn-block">
                <i class="fab fa-google fa-fw"></i> Register with Google
              </a>
              <a href="index.html" class="btn btn-facebook btn-user btn-block">
                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
              </a>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="login.html">Already have an account? Login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>