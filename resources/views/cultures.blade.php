@extends('layouts.main')
@section('content')
    Cultures page
    @foreach($cultures as $culture)
        <div>{{ $culture->name }}</div>
    @endforeach
@endsection
