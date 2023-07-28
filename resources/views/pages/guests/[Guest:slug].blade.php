<x-public>
    Guest: {{ $guest->first_name }} {{ $guest->last_name }}
    <br>
    Job: {{ $guest->job_title }} for {{ $guest->company_name }}
    <br>
    Slug & pub date: {{ $guest->slug }} - Published on: {{ $guest->published_at }}
    <br>
    @php $guest->load('episodes') @endphp
    <strong class="font-bold">
        Episodes:
    </strong>
    @foreach($guest->episodes as $episode)
        <div>
            <a href="/episodes/{{ $episode->slug }}">
                {{ $episode->title }}
            </a>
        </div>
    @endforeach
    <a href="/guests">&leftarrow; Back to all guests</a>
</x-public>