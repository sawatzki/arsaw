<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/BaseModel.php";

class Example extends BaseModel
{
    public function index()
    {
        $data = null;

        $query = "SELECT * FROM examples WHERE active = 1 ORDER BY id DESC";

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

    public function delete($id)
    {
        $data = null;

        $active = false;

        $query = "UPDATE examples SET active = '$active' WHERE id = '$id'";

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
}
