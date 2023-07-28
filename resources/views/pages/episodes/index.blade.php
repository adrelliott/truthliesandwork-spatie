<?php
    $episodes = App\Models\Episode::all();
?>
<x-public>
    This would list all the episodes
    @foreach($episodes as $episode)
        <div>
            <a href="/episodes/{{ $episode->slug }}">{{ $episode->title }}</a>
        </div>
    @endforeach
</x-public>