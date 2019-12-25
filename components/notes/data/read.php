<h2>VIEW READ</h2>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/as/components/notes/Model.php";

if (isset($_POST["id"])) {

    $id = $_POST['id'];

    $data = new Model();
    $note = $data->read($id); ?>

    <h3><?= $note['title']; ?></h3>
    <p><?= $note['description']; ?></p>

<?php } ?>