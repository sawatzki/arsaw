<button type="button" class="btns example-seeder">EXAMPLE-SEEDER</button>
<button type="button" class="btns user-seeder">USER-SEEDER</button>
<button type="button" class="btns turn-cate">TURN CATE</button>
<button type="button" class="btns row-new">ERSTELLEN</button>
<hr>
<div class="row-new-form">
    <input name="title" type="text" class="input-text-edit" placeholder="Titel">
    <textarea name="description" class="input-text-edit" type="text" placeholder="Beschreibung"></textarea>
    <input id="row-save" class="btns" value="Speichern"/>
</div>

<div id="root">
    <div class="modal fade" id="modal-row-read" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document"></div>
    </div>
    <div class="rows"></div>
</div>