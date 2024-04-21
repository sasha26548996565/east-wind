<nav class="{{ $class }}">
    @foreach ($menu as $item)
        <a href="{{ $item->getLink() }}" class="text-white hover:text-pink {{ $item->isActive() ? 'font-bold' : '' }}">
            {{ $item->getLabel() }}
        </a>
    @endforeach
</nav>