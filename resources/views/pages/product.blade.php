@extends('layouts.app')
@section('content')
    
<div>
    
    <img style="width:10%" src= "{{asset('storage/cover_images/'.$product->slug.'.jpg')}}" alt="product">
    </div>

    <div>
         <div><h1>{{$product->name}}</h1></div>
        <div>{{$product->details}}</div>

        <div><h1>{{$product->price}}</h1></div>
        <p>{{$product->desc}}</p>
            </div>
    <input type="hidden" name="id" value="{{$product->id}}">
    <input type="hidden" name="name" value="{{$product->name}}">
    <input type="hidden" name="price" value="{{$product->price}}">
    <button class="btn btn-success btn-submit">Add to Cart</button>




<hr>
<h2>you might like</h2>
<script type="text/javascript">

   

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

   

    $(".btn-submit").click(function(e){

  

        e.preventDefault();

   

        var id = $("input[name=id]").val();

        var name = $("input[name=name]").val();

        var price = $("input[name=price]").val();

   

        $.ajax({

           type:'POST',

           url:"{{ route('cart.store') }}",

           data:{id:id, name:name, price:price},

           success:function(data){

              alert('item added to cart');

           }

        });

  

	});

</script>
@include('pages.might')
@endsection
   