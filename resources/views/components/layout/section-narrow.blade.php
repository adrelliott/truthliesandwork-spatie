<section {{ $attributes->merge(['class' => 'px-8 py-4 sm:py-8 md:py-12 overflow-hidden ']) }}>
    <div class="max-w-full md:max-w-3xl lg:max-w-4xl mx-auto">
        {{ $slot }}
    </div>
</section>