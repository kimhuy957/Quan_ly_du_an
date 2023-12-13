<?php 
include_once ('../layout/head.html');?>
<style>
  body {
  background: url('../assets/images/backgrounds/ktxhnue.jpg') no-repeat center center fixed;
  background-size: cover;
}

</style>
<body >  
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
  <div class="body-wrapper">
  <div class="container-fluid">
        <div class="card mb-0" style="
              max-width: 500px;
            min-width: 200px;
            margin: 0 auto;
            margin-top: 10px;">
          <div class="card-body">
              <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
            <form >
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên đăng nhập </label>
                <input type="email" class="form-control" placeholder="Nhập đăng Nhập" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label"  >Mật khẩu</label>
                <input type="password" class="form-control" placeholder="Nhập mật khẩu" id="exampleInputPassword1">
              </div>
              <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="form-check">
                  <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label text-dark" for="flexCheckChecked">
                    Remeber this Device
                  </label>
                </div>
                <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Create an account</a>
              </div>
              <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</a>
              <div class="d-flex align-items-center justify-content-center">
                <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>

              </div>
            </form>
  </div>
  </div>
  </div>  
</body>
<?php
include_once ('../layout/footer.html');
?>