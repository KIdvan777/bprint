<section class="top_hits_1_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wrapper">
                <div class="section_heading flex center-horizontal">
                    <h2>RECOMMENDATIONS FOR YOU</h2>
                </div>
                <div class="section_desctiption flex center-horizontal">
                    <p>They key is to have every key, the key to open every door. We don`t see them, we will never see them</p>
                </div>
                <div class="top_hits_1_line">

                </div>
                <ul class="top_hits_1_items col-md-12 flex">
                    <?php
                        $products = wc_get_products( $args );

                           foreach($products as $product):
                               // pr($product);
                               $product_name = $product->get_name();
                               $product_price = $product->get_price();
                               $product_desc = $product->get_short_description();
                               $product_sale = $product->get_sale_price();
                               $image_url = wp_get_attachment_image_src($product->get_image_id());
                           ?>
                            <li class="top_hits_1_item col-md-4">
                               <a href="#" class="flex">
                                   <div class="top_hits_1_item_img">
                                       <img src="<? echo $image_url[0];?>" alt="">
                                   </div>
                                   <div class="top_hits_1_item_content">
                                       <h2><?php  echo $product_name; ?></h2>
                                       <?php echo $product_desc; ?>
                                       <span class="top_hits_1_item_content_price_old"><?php echo $product_price; ?></span>
                                       <span class="top_hits_1_item_content_price"><?php echo $product_sale ; ?></span>
                                   </div>
                                   <div class="top_hits_1_item_sale">
                                       -35%
                                   </div>
                               </a>
                            </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</section>
