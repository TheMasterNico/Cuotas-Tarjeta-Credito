@extends('layout.master')

@section('content')
	{{ __('forms.cardname') }}: {{ $card->nombre }} <br>
	{{ __('forms.cuota') }}: ${{ $card->cuota ??  __('forms.no_cuota') }}	<br>
	{{ __('forms.cupo') }}: ${{ $card->cupo }}	<br>
	{{ __('forms.cupoactual') }}: ${{ $card->cupo_actual }}	<br>
	{{ __('forms.interes') }}: {{ $card->interes_mensual }}% <br>
@endsection