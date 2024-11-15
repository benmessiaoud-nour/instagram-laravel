<div class="card">
<div class="card-header">
    <img src="{{$post->owner->image}}" alt="" class="h-9 w-9 mr-3 rounded-full">
    <a href="{{$post->owner->username}}" class="font-bold">{{$post->owner->username}}</a>
</div>

    <div class="card-body">

        <div class="max-h-[35rem] overflow-hidden">

            <img src="{{ asset('storage/' . $post->image) }}" class="h-auto w-full object-cover">
        </div>

         <div class="p-3 flex flex-row">
             <livewire:like :post="$post"/>

             <a href="/p/{{$post->slung}}" class="grow">
                 <i class="bx bx-comment text-3xl hover:text-gray-400 cursor-pointer mr-3"></i>
             </a>
         </div>

        <div class="p-3">
            <a href="{{$post->owner->username}}" class="font-bold">{{$post->owner->username}}</a>

            {{$post->description}}
        </div>

        @if($post->comments()->count()>0)

            <a href="/p/{{$post->slung}}" class="p-3 font-bold text-gray-500">
                {{__('view all' . $post->comments()->count() . 'comments')}}

            </a>

        @endif

        <div class="p-3 text-gray-400 uppercase text-x5">
             {{$post->created_at->diffForHumans()}}
        </div>

    </div>

    <div class="card-footer">
        <form action="/p/{{$post->slung}}/comment" method="POST">
            @csrf
            <div class="flex flex-row">
                <textarea name="body" placeholder="{{__("add a comment...")}}"  autocomplete="off" autocorrect="off"
                class="grow border-none resize-none focus:ring-0 outline-0 bg:none max-h-60 h-5 p-0 overflow-y-hidden placeholder-gray-400"></textarea>

               <button type="submit" class="bg-white border-none text-blue-500 ml-5">{{__("POST")}}</button>

            </div>

        </form>
    </div>
</div>
