
@if ($errors->any())

    @foreach($errors->all() as $error)
        <div class="error my-4 p-2 rounded-md bg-red-500 text-white">
            {{$error}}
        </div>
    @endforeach

@endif  
