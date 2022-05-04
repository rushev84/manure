@extends('layouts.admin')

@section('content')

<h3>Удалённые культуры</h3>
<br>

<div style="display: flex;">
    <div style="flex-basis: 33%;">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Культура</th>
        </tr>
        </thead>
        <tbody>
        @foreach($culturesOnlyTrashed as $culture)

            <tr>
                <th scope="row">{{ $culture->id }}</th>
                <td>{{ $culture->name }}</td>
            </tr>

        @endforeach

        </tbody>
    </table>
    </div></div>
{{--    <div>--}}
{{--        {{ $manures->withQueryString()->links() }}--}}
{{--    </div>--}}
@endsection
