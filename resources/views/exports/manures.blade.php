<table>
    <thead>
    <tr>
        <th style="width: 200px; height: 50px; background-color: #eaeaea;"><b>Название</b></th>
        <th style="width: 100px; background-color: #eaeaea;"><b>Норма азота</b></th>
        <th style="width: 100px; background-color: #eaeaea;"><b>Норма фосфора</b></th>
        <th style="width: 100px; background-color: #eaeaea;"><b>Норма калия</b></th>
        <th style="width: 100px; background-color: #eaeaea;"><b>Культура</b></th>
        <th style="width: 100px; background-color: #eaeaea;"><b>Район</b></th>
        <th style="width: 50px; background-color: #eaeaea;"><b>Цена</b></th>
        <th style="width: 200px; background-color: #eaeaea;"><b>Описание</b></th>
        <th style="width: 200px; background-color: #eaeaea;"><b>Назначение</b></th>
    </tr>
    </thead>
    <tbody>
    @foreach($manures as $manure)
        <tr>
            <td>{{ $manure->name }}</td>
            <td style="text-align: left">{{ $manure->norm_nitrogen }}</td>
            <td style="text-align: left">{{ $manure->norm_phosphorus }}</td>
            <td style="text-align: left">{{ $manure->norm_potassium }}</td>
            <td>{{ $manure->culture->name }}</td>
            <td>{{ $manure->district }}</td>
            <td>{{ $manure->price }}</td>
            <td>{{ $manure->description }}</td>
            <td>{{ $manure->purpose }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
