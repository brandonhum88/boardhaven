<div>
    @foreach ($archives as $stats)
        <li>
            <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                {{ $stats['month'] . ' ' . $stats['year'] }}
            </a>
        </li>
    @endforeach
</div>
