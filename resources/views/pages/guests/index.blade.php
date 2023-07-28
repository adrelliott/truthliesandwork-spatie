<?php
    $guests = App\Models\Guest::all();
?>
<x-public>
    This would list all the episodes
    @foreach($guests as $guest)
        <div>
            <a href="/guests/{{ $guest->slug }}">
                {{ $guest->first_name }} {{ $guest->last_name }} ({{ $guest->company_name }})
            </a>
        </div>
    @endforeach
</x-public>