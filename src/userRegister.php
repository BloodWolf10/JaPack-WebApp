<!-- NAV BAR -->
<?php include 'navigationbar.php'; ?>
<!-- NAV BAR -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link href="CSS/theme.css" rel="stylesheet" />
</head>

<body>

<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $fullname = trim($_POST['fullname']);
    $age = trim($_POST['age']);
    $address = trim($_POST['address']);
    $contact = trim($_POST['contact']);
    $gender = trim($_POST['gender']);
    $password_confirm = trim($_POST['password_confirm']);

    // Backend validations
    if (empty($email) || empty($password) || empty($fullname) || empty($age) || empty($address) || empty($contact) || empty($gender)) {
        echo "All fields are required!";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit;
    }

    if (!is_numeric($age) || $age < 18 || $age > 120) {
        echo "Invalid age. Must be between 18 and 120.";
        exit;
    }

    if (!is_numeric($contact) || strlen($contact) < 10) {
        echo "Invalid contact number!";
        exit;
    }

    if ($password !== $password_confirm) {
        echo "Passwords do not match!";
        exit;
    }

    if (strlen($password) < 8 || !preg_match('/[A-Za-z]/', $password) || !preg_match('/[0-9]/', $password)) {
        echo "Password must be at least 8 characters long and contain letters and numbers!";
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $roleid = 1;

    $sql = "INSERT INTO users (email,fullname,age,address,contact,gender,password,roleid) VALUES (:email,:fullname,:age,:address,:contact,:gender,:password,:roleid)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            'email' => $email,
            'fullname' => $fullname,
            'age' => $age,
            'address' => $address,
            'contact' => $contact,
            'gender' => $gender,
            'password' => $hashed_password,
            'roleid' => $roleid,
        ]);
        echo "Registration successful!";
    } catch (\PDOException $e) {
        if ($e->getCode() == 23000) {
            echo "Username or email already exists!";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>

<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
    </div>
</section>

<!-- FORM -->
<div class="container">
    <h1 class="p-3"> User Register </h1>

    <form action="routing.php?action=store" method="post" onsubmit="return validateForm()">
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="FullName"> Full Name </label>
                <div class="col-md-6">
                    <input type="text" name="fullname" id="fullname" class="form-control input-sm" required="required" />
                </div>
            </div>
        </div>
        <br />

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Age"> Age </label>
                <div class="col-md-6">
                    <input type="number" name="age" id="age" class="form-control input-sm" required="required" min="18" max="120" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3"> Gender </label>
                <div class="col-md-6">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="Male" required /> Male
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="Female" required /> Female
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <br />

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Contact"> Contact Number </label>
                <div class="col-md-6">
                    <input type="text" name="contact" id="contact" class="form-control input-sm" required="required" />
                </div>
            </div>
        </div>
        <br />

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Address"> Home Address </label>
                <div class="col-md-6">
                    <input type="text" name="address" id="address" class="form-control input-sm" required="required" />
                </div>
            </div>
        </div>
        <br />

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Email"> Email Address </label>
                <div class="col-md-6">
                    <input type="email" name="email" id="email" class="form-control input-sm" required="required" />
                </div>
            </div>
        </div>
        <br />

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Password"> Password </label>
                <div class="col-md-6">
                    <input type="password" name="password" id="password" class="form-control input-sm" required="required" minlength="8" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="ConfirmPassword"> Confirm Password </label>
                <div class="col-md-6">
                    <input type="password" name="password_confirm" id="password_confirm" class="form-control input-sm" required="required" />
                    <small id="passwordError" class="text-danger" style="display: none;">Passwords do not match!</small>
                </div>
            </div>
        </div>
        <br />

        <!-- REGISTER BUTTON -->
        <div class="row p-2">
            <div class="col-md-2">
                <button class="btn btn-register btn-warning">REGISTER</button>
            </div>
        </div>
    </form>
</div>

<script>
function validateForm() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('password_confirm').value;
    const passwordError = document.getElementById('passwordError');

    if (password !== confirmPassword) {
        passwordError.style.display = 'block';
        return false;
    }

    passwordError.style.display = 'none';
    return true;
}
</script>

<!-- Footer NAV BAR -->
<?php include 'footer.php'; ?>

</body>
</html>
