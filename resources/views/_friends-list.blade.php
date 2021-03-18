<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach (range(1, 8) as $item)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img
                    src="https://i.pravatar.cc/40"
                    alt=""
                    class="rounded-full mr-4"
                >
                Pita chica
            </div>
        </li>        
    @endforeach
</ul>
