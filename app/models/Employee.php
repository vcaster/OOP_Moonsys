<?php
class Employee
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getEmployees()
    {
        $status = '0';
        $this->db->query(' SELECT * FROM empdetails WHERE deleted = :status  ');
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }
    public function getFiles()
    {
        //$status = '0';
        $this->db->query('SELECT * FROM files f INNER JOIN empdetails e ON f.empid=e.empid ORDER BY f.empid ASC');
        // $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getDept()
    {
        //$status = '0';
        $this->db->query('SELECT * FROM departments');
        // $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getReports()
    {
        //$status = '0';
        $this->db->query('SELECT * FROM reports r INNER JOIN empdetails e ON r.empid=e.empid ORDER BY r.empid DESC;');
        // $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }
    public function getReportsD()
    {
        //$status = '0';
        $this->db->query('SELECT * FROM reports r INNER JOIN empdetails e ON r.empid=e.empid INNER JOIN positions p ON e.positionid=p.positionid INNER JOIN departments d ON e.deptid=d.deptid INNER JOIN managerid m ON d.managerid=m.managerID ORDER BY r.empid DESC LIMIT 0,3;');
        // $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }
    public function getOnleaveD()
    {
        //$status = '0';
        $this->db->query('SELECT * FROM leaves l INNER JOIN empdetails e ON e.empid=l.empid INNER JOIN positions p ON e.positionid=p.positionid INNER JOIN departments d ON e.deptid=d.deptid INNER JOIN managerid m ON d.managerid=m.managerID WHERE NOT ( CURDATE() >= endDate OR CURDATE() <= startDate ) ORDER BY leaveid DESC LIMIT 0,3; ');
        // $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }
    public function getOnleave()
    {
        //$status = '0';
        $this->db->query('SELECT * FROM leaves l INNER JOIN empdetails e ON e.empid=l.empid INNER JOIN positions p ON e.positionid=p.positionid INNER JOIN departments d ON e.deptid=d.deptid INNER JOIN managerid m ON d.managerid=m.managerID WHERE NOT ( CURDATE() >= endDate OR CURDATE() <= startDate ) ORDER BY leaveid DESC');
        // $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }
    public function getFilesU($id)
    {
        //$status = '0';
        $this->db->query('SELECT * FROM files f INNER JOIN empdetails e ON f.empid=e.empid WHERE e.empID= :id ORDER BY f.empid ASC ');
        $this->db->bind(':id', $id);
        $results = $this->db->resultSet();

        return $results;
    }

    public function getPays($id)
    {
        //$status = '0';
        $this->db->query('SELECT *,SUM(amountPaid) as sum FROM paylog p INNER JOIN empdetails e ON p.empid=e.empid INNER JOIN salary s ON s.empid=e.empid WHERE e.empID= :id ORDER BY p.payLogID');
        $this->db->bind(':id', $id);
        $results = $this->db->resultSet();

        return $results;
    }
    public function getSalary($id)
    {
        //$status = '0';
        $this->db->query('SELECT * FROM salary s INNER JOIN empdetails e ON s.empid=e.empid WHERE s.empID= :id ORDER BY salaryID');
        $this->db->bind(':id', $id);
        $results = $this->db->resultSet();

        return $results;
    }
  
    public function getEmpdetails($id)
    {
        $this->db->query('SELECT * FROM empdetails e INNER JOIN positions p ON e.positionid=p.positionid INNER JOIN departments d ON e.deptid=d.deptid INNER JOIN managerid m ON d.managerid=m.managerID WHERE e.empID = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
    public function getFilesdetails($id)
    {
        $this->db->query('SELECT * FROM empdetails e INNER JOIN positions p ON e.positionid=p.positionid INNER JOIN departments d ON e.deptid=d.deptid INNER JOIN managerid m ON d.managerid=m.managerID INNER JOIN files f ON f.empID=e.empID WHERE f.filesID = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
    public function getReportsdetails($id)
    {
        $this->db->query('SELECT * FROM empdetails e INNER JOIN positions p ON e.positionid=p.positionid INNER JOIN departments d ON e.deptid=d.deptid INNER JOIN managerid m ON d.managerid=m.managerID INNER JOIN reports r ON r.empID=e.empID WHERE r.reportID = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
    public function getLeavesapp()
    {
        $status = '1';
        $this->db->query('SELECT * FROM empdetails e INNER JOIN positions p ON e.positionid=p.positionid INNER JOIN departments d ON e.deptid=d.deptid INNER JOIN managerid m ON d.managerid=m.managerID INNER JOIN leaves l ON e.empid=l.empid WHERE statusL=:status');
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }
    public function getLeavesdisa()
    {
        $status = '0';
        $this->db->query('SELECT * FROM empdetails e INNER JOIN positions p ON e.positionid=p.positionid INNER JOIN departments d ON e.deptid=d.deptid INNER JOIN managerid m ON d.managerid=m.managerID INNER JOIN leaves l ON e.empid=l.empid WHERE statusL=:status');
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }
    public function getLeavedetails($id)
    {
        $this->db->query('SELECT * FROM empdetails e INNER JOIN positions p ON e.positionid=p.positionid INNER JOIN departments d ON e.deptid=d.deptid INNER JOIN managerid m ON d.managerid=m.managerID INNER JOIN leaves l ON e.empid=l.empid WHERE leaveid= :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();

        return $row;
    }
    public function getAnnonuce($id)
    {
        $this->db->query('SELECT * FROM announcement WHERE ID= :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();

        return $row;
    }
    public function getAnnonucee()
    {
        $status = '0';
        $this->db->query('SELECT * FROM announcement a INNER JOIN empdetails e ON a.empid=e.empid INNER JOIN departments d ON a.deptID=d.deptid WHERE statusA=:status');
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }
    public function getAnnonuceeD()
    {
        $status = '0';
        $this->db->query('SELECT * FROM announcement a INNER JOIN empdetails e ON a.empid=e.empid INNER JOIN departments d ON a.deptID=d.deptid WHERE statusA=:status ORDER BY a.ID DESC LIMIT 0,3');
        $this->db->bind(':status', $status);
        $results = $this->db->resultSet();

        return $results;
    }
    public function getAnnonuceep($id)
    {
        $this->db->query('SELECT * FROM announcement a INNER JOIN empdetails e ON a.empid=e.empid INNER JOIN departments d ON a.deptID=d.deptid INNER JOIN managerid m ON d.managerid=m.managerID INNER JOIN positions p ON e.positionid=p.positionid WHERE a.ID = :id ');
        $this->db->bind(':id', $id);
        $row = $this->db->single();

        return $row;
    }
    public function announcedelete($id)
    {
        $status = '1';
      // $hireDate = $DateTime;
        $this->db->query('UPDATE announcement SET statusA = :status WHERE ID=:id');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', $status);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function announceupload($data)
    {
        
      // $hireDate = $DateTime;
        $this->db->query('INSERT INTO announcement(deptID, announcement,empID) VALUES(:dept, :announce, :empid)');
        $this->db->bind(':dept', $data['dept']);
        $this->db->bind(':announce', $data['announce']);
        $this->db->bind(':empid', $data['id']);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function filesupload($data)
    {
        
      // $hireDate = $DateTime;
        $this->db->query('INSERT INTO files(filename, name,pathF,empID) VALUES(:filename, :name, :pathf, :empid)');
        $this->db->bind(':filename', $data['filename']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':pathf', $data['dest']);
        $this->db->bind(':empid', $data['id']);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function update($data)
    {
        date_default_timezone_set("Africa/Lagos");
        $CurrentTime=time();
        $DateTime=strftime("%Y-%m-%d", $CurrentTime);
        $managerID = 0;
        $filesID = 0;
        $deleted = 0;
      // $hireDate = $DateTime;
        $this->db->query('UPDATE empdetails SET firstname= :firstName, lastName= :lastName, middleName= :middleName, email= :email, phone = :phone, birthDate= :birthDate, age= :age, nationality= :nationality, address= :address WHERE empID = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':firstName', $data['fname']);
        $this->db->bind(':lastName', $data['lname']);
        $this->db->bind(':middleName', $data['mname']);
        $this->db->bind(':email', $data['email']);
      // $this->db->bind(':position', $data['position']);
      // $this->db->bind(':dept', $data['dept']);
        $this->db->bind(':birthDate', $data['birthdate']);
        $this->db->bind(':age', $data['age']);
        // $this->db->bind(':sex', $data['sex']);
        $this->db->bind(':phone', $data['phonen']);
        $this->db->bind(':nationality', $data['nationality']);
        $this->db->bind(':address', $data['address']);
      // $this->db->bind(':deleted', $deleted);
      // $this->db->bind(':hireDate', $hireDate);
      // $this->db->bind(':manger', $managerID);
      // $this->db->bind(':files', $filesID);
      

      // $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($id)
    {
        $status = '1';
      // $hireDate = $DateTime;
        $this->db->query('UPDATE empdetails SET deleted= :status WHERE empID = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', $status);
       
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function leaveapp($id)
    {
        $status = '1';
      // $hireDate = $DateTime;
        $this->db->query('UPDATE leaves SET statusL= :status WHERE leaveid = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', $status);
       
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function leavedisa($id)
    {
        $status = '2';
      // $hireDate = $DateTime;
        $this->db->query('UPDATE leaves SET statusL= :status WHERE leaveid = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', $status);
       
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
