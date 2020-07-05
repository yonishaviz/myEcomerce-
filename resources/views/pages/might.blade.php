
<table>

@foreach($might as $product)

    <td>
        <div>
    <a href ="/{{$product->slug}}">
    <img style="width:40%" src= "{{asset('storage/cover_images/'.$product->slug.'.jpg')}}" alt="product"> 
    </a>
        </div>
        <div>
   &nbsp&nbsp&nbsp&nbsp&nbsp <a href ="{{route('shop.show',$product->slug)}}">{{$product->name}}</a>
        </div>
        <div>
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <small>{{$product->price}}</small>
        </div>
            </td>
    


@endforeach

  </table>
