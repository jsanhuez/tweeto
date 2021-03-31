<div class="border border-gray-300 rounded-2xl">
    @forelse ($tweets as $tweet)
        @include('_tweet')    
    @empty
        <p class="p-4">No tweetos yet.</p>
    @endforelse

    <div class="px-4 py-4">
        {{ $tweets->links() }}
    </div>
</div>
