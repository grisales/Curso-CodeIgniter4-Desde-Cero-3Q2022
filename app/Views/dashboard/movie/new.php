<?= view("dashboard/partials/_form-error"); ?>
<form action="create" method="post" enctype="multipart/form-data">
    <?= view("dashboard/movie/_form",['textButton' => 'Guardar','created' => true]); ?>
</form>