jQuery(function($){
    $('#page_product_row').hide();

    $('.page_column_switcher').click(function(){
        $('#page_product_row').hide();
        $('#page_product_col').show();
    });

    $('.page_row_switcher').click(function(){
        $('#page_product_col').hide();
        $('#page_product_row').show();
    });


});
