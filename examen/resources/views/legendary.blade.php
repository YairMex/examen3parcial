@extends('layouts.layout')

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
