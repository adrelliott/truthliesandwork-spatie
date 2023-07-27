@aware(['hideFooter'])

<div class="bg-gray-800 text-white py-4 text-center">

    @unless ($hideFooter)
        <div class="flex justify-between px-12">
            <div>
                I am the description
            </div>
            <div class="flex flex-col">
                Useful links:
                <a href="/about">About</a>
                <a href="/podcast/listen">Listen</a>
                <a href="/podcast/subscribe">Cookies</a>
                <a href="/podcast/become-a-guest">Be a guest</a>
            </div>
        </div>
    @endunless

    <div class="flex justify-center gap-4 text-sm">
        <a href="/about">About</a>
        <a href="/about/privacy">Privacy</a>
        <a href="/about/cookies">Cookies</a>
        <a href="/about/contact">Contact</a>
    </div>

    <p class="text-xs mt-2">
        &copy {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
    </p>
    
</div>
