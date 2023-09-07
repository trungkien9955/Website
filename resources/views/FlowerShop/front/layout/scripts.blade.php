<?php
use App\Models\FlowerShop\ProductFilter;
$filters = ProductFilter::filters();
?>
<script>
    $(document).ready(function(){
        function get_filter(class_name){
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            })
            return filter;
        }
        $('#sorter').on('change', function(){
            var brand = get_filter('brand');
            var size = get_filter('size');
            var color = get_filter('color');
            var sorter = $('#sorter').val();
            var url = $('#url').val();
            @foreach($filters as $filter){
                var {{$filter['filter_column']}} = get_filter('{{$filter['filter_column']}}');
            }
            @endforeach
            console.log(brand, size, color, sorter, url, @foreach($filters as $filter)
                 {{$filter['filter_column']}}, @endforeach);
            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'GET',
                url:url,
                data: {brand:brand, size:size, color:color, sorter:sorter, url, @foreach($filters as $filter) {{$filter['filter_column']}}:{{$filter['filter_column']}}, @endforeach},
                success: function(resp){
                    // alert(resp);
                    $('.filter-products-container').html(resp);
                },
                error: function(){
                    alert('error');
                }
            })
        })
        $('.brand').on('change', function(){
            var brand = get_filter('brand');
            var size = get_filter('size');
            var color = get_filter('color');
            var sorter = $('#sorter').val();
            var url = $('#url').val();
            @foreach($filters as $filter){
                var {{$filter['filter_column']}} = get_filter('{{$filter['filter_column']}}');
            }
            @endforeach
            console.log(brand, size, color, sorter, url, @foreach($filters as $filter)
                 {{$filter['filter_column']}}, @endforeach);
            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'GET',
                url:url,
                data: {brand:brand, size:size, color:color, sorter:sorter, url, @foreach($filters as $filter) {{$filter['filter_column']}}:{{$filter['filter_column']}}, @endforeach},
                success: function(resp){
                    // alert(resp);
                    $('.filter-products-container').html(resp);
                },
                error: function(){
                    alert('error');
                }
            })
        })
        $('.color').on('change', function(){
            var brand = get_filter('brand');
            var size = get_filter('size');
            var color = get_filter('color');
            var sorter = $('#sorter').val();
            var url = $('#url').val();
            @foreach($filters as $filter){
                var {{$filter['filter_column']}} = get_filter('{{$filter['filter_column']}}');
            }
            @endforeach
            console.log(brand, size, color, sorter, url, @foreach($filters as $filter)
                 {{$filter['filter_column']}}, @endforeach);
            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'GET',
                url:url,
                data: {brand:brand, size:size, color:color, sorter:sorter, url, @foreach($filters as $filter) {{$filter['filter_column']}}:{{$filter['filter_column']}}, @endforeach},
                success: function(resp){
                    // alert(resp);
                    $('.filter-products-container').html(resp);
                },
                error: function(){
                    alert('error');
                }
            })
        })
        $('.size').on('change', function(){
            var brand = get_filter('brand');
            var size = get_filter('size');
            var color = get_filter('color');
            var sorter = $('#sorter').val();
            var url = $('#url').val();
            @foreach($filters as $filter){
                var {{$filter['filter_column']}} = get_filter('{{$filter['filter_column']}}');
            }
            @endforeach
            console.log(brand, size, color, sorter, url, @foreach($filters as $filter)
                 {{$filter['filter_column']}}, @endforeach);
            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'GET',
                url:url,
                data: {brand:brand, size:size, color:color, sorter:sorter, url, @foreach($filters as $filter) {{$filter['filter_column']}}:{{$filter['filter_column']}}, @endforeach},
                success: function(resp){
                    // alert(resp);
                    $('.filter-products-container').html(resp);
                },
                error: function(){
                    alert('error');
                }
            })
        })
    })
</script>