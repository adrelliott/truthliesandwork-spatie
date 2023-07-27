<div>
    <h1
        class="text-slate-900 font-extrabold text-4xl sm:text-5xl lg:text-6xl tracking-tight text-center dark:text-white">
        {{ $headline ?? 'Define a headline' }}    
    </h1>
    <p class="mt-6 text-lg text-slate-600 text-center max-w-3xl mx-auto dark:text-slate-400">
        {{ $subheadline ?? 'Define a subheadline' }}
    </p>
    <div class="mt-6 sm:mt-10 flex justify-center space-x-6 text-sm">
        <a
            class="bg-slate-900 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 focus:ring-offset-slate-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400"
            href="{{ $buttonLink ?? '/' }}">
            {{ $buttonText ?? 'Define button text' }}
        </a>
    </div>
</div>
