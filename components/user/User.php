<?php

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..' . $ds . '..') . $ds;

include_once "{$base_dir}BaseModel.php";

class User extends BaseModel
{
    public function index($startFrom, $rowsCount)
    {
        $data = null;

        $query = "SELECT u.id, u.login, r.role, u.first_name, u.last_name, u.email, u.mobile, u.tel, u.address, u.info, u.created, r.role
            FROM users AS u
            LEFT JOIN roles AS r ON r.id = u.role_id
            ORDER BY u.id 
            DESC LIMIT $startFrom, $rowsCount";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;
    }

    public function read($id)
    {
        $data = null;

        $query = "SELECT * FROM examples WHERE id = '$id'";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();

        return $data;
    }

    public function destroy($id)
    {
        $data = null;

        $query = "DELETE FROM examples WHERE id = '$id'";

        if ($stmt = $this->conn->exec($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id, $active)
    {
        $data = null;

        $query = "UPDATE examples SET active = $active WHERE id = '$id'";

        if ($stmt = $this->conn->exec($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data)
    {
        $query = "UPDATE examples SET title='$data[title]', description='$data[description]' WHERE id='$data[id]'";
        if ($stmt = $this->conn->exec($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function insert()
    {

        if (isset($_POST['title'])) {
            if (!empty($_POST['title'])) {

                $title = $_POST['title'];
                $description = $_POST['description'];

                $query = "INSERT INTO examples (title, description, active) VALUES ('$title', '$description', '1')";
                if ($stmt = $this->conn->exec($query)) {
                    return "inserted";
                } else {
                    return "NOT inserted";
                }

            }
        }


    }


    public function seeds($data)
    {
        $query = "INSERT INTO examples (title, description, active) VALUES ('$data[title]', '$data[description]', '1')";
        if ($stmt = $this->conn->exec($query)) {
            return "inserted";
        } else {
            return "NOT inserted";
        }
    }

    public function turncate()
    {
//        die();
        $query = "TRUNCATE TABLE examples";
//        echo $query;
        if ($stmt = $this->conn->exec($query)) {
            echo $stmt;
        } else {
            echo $stmt;
        }
    }


}
