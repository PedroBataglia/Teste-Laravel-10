<h1>Listagem dos Suportes</h1>

<a href="{{ route('supports.create') }}">Nova Dúvida</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
    </thead>
    <tbody>
        @foreach($suportes as $suporte)
            <tr>
                <td>{{ $suporte->subject }}</td>
                <td>{{ $suporte->status }}</td>
                <td>{{ $suporte->body }}</td>
            </tr>
        @endforeach
    </tbody>

</table>
