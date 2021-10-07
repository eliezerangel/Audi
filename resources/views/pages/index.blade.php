@extends('master.main')

@section('styles')
    @stop

@section('scripts')
    @stop

@section('content')
    @component('contents.carousel.carousel')
    @endcomponent

    @component('contents.cards.card')
    @endcomponent

    @component('contents.text.text-content-one')
    @endcomponent

@stop

