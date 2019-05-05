@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Edit Post</div>

                <div class="card-body">
                <div class="row">
                  <form class="form-horizontal" method="POST" action="{{ url('editPost',array($posts->id)) }}"
                  enctype="multipart/form-data">
                      @csrf

                      <div class="form-group row">
                          <label for="post_title" class="col-md-4 col-form-label text-md-right">
                          Title</label>
                          <div class="col-md-6">
                              <input id="post_title" type="text"
                              class="form-control @error('post_title') is-invalid @enderror"
                               name="post_title" value="{{ $posts->post_title }}"
                               required autocomplete="post_title" autofocus>

                              @error('post_title')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="post_body" class="col-md-4 col-form-label text-md-right">
                            Post Body</label>
                          <div class="col-md-6">
                              <textarea id="post_body"
                              class="form-control @error('post_body')
                              is-invalid @enderror" name="post_body"
                              value="{{ $posts->post_body}}" required
                            >{{ $posts->post_body}}</textarea>

                              @error('post_body')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="category_id" class="col-md-4 col-form-label text-md-right">
                            Categories</label>

                          <div class="col-md-6">
                              <select id="category_id" type="category_id"
                              class="form-control @error('category_id') is-invalid @enderror"
                               name="category_id" required>
                               <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @if(count($categories) > 0)
                                @foreach($categories ->all() as $category)
                                <option value="{{ $category->id }}">
                                  {{ $category->category}}</option>
                                @endforeach
                                @endif
                              </select>
                              @error('category_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="post_image" class="col-md-4 col-form-label text-md-right">
                          Featured Image</label>
                          <div class="col-md-6">
                              <input id="post_image" type="file"
                              class="form-control @error('designation') is-invalid @enderror"
                              name="post_image" required>
                              @error('post_image')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary btn-large btn-block">
                                Update Post
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
