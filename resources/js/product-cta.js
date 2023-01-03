$(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#add-product').on('click', function(){

        $('#modalLabel').html('Add Product');
        $('#product-form .modal-footer .action-btn').html('Add Product');
        $('#product-form form').attr('action', '/product/store');
        $('#name').val('');
        $('#cost').val('');
        $('#category_id').val(1);
        $('#qty').val(1);
        $('#oldFile').hide();

    });
    
    $('.info-product').on('click', function(){

        const id = $(this).data('id');
        document.location.href = '/product/show/' + id;

    });

    $('.edit-product').on('click', function(){

        $('#modalLabel').html('Edit Product');
        $('#product-form .modal-footer .action-btn').html('Save Changes');
        
        const id = $(this).data('id');
        $('#product-form form').attr('action', '/product/update/' + id);

        $.ajax({
            type: 'POST',
            url: '/product/edit',
            data: {id: id},
            dataType: 'json',
            success: function(data){
                
                $('#name').val(data.name);
                $('#cost').val(data.cost);
                $('#category_id').val(data.category_id);
                $('#qty').val(data.qty);
                $('#oldFile').show();
                $('#oldFile').val(data.photo);
            }

        });
    });

    $('.delete-product').on('click', function(){

        const id = $(this).data('id');
        document.location.href = '/product/delete/' + id;

    });
});