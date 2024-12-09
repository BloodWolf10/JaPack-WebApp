<?php
// Assuming you have an admin object populated from a database or session.
// Example: $admin = ['id' => 1, 'fullname' => 'John Doe', 'age' => 30, 'gender' => 'Male', 'contact' => '1234567890', 'password' => 'password123', 'email' => 'john.doe@example.com'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <title>Edit Admin</title>

    <link href="CSS/theme.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<h1 class="p-3">Edit Admin</h1>

<div class="container">

    <form action="editSaveAdmin.php" method="post">
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($admin['id']); ?>" class="form-control input-sm" />
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="FullName">Full Name</label>
                <div class="col-md-6">
                    <input type="text" name="fullname" id="fullname" class="form-control input-sm" value="<?php echo htmlspecialchars($admin['fullname']); ?>" required="required" />
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Age">Age</label>
                <div class="col-md-6">
                    <input type="text" name="age" id="age" class="form-control input-sm" value="<?php echo htmlspecialchars($admin['age']); ?>" required="required" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3">Gender</label>
                <div class="col-md-6">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" name="gender" class="form-check-input" value="Male" <?php echo ($admin['gender'] == 'Male') ? 'checked' : ''; ?> /> Male
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" name="gender" class="form-check-input" value="Female" <?php echo ($admin['gender'] == 'Female') ? 'checked' : ''; ?> /> Female
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Contact">Contact Number</label>
                <div class="col-md-6">
                    <input type="text" name="contact" id="contact" class="form-control input-sm" value="<?php echo htmlspecialchars($admin['contact']); ?>" required="required" />
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Password">Password</label>
                <div class="col-md-6">
                    <input type="text" name="password" id="password" class="form-control input-sm" value="<?php echo htmlspecialchars($admin['password']); ?>" required="required" />
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Email">Email Address</label>
                <div class="col-md-6">
                    <input type="email" name="email" id="email" class="form-control input-sm" value="<?php echo htmlspecialchars($admin['email']); ?>" required="required" />
                </div>
            </div>
        </div>

        <div class="row p-2">
            <div class="col-md-2">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </div>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
