@extends('app')
@section('title', 'Error 404')
@section('content')

	<?php use app\lib\HTML; ?>

	<?= HTML::Card('Error | 405'); ?>

	Error 405. Endpoint Not Allowed.
	
@endsection