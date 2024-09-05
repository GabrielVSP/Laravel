<div class="w-1/2 shadow-md rounded-md my-4 p-5">

    <h2 class="font-bold text-3xl">{{$post->title}}</h2>
    <p class="my-10">{{$post->content}}</p>

    <aside>{{date('d/m/Y', strtotime($post->created_at))}}</aside>

</div>