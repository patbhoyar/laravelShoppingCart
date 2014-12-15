$(function(){

    var totalCost = 0;

    if($("#totalCostofWishlist").data('total-cost') > 0){
        $("#productsInWishlist").css('display', 'inline-table');
        $("#totalDisplayTable").css('display', 'inline-table');
    }else{
        $("#noProdsInWishlist").css('display', 'block');
    }

    $(document).on('click', '.addProductToWishlist', function(e){
        e.preventDefault();
        var selectedNode = $(this);
        $.ajax({
            url: 'http://localhost:8888/projects/laravelShoppingCart/public/product/'+$(this).data('product-id')+'/addToWishlist',
            type: 'get',
            data: {},
            success: function(data){
                if(data == 'success'){
                    selectedNode.removeClass().addClass('btn btn-success');
                    selectedNode.find('i').removeClass('glyphicon-heart').addClass('glyphicon-ok');
                    selectedNode.find('span').text('Item in Wishlist');
                }
            }
        });
    });

    $(document).on('click', '.removeProductFromWishlist', function(e){
        e.preventDefault();
        var selectedNode = $(this).parent().parent();
        var that = $(this);
        $.ajax({
            url: 'http://localhost:8888/projects/laravelShoppingCart/public/product/'+$(this).data('product-id')+'/removeFromWishlist',
            type: 'get',
            data: {},
            success: function(data){
                var retData = $.parseJSON(data);
                if(retData.code == 100 && retData.message == "success"){
                    processRemovalOfProduct(that, selectedNode);
                }
            }
        });
    });


    $(document).on('click', '.moveProductToCart', function(e){
        e.preventDefault();
        var selectedNode = $(this).parent().parent();
        var that = $(this);
        $.ajax({
            url: 'http://localhost:8888/projects/laravelShoppingCart/public/product/'+that.data('product-id')+'/moveToCart',
            type: 'get',
            data: {},
            success: function(data){
                var retData = $.parseJSON(data);
                if(retData.code == 100 && retData.message == "success"){
                    processRemovalOfProduct(that, selectedNode);
                }
            }
        });
    });

    function processRemovalOfProduct(that, selectedNode){
        if(totalCost == 0){
            totalCost = $('#totalCostofWishlist').data('total-cost');
        }
        var itemCost = that.data('cost');
        var newTotalCost = totalCost - itemCost;
        totalCost = (newTotalCost < 0)?0:newTotalCost;

        if(totalCost == 0){
            $("#productsInWishlist").css('display', 'none');
            $("#totalDisplayTable").css('display', 'none');
            $("#noProdsInWishlist").css('display', 'block');
        }else{
            $.data('total-cost', totalCost);
            $('#totalCostofWishlist').text(totalCost.toLocaleString());
        }

        selectedNode.remove();
    }

});