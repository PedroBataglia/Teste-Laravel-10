<h1>Listagem dos Suportes</h1>

<a href="{{ route('projeto1.supports.create') }}">Criar</a>

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
