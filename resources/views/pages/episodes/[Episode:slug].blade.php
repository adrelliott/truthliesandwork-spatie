<x-public>

    Episode Title: {{ $episode->title }}
    <br>
    Episode Description: {{ $episode->description }}
    <br>
    Episode Slug: {{ $episode->slug }}
    <br>
    @php $episode->load('guests') @endphp
    <strong class="font-bold">
        Guests:
    </strong>
    @foreach($episode->guests as $guest)
        <div>
            <a href="/guests/{{ $guest->slug }}">
                {{ $guest->first_name }} {{ $guest->last_name }} ({{ $guest->company_name }})
            </a>
        </div>
    @endforeach
    <a href="/episodes">&leftarrow; Back to all episodes</a>
</x-public>