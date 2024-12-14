<?php

require_once 'model/usermodel.php'; // Include the User model
require_once 'mailer.php';

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel(); // Initialize the model
    }

    // List all users
    public function routing()
    {
        $users = $this->userModel->getAllUsers();
        include 'viewusers.php'; // Pass data to the view
    }

    // Show user creation form
    public function create()
    {
        include 'userRegister.php';
    }

    // Save a new user
    public function store()
    {
        sendEmail($_POST['email']);
        $data = [
            'fullname' => $_POST['fullname'],
            'age' => $_POST['age'],
            'gender' => $_POST['gender'],
            'contact' => $_POST['contact'],
            'address' => $_POST['address'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        ];

       

        if ($this->userModel->createUser($data)) {
            header('Location: regSuccessful.php?action=index');
           
        } else {
            echo "Error: Unable to create user.";
        }
    }

    // Show edit form for a specific user
    public function edit($id)
    {
        $user = $this->userModel->getUserById($id);
        if ($user) {
            include 'edituser.php';
        } else {
            echo "User not found.";
        }
    }

    // Update an existing user
    public function update($id)
    {
        $data = [
            'id' => $id,
            'fullname' => $_POST['fullname'],
            'age' => $_POST['age'],
            'gender' => $_POST['gender'],
            'contact' => $_POST['contact'],
            'address' => $_POST['address'],
            'email' => $_POST['email'],
        ];

        if (!empty($_POST['password'])) {
            $data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }

        if ($this->userModel->updateUser($data)) {
            header('Location: viewusers.php?action=index');
        } else {
            echo "Error: Unable to update user.";
        }
    }

    // Delete a user
    public function delete($id)
    {
      try{  
        
        if ($this->userModel->deleteUser($id)) {
            header('Location: viewusers.php?action=index');
        } else {
            echo "Error: Unable to delete user.";
        } }

        catch (Exception $e)
        {
            echo "Error: " . $e->getMessage();

        }
    }
}
?>
