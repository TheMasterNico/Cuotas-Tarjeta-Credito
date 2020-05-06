@extends('layout.master')

@section('content')
<div id="app">
    <form action="{{ route('card.store') }}" method="post">
        @csrf

        <label for="nombre">{{ __('forms.cardname') }}:</label>
        <input type="text" name="nombre" id="nombre" placeholder="{{ __('forms.cardname') }}"><br>

        <label for="tiene_cuota">{{ __('forms.tienecuota') }}</label>
        <input v-model="checked" type="checkbox" name="tiene_cuota" id="tiene_cuota">
        <input v-if="checked" type="number" name="cuota" id="cuota" placeholder="{{ __('forms.cuota') }}"><br>

        <label for="cupo">{{ __('forms.cupo') }}:</label>
        <input type="number" name="cupo" id="cupo" placeholder="{{ __('forms.cupo') }}"><br>

        <label for="cupo_actual">{{ __('forms.cupoactual') }}:</label>
        <input type="number" name="cupo_actual" id="cupo_actual" placeholder="{{ __('forms.cupoactual') }}"><br>

        <label for="interes_mensual">{{ __('forms.interes') }}:</label>
        <input type="number" name="interes_mensual" id="interes_mensual" placeholder="{{ __('forms.interes') }}"><br>

        <input type="submit" value="{{ __('forms.crear') }}">
    </form>

    </div>

@endsection