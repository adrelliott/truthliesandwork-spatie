<header>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
            Truth Lies & Work logo
        </h1>
        @unless ($hideNav)
            <x-nav />
        @endunless
    </div>
    
    <x-page-header :pageHeader="$pageHeader" />
    
</header>
    