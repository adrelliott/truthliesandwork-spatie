<x-public>
    Guest: {{ $guest->first_name }} {{ $guest->last_name }}
    <br>
    Job: {{ $guest->job_title }} for {{ $guest->company_name }}
    <br>
    Slug & pub date: {{ $guest->slug }} - Published on: {{ $guest->published_at }}
    <br>
    <a href="/guests">&leftarrow; Back to all guests</a>
</x-public>