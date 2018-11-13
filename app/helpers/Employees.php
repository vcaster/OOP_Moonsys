<?php
  class Employees extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->postModel = $this->model('Post');
    }

    public function employees(){
      // Get posts
      $posts = $this->postModel->getPosts();

      $data = [
        'posts' => $posts
      ];

      $this->view('admins/employees', $data);
    }

    public function index(){
      // Get posts
      // $posts = $this->postModel->getPosts();

      $data = [
        // 'posts' => $posts
      ];

      $this->view('employees/admindex', $data);
    }
  }