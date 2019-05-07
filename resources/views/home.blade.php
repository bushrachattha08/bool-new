@extends('layouts.app')
<style type="text/css">
   .avatar{
     border-radius: 100%;
     max-width: 100px;
}
   .profile{
     align-items: left;
   }
   .posts{
     align-items: center;
   }
   </style>
@section('content')
<div class="banner_area banner_2">
    <img src="images/blog-banner.jpg" alt="" class="banner_img">
    <div class="media profile_picture">
      <div class="profile" alt="" class="circle">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-4">
          @if(!empty($profile))
          <img src="{{ $profile->profile_pic }}"
          class="" alt=""/>
          @else
          <img src="{{ url('images/avatar.png') }}"
          class="avatar" alt=""/>
          @endif
          @if(!empty($profile))
          <p class="media_body">{{ $profile->name }}</p>
          @else
      <p></p>
          @endif
          @if(!empty($profile))
        <p class="media_body">{{ $profile->designation }}</p>
          @else
        <p></p>
          @endif
        </div>
      </div>

    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @if(count($errors) > 0)
             @foreach($errors->all() as $error)
             <div class="alert alert-danger">{{$error}}</div>
            @endforeach
          @endif

           @if(session('response'))
            <div class="alert alert-success">{{session('response')}}</div>
           @endif

            <div class="card">
                <div class="card-header">
                   <div class="panel panel-default text-center">
                     <div class="panel-heading">
                       <div class="row">
                         <div class="col-md-4">Blog</div>
                         <div class="col-md-8">
                           <form method="POST" action= '{{ url("/search")}}' >
                             {{csrf_field()}}
                             <div class="input-group">
                               <input type="text"  name="search" class="form-control"
                               placeholder="Search for....">
                               <span class="input-group-btn">
                                 <button type="submit" class="btn btn-default">
                                   Go!
                                 </button>
                               </span>

                             </div>
                           </form>
                         </div>
                       </div>
                     </div>
                      <div class="col-md-8" >
                        <div class="posts">
                        @if(count($posts) > 0)
                        @foreach($posts ->all() as $post)
                        <h4>{{ $post->post_title}}</h4>

                        <img src=" {{ $post->post_image }}" alt="">
                        <p>{{ substr( $post->post_body, 0,150) }}</p>
                         <ul class="nav nav-pills">
                           <li role="presentation">
                             <a href='{{ url("/view/{$post->id}") }}' >
                               <span class="far fa-eye" > VIEW </span>
                             </a>
                           </li>
                            @if(Auth::id() ==12)
                               <li role="presentation">
                                 <a href='{{ url("/edit/{$post->id}") }}'>
                                  <span class="fas fa-edit" > Edit</span>
                                </a>
                               </li>
                           <li role="presentation">
                             <a href='{{ url("/delete/{$post->id}") }}'>
                               <i class="fas fa-trash-alt" >  Delete </i>
                             </a>
                           </li>
                           @endif
                         </ul>
                        <cite style="">Posted on: {{ date('M j,Y H:i',
                           strtotime($post->updated_at))}}</cite>
                        <hr/>
                            @endforeach
                            @else
                            <p> No Post Available</p>

                            @endif
                            {{$posts->links()}}

                </div>
            </div>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>
@endsection
