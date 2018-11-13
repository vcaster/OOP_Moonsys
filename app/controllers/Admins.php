<?php
class Admins extends Controller
{

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->employeeModel = $this->model('Employee');
    }
    public function update($id)
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
                flash('post_message', 'User Updated.');
                redirect("admins/employees");
            } else {
                die('Something went wrong');
            }
        } else {
          // check id

            $emp = $this->employeeModel->getEmpdetails($id);


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
            $this->view("admins/update", $data);
        }
    }

    public function employees()
    {
      // Get posts
        $employees = $this->employeeModel->getEmployees();

        $data = [
        'employees' => $employees
        ];

        $this->view('admins/employees', $data);
    }

    public function leaves()
    {
      // Get posts

        $leaves = $this->employeeModel->getLeaves();

        $data = [
        'leaves' => $leaves
        ];

        $this->view('admins/leaves', $data);
    }


    public function empdetails($id)
    {
      // Get posts
        $empdetails = $this->employeeModel->getEmpdetails($id);

        $data = [
        'empdetails' => $empdetails
        ];

        $this->view('admins/empdetails', $data);
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->employeeModel->delete($id)) {
                flash('post_message', 'Employee Removed');
                redirect('admins/employees');
            } else {
                die('Something went wrong');
            }
        } else {
             $emp = $this->employeeModel->getEmpdetails($id);


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
            $this->view("admins/delete", $data);
        }
    }




    public function index()
    {

        $this->view('admins/admindex');
    }

    public function dashboard()
    {

        $this->view('admins/dashboard');
    }
}
