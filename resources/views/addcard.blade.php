@extends('layout.master')

@section('content')
    <form action="{{ route('card.store') }}" method="post">
        @csrf

        <label for="nombre">{{ __('forms.cardname') }}:</label>
        <input v-model="mensaje" type="text" name="nombre" id="nombre" placeholder="{{ __('forms.cardname') }}"> @{{ mensaje }}<br>

        <label for="tiene_cuota">{{ __('forms.tienecuota') }}</label>
        <input type="checkbox" name="tiene_cuota" id="tiene_cuota">
        <input hidden type="number" name="cuota" id="cuota" placeholder="{{ __('forms.cuota') }}"><br>

        <label for="cupo">{{ __('forms.cupo') }}:</label>
        <input type="number" name="cupo" id="cupo" placeholder="{{ __('forms.cupo') }}"><br>

        <label for="cupo_actual">{{ __('forms.cupoactual') }}:</label>
        <input type="number" name="cupo_actual" id="cupo_actual" placeholder="{{ __('forms.cupoactual') }}"><br>

        <label for="interes_mensual">{{ __('forms.interes') }}:</label>
        <input type="number" name="interes_mensual" id="interes_mensual" placeholder="{{ __('forms.interes') }}"><br>

        <input type="submit" value="{{ __('forms.crear') }}">
    </form>
@endsection