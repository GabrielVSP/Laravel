<h1>Detalhes da dúvida #{{$support->id}}</h1>

<ul>
    <li>Assunto: {{$support->subject}}</li>
    <li>Status: {{$support->status}}</li>
    <li>Descrição: {{$support->content}}</li>
</ul>

<form action="{{route('forum.delete', $support->id)}}" method="post">

    @csrf()
    @method('DELETE')

    <input type="submit" value="Deletar dúvida">

</form>
