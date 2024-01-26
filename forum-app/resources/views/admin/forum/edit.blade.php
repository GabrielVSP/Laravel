<h1>Editar dúvida #{{$support->id}}</h1>

<x-alert />

<form action="{{ route('forum.update', $support->id) }}" method="post">

    {{-- <input type="hidden" name="_token" id="token" value="{{csrf_token()}}"> --}}
    {{-- <input type="text" name="_method" value="PUT"> --}}

    @method('PUT')
    @include('admin/forum/partials/form', [
        'support' => $support
    ])

</form>