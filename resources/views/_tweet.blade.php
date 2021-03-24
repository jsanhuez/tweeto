<div class="flex p-4 border-b border-grey-400">
    <div class="mr-2 flex-shrink-0">
        <img
            src="https://i.pravatar.cc/60?u={{ $tweet->user->email }}"
            alt=""
            class="rounded-full mr-2"
        >
    </div>

    <div>
        <h5 class="font-bold mb-2">{{ $tweet->user->name }}</h5>

        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
