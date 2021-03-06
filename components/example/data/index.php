<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/as/components/example/Example.php";

$data = new Example();
$rows = $data->index();
?>

<button type="button" class="row-new">new</button>

<div class="row-new-form">
    <input name="title" type="text" placeholder="Titel">
    <input name="description" type="text" placeholder="Beschreibung">
    <button id="row-save">Speichern</button>
</div>


<?php foreach ($rows as $row) { ?>

    <div id="row-<?= $row['id'] ?>">
        <div id="row-title-<?= $row['id'] ?>"><?= $row['title']; ?></div>
        <div id="row-description-<?= $row['id'] ?>"><?= $row['description']; ?></div>
        <button class="example-read" value="<?= $row['id'] ?>">read</button>
        <button class="row-edit" value="<?= $row['id'] ?>">edit</button>
        <?php if ($row['active']) { ?>
            <button type="button" class="example-delete" value="<?= $row['id'] ?>">off</button>
        <?php } else { ?>
            <button type="button" class="example-delete" value="<?= $row['id'] ?>">on</button>
        <?php } ?>
        <button type="button" class="example-destroy" value="<?= $row['id'] ?>">des</button>
    </div>

    <div id="edit-row-<?= $row['id'] ?>" style="display: none">
        <input type="text" name="row_title_<?= $row['id'] ?>" value="<?= $row['title'] ?>" placeholder="Titel"/>
        <input type="text" name="row_description_<?= $row['id'] ?>" value="<?= $row['description'] ?>"
               placeholder="Beschreibung"/>
        <button class="row-update" value="<?= $row['id'] ?>">upd</button>
    </div>
    <hr>

<?php } ?>