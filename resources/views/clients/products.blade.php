@extends('layouts.client')

@section('title')
    {{$title}}
@endsection

{{-- @section('sidebar')
@parent
    <h3>Product sidebar</h3>
@endsection --}}

@section('content')
    <h1>San pham</h1>
    @push('scripts')
        <script>
            console.log('push lan 1');
        </script>
    @endpush
@endsection

@section('css')
@endsection

@section('js')
@endsection

@push('scripts')
    <script>
        console.log('push lan 1');
    </script>
@endpush

@stack('scripts')

{{-- @prepend('scripts')
    <script>
        console.log('push lan 1');
    </script>
@endprepend --}}
