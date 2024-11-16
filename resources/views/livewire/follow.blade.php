
<div>
    @if(auth()->user()->is_following($post->owner))
        <a wire:click="toggle_follow" class="w-30 text-blue-400 text-sm font-bold px-3 text-center">
            {{__('Unfollow')}}
        </a>
    @else
        <a wire:click="toggle_follow" class="w-30 text-blue-400 text-sm font-bold px-3 text-center">
            {{__('Follow')}}
        </a>

    @endif
</div>
