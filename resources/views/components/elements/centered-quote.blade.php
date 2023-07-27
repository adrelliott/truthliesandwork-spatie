<section {{ $attributes->merge(['class' => 'text-center px-8']) }}>
    <h2 class="text-slate-900 text-4xl tracking-tight font-extrabold sm:text-5xl dark:text-white">
        {{ $headline ?? 'Define a headline' }}
    </h2>
    <figure>
        <blockquote>
            <p class="mt-6 max-w-3xl mx-auto text-lg">
                {{ $quote ?? 'Define a quote' }}
            </p>
        </blockquote>
        <figcaption class="mt-6 flex items-center justify-center space-x-4 text-left">
            <img
                src="{{ $profileImage ?? '' }}" alt="{{ $profileImageAlt ?? '' }}" class="w-14 h-14 rounded-full" loading="lazy">
            <div>
                <div class="text-slate-900 font-semibold dark:text-white">
                    {{ $name ?? 'Define a name' }}
                </div>
                <div class="mt-0.5 text-sm leading-6">
                    {{ $position ?? 'Define a position' }}
                </div>
            </div>
        </figcaption>
    </figure>
</section>
