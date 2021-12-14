<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['delete_cart_submit'])) {
        /*call delete from cart method*/
        $deletedRecord = $Cart->deleteCart($_POST['item_id']);
    }
}
?>
<!-- Shopping cart -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75 mt-5">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>
        <!-- shopping cart items -->
        <div class="row">
            <div class="col-sm-8">
                <?php
                foreach ($product->getData('cart') as $item):
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item) {
                        ?>
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="Cart 1"
                                     class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unkown"; ?></h5>
                                <small>By <?php echo $item['item_brand'] ?? "Unkown brand"; ?></small>
                                <!-- Product rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-raleway font-size-14">20,534 ratings</a>
                                </div>
                                <!-- !product rating -->

                                <!-- Product Qty -->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-raleway w-25">
                                        <button class="qty-up border bg-light"
                                                data-id="<?php echo $item['item_id']; ?>"><i
                                                    class="fas fa-angle-up"></i>
                                        </button>
                                        <input data-id="<?php echo $item['item_id']; ?>" type="text"
                                               class="qty_input border px-2 w-100 bg-light text-center" disabled
                                               value="1"
                                               placeholder="1">
                                        <button data-id="<?php echo $item['item_id']; ?>"
                                                class="qty-down border bg-light"><i
                                                    class="fas fa-angle-down"></i></button>
                                    </div>
                                    <form method="POST">
                                        <input type="hidden" value=""<?php echo $item['item_id']; ?> name="item_id">
                                        <button name="delete_cart_submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                    </form>
                                    <button class="btn font-baloo text-danger px-3">Save for later</button>
                                </div>
                                <!-- !Product Qty -->
                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-baloo text-danger font-size-20">
                                    $<span class="product_price"><?php echo $item['item_price'] ?? 0; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- !cart item -->
                        <?php
                        return $item['item_price'];
                    }, $cart);
                endforeach;
                ?>
            </div>
            <!-- Subtotals section -->
            <div class="col-sm-4">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-raleway text-success py-3">
                        <i class="fas fa-check"></i> Your order is eligible for FREE delivery
                    </h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal (<?php echo count($subTotal); ?> items)&nbsp;<span class="text-danger">$<span
                                        class="text-danger" id="deal-price">
                                    <?php
                                        echo isset($subTotal)?$Cart->getSum($subTotal):0;
                                    ?>
                                </span></span></h5>
                        <button type="submit" class="btn btn-warning mt-3">prceed to buy</button>
                    </div>
                </div>
            </div>
            <!-- !Subtotals section -->
        </div>
        <!-- !shopping cart items -->
    </div>
</section>
<!-- !Shopping cart -->