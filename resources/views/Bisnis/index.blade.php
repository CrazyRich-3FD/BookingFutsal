@extends('layouts.index')
@section('content')
@php
$id = $_REQUEST['id'];
@endphp
<div class="container-fluid py-5 wow fadeInUp" style="margin-bottom: 10rem" data-wow-delay="0.1s">
    <div class="container">
        @if (Auth::check())
        <form action="{{ route('pembayaran.create') }}" method="get">
            @csrf
            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="idbooking" value="{{ $id }}">
            <button type="submit"
                class="btn btn-primary py-2 px-4 position-relative top-100 start-50 translate-middle">Booking</button>

        </form>
        @endif
    </div>
</div>

@endsection
