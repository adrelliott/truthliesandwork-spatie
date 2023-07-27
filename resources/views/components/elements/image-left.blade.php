<div {{ $attributes->merge(['class' => 'flex md:flex-cols']) }}>
    <div class="md:pr-8 lg:pr-12">
        {{ $image }}
    </div>
    <div>
        {{ $slot }}
    </div>
</div>