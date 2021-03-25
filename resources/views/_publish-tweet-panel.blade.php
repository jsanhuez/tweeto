<div class="border border-blue-400 rounded-2xl px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="What's up?"
            required
        >
        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="Your Avatar"
                class="rounded-full mr-4"
                width="50"
                height="50"
            >

            <button
                type="submit"
                class="bg-blue-500 rounded-2xl shadow py-2 px-3 text-white"
            >
                Tweetoo
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
