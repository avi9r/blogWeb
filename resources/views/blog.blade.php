@extends('frontlayout')
@section('title','Blog Page')
@section('content')
		 <style>
			p {
				height: 70px;
				overflow: hidden;
				text-overflow: ellipsis;
			}
      .xyz {
				height: 20px;
				overflow: hidden;
				text-overflow: ellipsis;
			}
		 </style>
<section>
    <div class="header-inner two">
      <div class="inner text-center">
        <h4 class="title text-white uppercase">We Are Hasta</h4>
        <h5 class="text-white uppercase">Get Many More Features</h5>
      </div>
      <div class="overlay bg-opacity-5"></div>
      <img src="http://placehold.it/1920x800" alt="" class="img-responsive"/> </div>
  </section>
  <!-- end header inner -->
  <div class="clearfix"></div>
  
  <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Blog</h3>
          </div>
          <div class="col-md-6 text-right">
            <div class="pagenation_links"><a href="/">Home</a><i> / </i> Blog</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
   
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div>
		<div>
          @if(count($posts)>0)
                @foreach($posts as $post)
        <div class="col-md-6 col-sm-12 col-xs-12 bmargin padding-top-5">
             <a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">
			 <img src="{{asset('imgs/thumb/'.$post->thumb)}}" class="img-responsive" alt="{{$post->title}}" style="width: 530px; height: 350px;" > 
			</a>
          <div class="col-md-12 no-gutter">
            <div class="text-box padding-top-2">
              <h5 class="card-title xyz"><a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">{{$post->title}}</a></h5>
              <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15 Comments</span> </div>
              
              <div class="divider-line solid light"></div>
              <br/>
              <p><a href="{{url('detail/'.Str::slug($post->detail).'/'.$post->id)}}">{{$post->detail}}</a></p>
            </div>
          </div>
        </div>
          @endforeach
        @else
        <p class="alert alert-danger">No Post Found</p>
        @endif
         </div>
          {{$posts->links()}}
		</div>
		  
			<!-- Right SIdebar -->
			
		</div>
      </div>
    </div>
  </section>
	<div class="clearfix"></div>
  
   
  <section class="sec-padding">
    <div class="container">
		<div class="col-md-4">
				<!-- Search -->
				<div class="card mb-4">
					<h5 class="card-header">Search</h5>
					<div class="card-body">
						<form action="{{url('blog')}}">
							<div class="input-group">
							  <input type="text" name="q" class="form-control" />
							  <div class="input-group-append">
							    <input class="btn btn-dark" type="submit" id="button-addon2" value="Search" >
							  </div>
							</div>
						</form>
					</div>
				</div>
				<!-- Recent Posts -->
				<div class="row">
				<div class="card mb-8">
					<h5 class="card-header">Recent Posts</h5>
					<div class="list-group list-group-flush">
						@if($recent_posts)
							@foreach($recent_posts as $post)
								<a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}" class="list-group-item">{{$post->title}}</a>
							@endforeach
						@endif
					</div>
				</div>
				<!-- Popular Posts -->
				<div class="card mb-6">
					<h5 class="card-header">Popular Posts</h5>
					<div class="list-group list-group-flush">
						<a href="#" class="list-group-item">Post 1</a>
						<a href="#" class="list-group-item">Post 2</a>
					</div>
				</div>
				<div>
 		</div>
	<div>
  </section>
  
    
        <!--end item--> 
@endsection('content')