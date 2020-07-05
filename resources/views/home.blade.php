@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<a href="/posts/create">create post</a>
                    <h3>your blog posts</h3>
                    @if(count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                        <th></th>
                        <th></th>
                
                        </tr>
                    
                    <tr>
                        @foreach($posts as $post)
                        
                        
                        <th><a href="/posts/{{$post->id}}">{{$post->title}}</a></th>
                
                        </tr>
                    @endforeach
                    </table>
                    @else
                    <p>you have no posts</p>
                    @endif
                    
                    
   </div>
            </div>
        </div>
    </div>
</div>
@endsection
