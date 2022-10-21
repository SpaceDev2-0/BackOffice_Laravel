@extends('layouts.front')

@section('front_title',' - categorya')

@section('front')
<div class="container blog_container">
  <h4 class="front_header">{{$categorya->name}}</h4>
  <hr class="front_hr_blog">
  <div class="row contact_row">
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
      @foreach($posts as $post)
        <div class="row">
          <div class="col-12">
            <div class="card post_card">
                <img class="card-img-top" src="\{{$post->img}}" alt="Card image cap">
                <div class="card-header post_card_header">{{$post->name}}</div>
                <div class="card-body">
                  <p>
                    {{\Illuminate\Support\Str::limit($post->content,200)}}
                  </p>
                  <a href="{{route('posts.post',['id' => $post->id])}}" class="btn btn-primary submit_btn btn-block post_btn">Read more</a>
                </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 post_side_menu">
      <h5 class="front_header">Categories</h5>
      <ul id="categorya_ul">
        @foreach($categories as $categorya)
          <li><a href="{{route('front.categorya',['id' => $categorya->id])}}" class="categorya_links">{{$categorya->name}}</a></li>
        @endforeach
      </ul>
      <h5 class="front_header">Latest Posts</h5>
      <ul id="categorya_ul">
        @if($all_posts->count()>=1)
        <li><a href="{{route('posts.post',['id' => $all_posts[$all_posts->count()-1]->id])}}" class="categorya_links">{{$all_posts[$all_posts->count()-1]->name}}</a></li>
        @endif
        @if($all_posts->count()>=2)
        <li><a href="{{route('posts.post',['id' => $all_posts[$all_posts->count()-2]->id])}}" class="categorya_links">{{$all_posts[$all_posts->count()-2]->name}}</a></li>
        @endif
        @if($all_posts->count()>=3)
        <li><a href="{{route('posts.post',['id' => $all_posts[$all_posts->count()-3]->id])}}" class="categorya_links">{{$all_posts[$all_posts->count()-3]->name}}</a></li>
        @endif
      </ul>
      <form class="search_form" method="GET" action="{{route('front.search')}}">
        @csrf
        <div class="form-group">
          <button type="submit" id="search_btn"><i class="fa fa-search search_icon" aria-hidden="true"></i></button>
          <input type="text" class="" id="blog_search" name="blog_search" placeholder="Search" required>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
