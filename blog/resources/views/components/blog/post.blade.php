<div class="w-1/2 shadow-md rounded-md my-4 p-5">

    <h2 class="font-bold text-3xl">{{$post->title}}</h2>
    <p class="my-10">{{$post->content}}</p>

    <aside><a href="{{route('blog-post', ['id' => $post->id])}}" class="text-red-400 mb-3 hover:text-lg duration-300">View full</a></aside>
    <aside>{{date('d/m/Y', strtotime($post->created_at))}}</aside>

</div>