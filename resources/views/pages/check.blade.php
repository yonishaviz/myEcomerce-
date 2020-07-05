@extends('layouts.app')
@section('content')

<h1>&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp your order</h1>
<div>
@foreach(Cart::content() as $item)
        <table>

        <td>
    <img style="width:30%" src="{{asset('storage/cover_images/'.$item->model->slug.'.jpg')}}" alt="item"><br>
   &nbsp&nbsp {{$item->model->name}}
        </td>
             <td> 
   {{$item->qty}}

             </td>
           
                <td> &nbsp&nbsp &nbsp&nbsp
   {{$item->subtotal}}

             </td>
    </table>
<hr>
   
@endforeach
     
	
    <div> 
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Subtotal: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  
         &nbsp&nbsp&nbsp&nbsp&nbsp{{Cart::subtotal()}}
        <br>
        @if(session()->has('coupon'))
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Discount:   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {{$discount}}
        &nbsp&nbsp&nbsp&nbsp&nbsp
        coupon code({{session()->get('coupon')['name']}}) 
        <form action="{{route('coupon.destroy')}}" method="post" style="display:inline">
        {{csrf_field()}}
            {{method_field('delete')}}
            <button type="submit" style='font-size:12px'> remove</button>
        </form>
        <br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp NewSubTotal:
         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {{$newsub}}
        <br>

                @endif
        
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Tax(21%): &nbsp&nbsp&nbsp&nbsp    &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp{{$newtax}}
        <br>
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b> Total: &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {{$newtotal}}</b>
        @if(!session()->has('coupon'))

        <form action="{{route('coupon.store')}}" method="post">
            {{csrf_field()}} 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp have a code?
<br>    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="coupon_code"  id="coupon_code">
    <button class="btn btn-success btn-submit">Apply</button>
        </form>
   	
    </div>

		
@endif

@endsection
