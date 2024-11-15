<div class="px-5 mb-4">
    @if($this->likes > 0)
        {{__('liked by')}}
        <strong>
            <a href="/{{ $this->firstusername }}">{{ $this->firstusername }}</a>
        </strong>

    @endif

    @if($this->likes > 1)
        {{__('end')}} <strong>{{__('others')}}</strong>
        @endif
</div>
