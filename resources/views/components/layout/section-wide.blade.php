<section {{ $attributes->merge(['class' => 'px-8 py-12 sm:py-16 md:py-18 mx-auto overflow-hidden ']) }}>
    <div class="max-w-full md:max-w-5xl lg:max-w-6xl mx-auto">
        {{ $slot }}
    </div>
</section>