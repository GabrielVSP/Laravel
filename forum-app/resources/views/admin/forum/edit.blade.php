<h1>Editar dúvida #{{$support->id}}</h1>

<form action="{{ route('forum.update', $support->id) }}" method="post">

    {{-- <input type="hidden" name="_token" id="token" value="{{csrf_token()}}"> --}}
    {{-- <input type="text" name="_method" value="PUT"> --}}
    @csrf()
    @method('PUT')

    
    <input type="text" name="subject" id="subject" placeholder="Assunto" value="{{$support->subject}}">
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Descrição">{{$support->content}}</textarea>
    <input type="submit" value="Editar">

</form>