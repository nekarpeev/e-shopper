
<div class="single-products">

    <div class="productinfo text-center">
        <a href="/product/<?php echo $product['id']; ?>">
            <img src="template/images/home/product1.jpg" alt=""/>
        </a>
        <h2><?php echo $product['price']; ?></h2>
        <p>
            <a href="/product/<?php echo $product['id']; ?>"> <?php echo 'ID: ' . $product['id'] . ' ' . $product['title']; ?></a>
        </p>
        <a data-id="<?php echo $product['id'];?>" href="/cart/add/<?php echo $product['id'];?>" class="btn btn-default add-to-cart"><i
                class="fa fa-shopping-cart"></i>В корзину</a>
    </div>
    <?php if ($product['is_new']): ?>
        <img src="template/images/home/new.png" class="new" alt=""/>
    <?php endif; ?>
</div>