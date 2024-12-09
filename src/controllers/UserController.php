<?php

require_once 'services/UserService.php';

class UserController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function getUsers()
    {
        $userList = $this->userService->getAllUsers();
        include 'views/ViewUsers.php'; // Pass $userList to the view
    }

    public function addUser()
    {
        $user = null; // Create a new UserEntity object equivalent
        include 'views/UserRegister.php'; // Pass $user to the view
    }

    public function saveUser($user)
    {
        $this->userService->addUser($user);
        header('Location: /index.php?action=Reg');
        exit;
    }

    public function editUser($id)
    {
        $user = $this->userService->getUserById($id);
        include 'views/EditUser.php'; // Pass $user to the view
    }

    public function editSaveUser($user)
    {
        $this->userService->addUser($user);
        header('Location: /index.php?action=getUsers');
        exit;
    }

    public function deleteUser($id)
    {
        $this->userService->deleteUser($id);
        header('Location: /index.php?action=getUsers');
        exit;
    }

    public function udashboard()
    {
        include 'views/UserDashboard.php';
    }

    public function redirectAfterRegistration()
    {
        include 'views/RegisterRedirect.php';
    }
}
