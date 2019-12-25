<div id="notes">

<?php

foreach ($notes as $note) { ?>
    <div><?= $note['title']; ?></div>
    <div><?= $note['description']; ?><span>edit</span></div>
    <hr>

    <input type="text" name="note_title" value="<?= $note['title'] ?>" placeholder="Titel" />
    <input type="text" name="note_description" value="<?= $note['description'] ?>" placeholder="Beschreibung" />
    <button type="button" class="note-read" value="<?= $note['id'] ?>">read</button>
    <button type="button" class="note-upd" value="<?= $note['id'] ?>">upd</button>
    <button type="button" class="note-del" value="<?= $note['id'] ?>">del</button>
<?php } ?>
</div>
