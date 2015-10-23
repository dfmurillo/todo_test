@extends('master')


@section('title', 'ToDo APP')

@section('ng-app', 'ng-app="myApp" ng-controller="myCtrl"')

@section('content')
	<ul>
		@foreach($todos as $item)
			<li>
				<input type="checkbox" id="{{$item->id}}" @if($item->done)checked="checked"@endif; />
				<label contenteditable="true">{{$item->name}}</label>
				<p contenteditable="true">
					{{$item->description}}
				</p>
			</li>
		@endforeach
	</ul>
@endsection


@section('js-assets')
	<script type="text/javascript" src="{{URL::asset('js/app.js')}}"></script>
@endsection