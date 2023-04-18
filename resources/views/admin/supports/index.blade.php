<h1>Listagem dos Suportes</h1>

<table>
    <thead>
        <th>
            Id
        </th>
        <th>
            Assunto
        </th>
        <th>
            Status
        </th>
        <th>
            Descrição
        </th>
        <th></th>
    </thead>
</table>
@foreach($suportes as $suporte)
    <tr>
        <td>
            {{ $suporte->subject }}
        </td>
        <td>
            {{ $suporte->status }}
        </td>
        <td>
            {{ $suporte->body }}
        </td>
    </tr>
@endforeach
