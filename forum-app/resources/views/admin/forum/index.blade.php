<h1>Listagem de Suportes</h1>
<a href="{{route('forum.create')}}">Adicionar dúvida</a>

{{-- <?= $xss?> --}}

<table>

    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>

    <tbody>

        @foreach ($supports as $support)

            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->content }}</td>
            </tr>
            
        @endforeach

    </tbody>

</table>