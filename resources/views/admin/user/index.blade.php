@extends('layouts.admin')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">E-mail</th>
            <th scope="col">Роль</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <div style="display: flex">
                        <div>
                            <form action="{{ route('admin.user.delete', $user->id) }}" method="post" class="mb-3">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Удалить" class="btn btn-danger">
                            </form>
                        </div>
                    </div>

                </td>
            </tr>

        @endforeach

        </tbody>
    </table>


@endsection
