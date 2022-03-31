@extends('layouts.layout')

@section('texto')
<div class="home_title">Todos los conjuntos de las colaboraciones de Iconos</div>
@endsection

@section('titulo1')
<title>Iconos</title>
@endsection

@section('titulo')
<li>Iconos</li>
@endsection

@section('skins')
<div class="product_grid">
	@foreach($items as $item)
		<!-- Product -->
		<div class="product">
			<div class="product_image"><img src="{{$item['image']}}" alt=""></div>
			<div class="product_content clearfix">
				<div class="product_info">
					<div class="product_name"><a href="product.html">{{$item['rarity']}}</a></div>
					<div class="product_price">{{$item['name']}}</div>
				</div>
			</div>
		</div>
	@endforeach
</div>
@endsection

