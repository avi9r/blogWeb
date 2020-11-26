@extends('frontlayout')
@section('title',$details->title)
@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-8">
			@if(Session::has('success'))
				<p class="text-success">{{session('success')}}</p>
			@endif
				<div class="card">
					<h3 class="card-header">{{$details->title}}</h3>
					<img src="{{asset('imgs/full/'.$details->full_img)}}" class="card-img-top" alt="{{$details->title}}" style=" max-width: 100%; height: auto; border-radius: 8px;">
					
					<div class="card-body">
						{{$details->detail}}
					</div>
				</div>
				@auth
				<!-- Add Comment -->
				<div class="card " >
					<h5 class="card-header">Add Comment</h5>
					<div class="card-body">
					<form method="get" action="{{url('save_comment/'.Str::slug($details->title).'/'.$details->id)}}">
						
							<div class="input-group">
							<div>
							  <textarea type="text" name="comment" class="form-control" ></textarea>
							  </div>
							  <br>
							  <div class="input-group-append">
							  
							    <input class="btn-small btn-dark" type="submit" id="button-addon2" value="Submit" >
							  </div>
							</div>
						</form>
						</div>
				</div>
				@endauth
				<!-- Fetch Comments -->
				<div class="card ">
					<h5 class="card-header">Comments <span class="badge badge-dark">{{count($details->comments)}}</span></h5>
					<div class="card-body">
						@if($details->comments)
							@foreach($details->comments as $comment)
								<blockquote class="blockquote">
								  <p class="mb-0">{{$comment->comment}}</p>
								  <footer class="blockquote-footer">By: {{$comment->user->name}}</footer>
								</blockquote>
								<hr/>
							@endforeach
						@endif
					</div>
				</div>
			</div>
			<!-- Right SIdebar -->
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
				<div class="card mb-4">
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
				<!-- <div class="card mb-4">
					<h5 class="card-header">Popular Posts</h5>
					<div class="list-group list-group-flush">
						<a href="#" class="list-group-item">Post 1</a>
						<a href="#" class="list-group-item">Post 2</a>
					</div>
				</div> -->
			</div>
		</div>
</div>
@endsection('content')