

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | TEF - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Codebucks" name="author" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico">

    <!-- Layout JS -->
    <script src="./assets/js/pages/layout.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/icons.min.css">
    <link rel="stylesheet" href="./assets/libs/simplebar/simplebar.min.css">
    <link rel="stylesheet" href="./assets/css/app.min.css">
</head>

<body>
    <div class="container-fluid authentication-bg overflow-hidden">
        <div class="bg-overlay"></div>
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-10 col-md-6 col-lg-4 col-xxl-3">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="./dashboard.php" class="logo-dark">
                                <img src="./assets/images/logo tef.png" alt="Logo" height="50" class="auth-logo logo-dark mx-auto">
                            </a>
                            <a href="./dashboard.php" class="logo-light" style="height: 5px;">
                                <img src="./assets/images/logo tef.png" alt="Logo" class="auth-logo logo-light mx-auto">
                            </a>
                            <h4 class="font-size-18 mt-4">WELCOME HERE! </h4>
                            <p class="text-muted">Sign in to continue to TEF.</p>
                        </div>
                        <div class="p-2 mt-5">
                            <form method="POST" action="signin.php">
                                <div class="input-group auth-form-group-custom mb-3">
                                    <span class="input-group-text bg-primary bg-opacity-10 fs-16"><i class="mdi mdi-email-outline"></i></span>
                                    <input type="email" name="user_register_email" class="form-control" placeholder="Enter email" required>
                                </div>



                                <div class="input-group auth-form-group-custom mb-3">
                                    <span class="input-group-text bg-primary bg-opacity-10 fs-16" id="basic-addon2"><i class="mdi mdi-lock-outline auti-custom-input-icon"></i></span>
                                    <input type="password" class="form-control" id="validationCustom02" placeholder="Enter password" aria-label="Username" name="user_register_password" aria-describedby="basic-addon1" required>
                                     <span id="toggleIcon" onclick="togglePassword()" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                                    👁
                                                </span>

                                </div>

                                <div class="mb-2">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="termsCheck" required>
                                        <label class="form-check-label" for="termsCheck">I agree to all Terms and Conditions</label>
                                    </div>
                                </div>

                                <div class="text-center pt-3">
                                    <button class="btn btn-primary w-100" name="user_login_btn" type="submit">LogIn</button>
                                </div>

                                <div class="mt-3 text-center">
                                    <p class="mb-0">Don't have an account ?
                                        <a href="./register.php" class="fw-medium text-primary">Register</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <div class="mt-3 text-center">
                            <p>© <script>
                                    document.write(new Date().getFullYear())
                                </script> TEF. Crafted with <i class="mdi mdi-heart text-danger"></i> by Javeria Noor </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="./assets/libs/jquery/jquery.min.js"></script>
    <script src="./assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="./assets/libs/simplebar/simplebar.min.js"></script>
    <script src="./assets/libs/node-waves/waves.min.js"></script>
    <script src="./assets/js/app.js"></script>

    <!-- View password -->
     <script>
function togglePassword() {
  const passwordInput = document.getElementById("validationCustom02");
  const icon = document.getElementById("toggleIcon");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    icon.textContent = '🙈'; // eye-slash symbol
  } else {
    passwordInput.type = "password";
    icon.textContent = '👁'; // eye symbol
  }
}
</script>
</body>

</html>