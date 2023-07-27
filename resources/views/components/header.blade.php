@aware(['hideNav', 'pageHeader'])
<header>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
            Truth Lies & Work logo
        </h1>

        @unless ($hideNav)
            <x-nav />
        @endunless
        
    </div>
    
    @if($pageHeader)
        <div class="py-4 bg-gray-300 px-2 md:px-8 lg:px12">
            <h2 class="text-lg">
                {{ $pageHeader }}
            </h2>
        </div>
    @endif
    
</header>
    