<?php require 'views/master.php'; ?>


<?php
Session::init();
if (!empty(Session::get('removed_item'))) {
    echo '<p class="alert alert-danger">' . Session::get('removed_item') . '</p>';
    Session::destroy('removed_item');
}
?>

<h2>Product listing</h2>

<div class="col_row">
    <?php
    foreach ($this->items as $item)

        echo '<div class="col_item">' .
            '<a href="' . BASE_URL . '/index/viewItem/' . $item['url'] . '">' . $item['name'] . '</a>'
            . '<a href="' . BASE_URL . '/index/viewItem/' . $item['url'] . '" class="col_img-a"><img src="data:image/jpeg;base64,' . base64_encode($item['image']) . '" class="col_img"/></a>'
            . '<p>Price: <b>$' . $item['price'] . '</b></p>'
            . '</div>'
    ?>
</div>
