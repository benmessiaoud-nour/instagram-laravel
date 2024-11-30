<div class="max-h-96 flex flex-col">
<div class="flex w-full items-center border-b border-b-neutral-100 p-2">
    <h1 class="text-lg text-center font-bold text-center pb-2 grow">{{__('Following')}}</h1>
    <button wire:click="$dispatch('closeModal')"><i class="bx bx-x text-xl"></i></button>
</div>
    <ul class="overflow-y-auto">
        @forelse($following_list as $following)
            <li class="w-full">
                <img src="{{asset('storage/' . $following->image)}}" alt="" class="h-8 w-8 rounded-full">
            </li>
        @empty
            <span class="text-center text-xl text-gray-500">
                {{__('This user is not following anyone yet')}}
            </span>
        @endforelse
    </ul>
</div>
