<?php
// lấy danh sách hoc viên 
    function getAllStudents()
    {
        global $conn;
        $sql ="SELECT *FROM students,faculty where students.faculty_id=faculty.id
        order by students.created_at DESC";
        $query = mysqli_query($conn,$sql);

        $result = array();
        while ($data = mysqli_fetch_assoc($query))
        {
            $result[]=$data;
        }
        return $result; 
    }

// Thêm học viên 
    function addStudent()
    {
        global $conn;
        $id = (int)$_POST['faculty'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $sqlInsert = "INSERT INTO students(faculty_id,name,email,phone,address) 
                values($id,'$name','$email','$phone','$address')";
        $queryInsert = mysqli_query($conn,$sqlInsert);
    }
    