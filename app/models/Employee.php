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
  
    public function getEmpdetails($id)
    {
        $this->db->query('SELECT * FROM empdetails e INNER JOIN positions p ON e.positionid=p.positionid INNER JOIN departments d ON e.deptid=d.deptid WHERE empID = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
    public function getLeaves()
    {
        $this->db->query('SELECT * FROM empdetails e INNER JOIN positions p ON e.positionid=p.positionid INNER JOIN departments d ON e.deptid=d.deptid INNER JOIN leaves l ON e.empid=l.empid');
 
        $results = $this->db->resultSet();

        return $results;
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
}
