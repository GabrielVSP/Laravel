<h1>Nova dúvida</h1>

@if ($errors->any)

    @foreach ($errors->all() as $error)
        <div class="error"> {{$error}} </div>
    @endforeach

@endif

<form action="{{ route('forum.store') }}" method="post">

    {{-- <input type="hidden" name="_token" id="token" value="{{csrf_token()}}"> --}}
    @csrf()
    <input type="text" name="subject" id="subject" placeholder="Assunto" value="{{old('subject')}}">
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Descrição"> {{old('content')}} </textarea>
    <input type="submit" value="Enviar">

</form>