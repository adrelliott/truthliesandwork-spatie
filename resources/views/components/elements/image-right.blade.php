<div {{ $attributes->merge(['class' => 'flex md:flex-cols']) }}>
    <div>
        {{ $slot }}
    </div>
    <div class="md:pl-8 lg:pl-12">
        {{ $image }}
    </div>
</div>