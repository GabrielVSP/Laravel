<div class="flex justify-around items-center">

    <h1 class="text-xl mr-1">Fórum</h1>
    <span class="bg-violet-500 text-purple-900 border-purple-900 rounded-md p-1 ">{{ $total }} dúvidas</span>

</div>

<div>

    <button class="button bg-gray-800 text-white p-1 rounded-md">
        <span class="material-symbols-outlined relative" style="top: 4px">add_circle</span>
        <a href="{{route('forum.create')}}" class="text-lg">Adicionar dúvida</a>
    </button>

</div>

<div class="basis-full my-2">
    <form action="{{ route('forum.index') }}" method="get">

        <div class="rounded-md bg-slate-800 border-gray-400 text-white w-full p-1 flex">
            <input type="text" name="filter" id="search" placeholder="Procurar..." value="{{$filters['filter'] ?? ''}}" class="bg-transparent w-full">
            <button type="submit">
                <span class="material-symbols-outlined relative" style="top: 4px">
                    search
                </span>
            </button>
        </div>
  
    </form>
</div>
