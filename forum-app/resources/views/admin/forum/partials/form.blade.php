@csrf()

<input class="w-full rounded-md my-2 p-1 bg-gray-100" type="text" name="subject" id="subject" placeholder="Assunto" value="{{ $support->subject ?? old('subject')}}">

<textarea class="w-full h-1/2 rounded-md my-2 p-1 bg-gray-100 resize-none" name="content" id="content" cols="30" rows="10" placeholder="Descrição"> {{ $support->content ?? old('content')}} </textarea>

<input type="submit" value="Enviar" class=" w-1/3 mx-auto p-2 bg-violet-400 rounded-sm text-xl cursor-pointer">