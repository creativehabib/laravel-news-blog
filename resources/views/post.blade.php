<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laral blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
	<table class="table table-bordered">
		<thead>
			<th>No</th>
			<th>Post Title</th>
			<th>Category</th>
			<th>Post Image</th>
			<th>Comments</th>
			<th>Tag</th>
		</thead>
		<tbody>
			@foreach($posts as $post)
<tr>
	<td>{{$post->id}}</td>
	<td>{{$post->title}}</td>
	<td>
	@foreach($post->category as $category)
                    @php
					$classes = ['btn-success','btn-info','btn-danger','btn-warning','btn-dark']
					@endphp

				<button class="btn btn-sm {{$classes[rand(0,4)]}} my-1">{{$category->name}}</button>

			@endforeach
			</td>
			<td><img width="80" height="60" src="{{$post->image}}"></td>
			<td>{{$post->comments->count()}}
       		@foreach($post->comments as $comment)
       		{{ $comment->user->name}}
       		@endforeach
            </td>
			<td>
			@foreach($post->tag as $tag)


                    @php
                        $classes = ['btn-success','btn-info','btn-danger','btn-warning','btn-dark']
                    @endphp
                    <button class="btn btn-sm {{$classes[rand(0,4)]}} my-1">{{$tag->name}}</button>


			@endforeach
			</td>
			</tr>
             @endforeach

		</tbody>
	</table>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
