<div id="data-read">
    <h2>VIEW READ</h2>
    <span class="rows-show-all">SHOW ALL</span>
    <?php

    $ds = DIRECTORY_SEPARATOR;
    $base_dir = realpath(dirname(__FILE__) . $ds . '..') . $ds;

    include_once "{$base_dir}Example.php";

    if (isset($_POST["id"])) {

        $id = $_POST['id'];

        $data = new Example();
        $note = $data->read($id); ?>


        <h3><?= $note['title']; ?></h3>
        <p><?= $note['description']; ?></p>

    <?php } ?>
</div>
