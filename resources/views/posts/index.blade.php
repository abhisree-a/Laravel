@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{$post->user->id}}">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </a>
           
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                <p>
                    <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}" class="pr-2">
                        <span class="text-dark">{{$post->user->username}}</span>
                    </a>
                    </span>{{$post->caption}}
                </p>
            </div>
        </div>
    </div>
   @endforeach
   <div class="row">
       <div class="col-12">
            {{$posts->links()}}
       </div>
   </div>
</div>
@endsection
