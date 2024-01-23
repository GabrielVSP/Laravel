<h1>Nova dúvida</h1>

<form action="{{ route('forum.store') }}" method="post">

    {{-- <input type="hidden" name="_token" id="token" value="{{csrf_token()}}"> --}}
    @csrf()
    <input type="text" name="subject" id="subject" placeholder="Assunto">
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Descrição"></textarea>
    <input type="submit" value="Enviar">

</form>