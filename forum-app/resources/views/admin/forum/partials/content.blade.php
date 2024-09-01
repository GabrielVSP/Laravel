<table class="w-full mb-2 shadow-xl" >

    <thead class="p-5 bg-gray-950 shadow-lg text-white">
        <th class="rounded-tl-lg">Assunto</th>
        <th class="">Status</th>
        <th class="">Descrição</th>
        <th class="">Interações</th>
        <th class="rounded-tr-lg"></th>
    </thead>

    <tbody>

        @foreach ($supports->items() as $support)

            <tr class="p-1 bg-slate-600 text-white text-center">
                <td>{{ $support->subject }}</td>
                <td>
                    <div class="inline px-3 py-1 text-sm font-normal rounded-full">{{ getStatusSupp($support->status) }}</div>
                </td>
                <td>{{ $support->content }}</td>
                <td>blabla</td>
                <td>
                    <a href="{{route('forum.show', [$support->id])}}">&rarr;</a>
                    <a href="{{route('forum.edit', [$support->id])}}">lápis</a>
                </td>
            </tr>
            
        @endforeach

    </tbody>

</table>