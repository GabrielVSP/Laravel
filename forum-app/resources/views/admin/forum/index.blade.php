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

        @foreach ($supports->items() as $support)

            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ getStatusSupp($support->status) }}</td>
                <td>{{ $support->content }}</td>
                <td>
                    <a href="{{route('forum.show', [$support->id])}}">&rarr;</a>
                    <a href="{{route('forum.edit', [$support->id])}}">lápis</a>
                </td>
            </tr>
            
        @endforeach

    </tbody>

</table>

<x-pagination :paginator="$supports" :appends="$filters" />

{{-- {{$supports->links()}} --}}