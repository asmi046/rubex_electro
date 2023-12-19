@extends('layout.all')

@section('title', "Главная страница")

@section('content')
        <x-all-navigation :page="true" ></x-all-navigation>

		<div class="index-imgBlock imgBlock">
			<img src="img/index.jpg" alt="">
		</div>
@endsection
