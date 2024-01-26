@csrf()
<input type="text" name="subject" id="subject" placeholder="Assunto" value="{{ $support->subject ?? old('subject')}}">
<textarea name="content" id="content" cols="30" rows="10" placeholder="Descrição"> {{ $support->content ?? old('content')}} </textarea>
<input type="submit" value="Enviar">