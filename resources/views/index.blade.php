<table class="table table-cover">
    <thead>
        <th>Nom</th>
        <th>Couleur favorite</th>
        <th>Email</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($list as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->fcolor }}</td>
                <td>{{ $item->email }}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>
