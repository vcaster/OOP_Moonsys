<?php
class Employees extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        } elseif ($_SESSION['user_cat'] != 0) {
            redirect('users/login');
        }

        $this->employeeModel = $this->model('Employee');
    }

    public function employees()
    {
      // Get posts
        $posts = $this->postModel->getPosts();

        $data = [
        'posts' => $posts
        ];

        $this->view('employees/employees', $data);
    }

    public function index()
    {
      // Get posts
      // $posts = $this->postModel->getPosts();

        $data = [
        // 'posts' => $posts
        ];

        $this->view('employees/admindex', $data);
    }
    public function dashboard()
    {

        $this->view('employees/dashboard');
    }
    public function profile($id)
    {
      // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form
          // Process form

          // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          // Init data
             $employees = $this->employeeModel->getEmployees();

            $data =[
            'id' => $id,
            'employees' => $employees,
            'fname' => trim($_POST['fname']),
            'lname' => trim($_POST['lname']),
            'mname' => trim($_POST['mname']),
            'email' => trim($_POST['email']),
            'phonen' => trim($_POST['phonen']),
            'nationality' => trim($_POST['nationality']),
            'address' => trim($_POST['address']),
            //'sex' => trim($_POST['sex']),
            'birthdate' => trim($_POST['birthdate']),
            'age' => trim($_POST['age'])
            //'status' => trim($_POST['status']),
           
            ];

          
              //Update User
            if ($this->employeeModel->update($data)) {
                flash('post_message', 'Profile Updated.');
                redirect("employees/dashboard");
            } else {
                die('Something went wrong');
            }
        } else {
          // check id
          //
            

            $emp = $this->employeeModel->getEmpdetails($id);
            if ($emp->empID != $_SESSION['user_id']) {
                redirect('employees/dashboard');
            }

          // Init data
            $data =[
            'id' => $id,
            'empdetails' => $emp,
            'fname' => '$emp->firstName',
            'lname' => '$emp->lastName',
            'mname' => '$emp->middleName',
            'email' => '$emp->email',
            'phonen' => '$emp->phone',
            'nationality' => '$emp->nationality',
            'address' => '$emp->address',
            // 'position' => '',
            // 'dept' => '',
            // 'sex' => '',
            'birthdate' => '$emp->birthdate',
            'age' => '$emp->age',
            'password' => '',
            // 'confirm_password' => '',
            'dept_err' => '',
            'password_err' => '',
            'age_err' => '',
            'confirm_password_err' => '',
            'sex_err' => '',
            'birthdate_err' => '',
            'phonen_err' => '',
            'fname_err' => '',
            'nationality_err' => '',
            'position_err' => '',
            'address_err' => '',
            'lname_err' => '',
            'mname_err' => '',
            'email_err' => ''
            ];

          // Load view
            $this->view("employees/profile", $data);
        }
    }
    public function files($id)
    {
      // Get posts
        $files = $this->employeeModel->getFilesU($id);

        if ($id != $_SESSION['user_id']) {
                redirect("employees/dashboard");
        }
        $data = [
        'files' => $files
        ];

        $this->view('employees/files', $data);
    }
    public function filesupload($id)
    {
      // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form
          // Process form

          // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

          // Init data
           // $emp = $this->employeeModel->getFilesdetails($id);
            $fnm = $_FILES['f']['name'];
            $dst ='images/Employeefiles/'.$fnm;
            if (move_uploaded_file($_FILES['f']['tmp_name'], $dst)) {
                $data =[
                'id' => $id,
            //'empdetails' => $emp,
                'name' => trim($_POST['fname']),
                'filename' => $fnm,
                'dest' => $dst,
            //'empID' => $_SESSION['user_id']
                       
                ];
          
              //Update User
                if ($this->employeeModel->filesupload($data)) {
                    flash('post_message', 'File Uploaded.');
                    redirect("employees/files/$id");
                } else {
                    die('Something went wrong');
                }
            }
        } else {
          // check id

            $emp = $this->employeeModel->getEmpdetails($id);


          // Init data
            $data =[
            'id' => $id,
            'empdetails' => $emp
            ];

          // Load view
            $this->view("employees/filesupload", $data);
        }
    }

    public function filesdownload($id)
    {
      // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $emp = $this->employeeModel->getFilesdetails($id);
           
            $path = $emp->pathF;
            header('content-Disposition: attachment; filename = '.$path.'');
            header('content-type: appliction/octent-strem');
            header('content-length='.filesize($path));
            readfile($path);
        } else {
          // check id

            $emp = $this->employeeModel->getFilesdetails($id);


          // Init data
            $data =[
            'id' => $id,
            'empdetails' => $emp
            ];

          // Load view
            $this->view("employees/filesdownload", $data);
        }
    }

    public function pay($id)
    {
      // Get posts
        $employees = $this->employeeModel->getPays($id);
        if ($id != $_SESSION['user_id']) {
                redirect("employees/dashboard");
        }
        $data = [
        'employees' => $employees
        ];

        $this->view('employees/pay', $data);
    }
}
