<?php
class Admins extends Controller
{

    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        } elseif ($_SESSION['user_cat'] != 1) {
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
            $employees = $this->employeeModel->getPays($id);

          // Init data
            $data =[
            'id' => $id,
            'empdetails' => $emp,
            'employees' => $employees
            
            ];

          // Load view
            $this->view("admins/update", $data);
        }
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
                    redirect("admins/files");
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
            $this->view("admins/filesupload", $data);
        }
    }
    public function announceupload($id)
    {
      // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form
          // Process form

          // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data =[
                'id' => $id,
                'announce' => trim($_POST['announce']),
                'dept' => trim($_POST['dept'])
                ];
          
              //Update User
                if ($this->employeeModel->announceupload($data)) {
                    flash('post_message', 'Announcement Uploaded.');
                    redirect("admins/announcements");
                } else {
                    die('Something went wrong');
                }
        } else {
      // check id

            $emp = $this->employeeModel->getEmpdetails($id);
            $depts = $this->employeeModel->getDept();

      // Init data
            $data =[
            'id' => $id,
            'empdetails' => $emp,
            'dept' => $depts
            ];

      // Load view
            $this->view("admins/announceupload", $data);
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
            $this->view("admins/filesdownload", $data);
        }
    }

    public function announcedelete($id)
    {
          // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process form
          // Process form

          // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data =[
            'id' => $id
            ];
          
              //Update User
            if ($this->employeeModel->announcedelete($id)) {
                flash('post_message', 'Announcement Deleted.');
                redirect("admins/announcements");
            } else {
                die('Something went wrong');
            }
        } else {
      // check id

            $emp = $this->employeeModel->getAnnonuceep($id);

      // Init data
            $data =[
            'id' => $id,
            'empdetails' => $emp

            ];

      // Load view
            $this->view("admins/announcedelete", $data);
        }
    }

    public function reportinfo($id)
    {
      
        $emp = $this->employeeModel->getReportsdetails($id);


          // Init data
        $data =[
        'id' => $id,
        'empdetails' => $emp
        ];

          // Load view
        $this->view("admins/reportinfo", $data);
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
    public function announcements()
    {
      // Get posts
    
        $announcements = $this->employeeModel->getAnnonucee();

        $data = [
        'announcements' => $announcements
        ];

        $this->view('admins/announcements', $data);
    }
    public function files()
    {
      // Get posts
        $files = $this->employeeModel->getFiles();

        $data = [
        'files' => $files
        ];

        $this->view('admins/files', $data);
    }
    public function reports()
    {
      // Get posts
        $reports = $this->employeeModel->getReports();

        $data = [
        'reports' => $reports
        ];

        $this->view('admins/reports', $data);
    }

    public function leaves()
    {
      // Get posts

        $leaves = $this->employeeModel->getLeavesapp();
        $leavesdisa = $this->employeeModel->getLeavesdisa();

        $data = [
        'leaves' => $leaves,
        'leavesdisa' => $leavesdisa
        ];

        $this->view('admins/leaves', $data);
    }
    public function onleave()
    {
      // Get posts

        $onleave = $this->employeeModel->getOnleave();

        $data = [
        'onleaves' => $onleave
        ];

        $this->view('admins/onleave', $data);
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
    public function leavedisa($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->employeeModel->leavedisa($id)) {
                flash('post_message', 'Leave Disapproved');
                redirect('admins/leaves');
            } else {
                die('Something went wrong');
            }
        } else {
            $emp = $this->employeeModel->getLeavedetails($id);


          // Init data
            $data =[
            'id' => $id,
            'empdetails' => $emp,
            'fname' => '$emp->firstName',
            'lname' => '$emp->lastName',
            'mname' => '$emp->middleName',
            ];

          // Load view
            $this->view("admins/leavedisa", $data);
        }
    }
    public function leaveinfo($id)
    {
        $emp = $this->employeeModel->getLeavedetails($id);


          // Init data
        $data =[
        'id' => $id,
        'empdetails' => $emp,
        'fname' => '$emp->firstName',
        'lname' => '$emp->lastName',
        'mname' => '$emp->middleName',
        ];

          // Load view
        $this->view("admins/leaveinfo", $data);
    }

    public function leaveapp($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->employeeModel->leaveapp($id)) {
                flash('post_message', 'Leave approved');
                redirect('admins/leaves');
            } else {
                die('Something went wrong');
            }
        } else {
            $emp = $this->employeeModel->getLeavedetails($id);


          // Init data
            $data =[
            'id' => $id,
            'empdetails' => $emp,
            'fname' => '$emp->firstName',
            'lname' => '$emp->lastName',
            'mname' => '$emp->middleName',
            ];

          // Load view
            $this->view("admins/leaveapp", $data);
        }
    }
    
    public function index()
    {

        $this->view('admins/admindex');
    }

    public function dashboard()
    {
        $reports = $this->employeeModel->getReportsD();
        $leaves = $this->employeeModel->getOnleaveD();
        $announcements = $this->employeeModel->getAnnonuceeD();

        $data = [
        'reports' => $reports,
        'leaves' => $leaves,
        'announcements' => $announcements
        ];

        $this->view('admins/dashboard', $data);
    }
}
