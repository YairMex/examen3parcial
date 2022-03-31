@extends('layouts.layout')

@section('texto')
<div class="home_title">Todos los conjuntos de las colaboraciones de DC</div>
@endsection

@section('titulo1')
<title>DC</title>
@endsection

@section('titulo')
<li>DC</li>
@endsection

@section('skins')
<div class="product_grid">
	@foreach($items as $item)
		<!-- Product -->
		<div class="product">
			<div class="product_image"><a href="{{route('objeto', $item['id'])}}"><img src="{{$item['image']}}" alt=""></a></div>
			<div class="product_content clearfix">
				<div class="product_info">
					<div class="product_name">{{$item['rarity']}}</div>
					<div class="product_price"><a href="{{route('objeto', $item['id'])}}">{{$item['name']}}</a></div>
				</div>
			</div>
		</div>
	@endforeach
</div>
@endsection

