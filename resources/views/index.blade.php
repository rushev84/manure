@extends('layouts.main')
@section('content')

    <table class="table mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название удобрения</th>
            <th scope="col">Культура</th>
            <th scope="col">Район</th>
            <th scope="col">Стоимость</th>
        </tr>
        </thead>
        <tbody>
        @foreach($manures as $manure)

            <tr>
                <th scope="row">{{ $manure->id }}</th>
                <td><a href="{{ route('manure.show', $manure->id) }}">{{ $manure->name }}</a></td>
                <td>{{ $manure->culture->name }}</td>
                <td>{{ $manure->district }}</td>
                <td>{{ $manure->price }}</td>
            </tr>

        @endforeach

        </tbody>
    </table>

    <div>
        {{ $manures->withQueryString()->links() }}
    </div>

@endsection
