<?php require 'views/master.php'; ?>

<div class="item_container">
    <?php echo '<p class="item_title">' . $this->item['name'] . '</p>'
        . '<img src="data:image/jpeg;base64,' . base64_encode($this->item['image']) . '"/>' .
        '<p class="item_price">Price: <b>$' . $this->item['price'] . '</b></p>' .
        '<div class="item_desc_container">' .
        '<p class="item_desc_title">Description</p>' .
        '<p class="item_desc">' . $this->item['description'] . '</p>' .
        '</div>'
    ?>
    <form action="/ProductCatalog/index/removeItem/<?php echo $this->item['url'] ?>" method="POST">
        <input type="submit" class="btn btn-danger" value="&#10006; Remove item">
    </form>

</div>
