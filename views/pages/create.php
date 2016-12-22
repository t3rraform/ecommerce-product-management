<?php require 'views/master.php'; ?>

<?php
Session::init();
if (!empty(Session::get('created_item'))) {
    echo '<p class="alert alert-success">' . Session::get('created_item') . '</p>';
    Session::destroy('created_item');
}
if (!empty(Session::get('failed'))) {
    echo '<p class="alert alert-danger">' . Session::get('failed') . '</p>';
    Session::destroy('failed');
}
?>

<h2>Create Item</h2>

<div class="create_form_wrapper">

    <div class="create_form">
        <form action="create/createProduct" method="POST" id="create_form" enctype="multipart/form-data">
            <p>Name:</p>
            <input type="text" name="name">

            <p>Description:</p>
            <textarea rows="4" cols="22" name="description" form="create_form"></textarea>

            <p>Price:</p>
            <input type="text" name="price"><br><br>

            <p>Upload image</p>
            <input type="file" name="image"><br><br>
            <input type="submit" value="Create item" class="btn btn-primary">

        </form>
    </div>
</div>

<script>


</script>