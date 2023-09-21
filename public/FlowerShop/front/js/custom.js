$(document).ready(function(){
    $('.size_option').on('click', function(){
       var product_id = $('#product_id').val();
        var size = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "post",
            url: "/size-selection",
            data: {product_id: product_id, size:size},
            success: function(resp){
                $('.information-price').html(resp.view);
                $('.info-code .attr-sku').html(resp.attr_sku);

                if(resp.attr_stock > 0) {
                    $('.info-stock span.stock-data').html(resp.attr_stock);
                    $('.stock-check').html("<span style = 'color: #5CB85C;font-weight: 700;'>Còn hàng</span>");
                }else{
                    $('.info-stock span.stock-data').html("0");
                    $('.stock-check').html("<span style = 'color: #e02027;font-weight: 700;' >Tạm hết hàng</span>");
                }
                // $('.easyzoom1 a').attr('href',"/FlowerShop/front/images-3/product_images/large/" + $image)
                // $('.product-detail-image img').attr('src',"/FlowerShop/front/images-3/product_images/medium/"+ $image)
            },
            error: function(){
                alert('error');
            }
        })
    })
    $('.color_option').on('click', function(){
        var color = $(this).val();
        // alert(color);
        var product_id = $('#product_id').val();
         $.ajax({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
             method: "post",
             url: "/color-selection",
             data: {product_id: product_id, color:color},
             success: function(resp){
                 $image = resp.image;
                 $('.product-detail-image img').attr('src',"/FlowerShop/front/images-3/product_images/medium/"+ $image)
             },
             error: function(){
                 alert('error');
             }
         })
     })
     //product comment
})
// $(document).on('click', '.pagination a', function(event){
//     event.preventDefault();
//     var page = $(this).attr('href').split('page=')[1];
//     var product_id = $('#product_id').val();
//     $.ajax({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         method: "post",
//         url: "/product-comment",
//         data: {product_id: product_id},
//         success:function(resp){
//             $('.review-data-items').html(resp);
//         },
//         error: function(){
//             alert('Error');
//         }
//     })
// })
$(document).on('click', '.info-action .buy-button', function(){
    // event.preventDefault();
    var price_element = $('.info-price h4 span').html();
    var attr_sku = $('.attr-sku').html();
    var price_string = price_element.replace(',', '');
    var price = parseInt(price_string);
    // alert(price);
    $('#cart_form').append(`<input type = "hidden" name = "price" id = "price_${price} "value= "${price}">`);
    $('#cart_form').append(`<input type = "hidden" name = "attr_sku" id = "sku_${attr_sku} "value= "${attr_sku}">`);

})
$(document).on('click', '.cart-item-delete-btn', function(){
    $confirm = confirm('Xóa sản phẩm này khỏi giỏ hàng?')
    if($confirm)
    var cart_item_id = $(this).data('cart-item-id');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'post',
        url: '/cart/delete',
        data: {cart_item_id: cart_item_id},
        success: function(resp){
            $('.cart-table-container').html(resp.view);
        },
        error: function(){
            alert('error');
        }
    })
})
