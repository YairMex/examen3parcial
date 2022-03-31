@extends('layouts.layout2')

@section('titulo1')
<title>Banners</title>
@endsection

@section('skins')
<div class="product_grid">
	@foreach($items as $item)
		<!-- Product -->
		<div class="product">
			<div class="product_image"><img src="{{$item['image']}}" alt=""></div>
			<div class="product_content clearfix">
				<div class="product_info">
					<div class="product_name">{{$item['category']}}</div>
					<div class="product_price">{{$item['name']}}</div>
				</div>
			</div>
		</div>
	@endforeach
</div>
@endsection

