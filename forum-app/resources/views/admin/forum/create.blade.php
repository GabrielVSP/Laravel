<h1>Nova dúvida</h1>

<x-alert />

<form action="{{ route('forum.store') }}" method="post">

    {{-- <input type="hidden" name="_token" id="token" value="{{csrf_token()}}"> --}}
    @include('admin/forum/partials/form')

</form>