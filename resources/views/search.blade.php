<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<style type="text/css">
		.search {
			display: flex;
			justify-content: center;
			flex-direction: column;
			align-items: center;
		} 

		h1 { text-align: center; }

		.featured {
			width: 10%;
			margin: 20px auto;
			display: block;
		}

		.content {
			border: 1px solid #000;
			display: flex;
			align-items: center;
			justify-content: flex-start;
			flex-direction: column;
		}
	</style>
</head>
<body>
	<h1>
		<img src="{{ asset('images/pokemon.png') }}">
	</h1>
	<div class="search">
		<form action="{{url('user/search')}}" method="post">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<input type="search" name="search" placeholder="Search Pokemon">
			<input type="submit" name="submit" value="search">
		</form>
	</div>
  @if ($pokemon)
  	<div class="featured">
  		<div class="content">
  	    <img src="{{ $pokemon->sprites->front_default }}" alt="{{$pokemon->forms[0]->name}}">
  	    <span>{{ $pokemon->forms[0]->name }}</span>
  		</div>
  	</div>
  @endif
</body>
</html>