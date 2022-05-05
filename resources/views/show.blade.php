@extends('layouts.main')

@section('content')
<div class="mt-5">
    <h3>{{ $manure->name }}</h3>
    <br>
    <div><b>Норма азота:</b> {{ $manure->norm_nitrogen }}</div>
    <div><b>Норма фосфора:</b> {{ $manure->norm_phosphorus }}</div>
    <div><b>Норма калия:</b> {{ $manure->norm_potassium }}</div>
    <br>
    <div><b>Культура:</b> {{ $manure->culture_id }}</div>
    <div><b>Район:</b> {{ $manure->district }}</div>
    <div><b>Цена:</b> {{ $manure->price }}</div>
    <br>
    <div><b>Описание:</b> {{ $manure->description }}</div>
    <div><b>Назначение:</b> {{ $manure->purpose }}</div>

    <br>

    <div><a href="{{ route('manure.index') }}" class="btn btn-primary">К списку удобрений</a></div>
</div>
@endsection
