@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Post View</div>
                <div class="card-body">

                    <div class="col-md-4">
                      <ul class="list-group">
                        @if(count($categories) > 0)
                          @foreach($categories->all() as $category)
                             <li class="list-group-item"><a href='{{ url("category/{$category->id}") }}'>
                             {{ $category->category }}</a> </li>
                          @endforeach
                        @else
                          <p>No Category Found!</p>
                        @endif

                      </ul>

                    </div>
                      <div class="col-md-8" >
                        @if(count($posts) > 0)
                        @foreach($posts ->all() as $post)
                        <h4>{{ $post->post_title}}</h4>
                        <hr>
                        <img src=" {{ $post->post_image }}" alt="">
                        <p>{{  $post->post_body, }}</p>
                         <ul class="nav nav-pills">
                           <li role="presentation">
                             <a href='{{ url("/like/{$post->id}") }}' >
                               <span class="fa fa-thumbs-up" > Like({{$likeCtr}}) </span>
                             </a>
                           </li>

                           <li role="presentation">
                             <a href='{{ url("/dislike/{$post->id}") }}'>
                               <span class="fa fa-thumbs-down" > Dislike()</span>
                             </a>
                           </li>
                           <li role="presentation">
                             <a href='{{ url("/comment/{$post->id}") }}'>
                               <i class="fa fa-comment-0" >  Comment </i>
                             </a>
                           </li>
                         </ul>
                        <cite style="">Posted on: {{ date('M j,Y H:i',
                           strtotime($post->updated_at))}}</cite>
                        <hr/>
                            @endforeach
                            @else
                            <p> No Post Available</p>

                            @endif

                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
