<h1> Listagem de Usuários </h1>
<a href=" {{route('projeto2.usuarios.create')}} ">Criar +</a>

<table>
    <thead>
        <th>
            Nome
        </th>
        <th>
            Email
        </th>
        <th>
            Status
        </th>
    </thead>
</table>
@foreach($usuarios as $usuario)
    <tr>
        <td>
            {{$usuario->name}}
        </td>
        <td>
            {{$usuario->email}}
        </td>
        <td>
            {{$usuario->status_id}}
        </td>
    </tr>
@endforeach
