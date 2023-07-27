<x-public>
    {{-- <x-slot name="header">
        <h1 class="text-red-400 text-3xl">
            This is the index.php
        </h1>
    </x-slot name="header"> --}}

    <x-layout.section-wide>
        <x-elements.image-left>
            <x-slot name="image">
                <img src="https://via.placeholder.com/500x500" alt="">
            </x-slot>
            <h1>Image left</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
        </x-elements.image-left>
    </x-layout.section-wide>
    <x-layout.section-wide>
        <x-elements.image-right>
            <x-slot name="image">
                <img src="https://via.placeholder.com/500x500" alt="">
            </x-slot>
            <h1>Image right</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
        </x-elements.image-right>
    </x-layout.section-wide>

    <x-layout.hero>
        <x-elements.hero-button>
            <h1>Hero title</h1>
        </x-elements.hero-button>
    </x-layout.hero>

    <x-layout.hero class="bg-gray-700">
        <h1>this si the thing</h1>
    </x-layout.hero>


    <x-layout.section-full-width class="bg-gray-100">
        full width
    </x-layout.section-full-width>

    <x-layout.section-wide class="bg-gray-200">
        wide
    </x-layout.section-wide>

    <x-layout.section-narrow class="bg-gray-300">
        narrow
    </x-layout.section-narrow>


    <x-layout.section-full-width class="bg-gray-100">
        <x-elements.centered-quote >
            <x-slot name="headline">
                Quote headline margin
            </x-slot>
            <x-slot name="quote">
                Quote goes here
            </x-slot>
            <x-slot name="name">
                Al Elliott
            </x-slot>
            <x-slot name="position">
                Owner of Oblong
            </x-slot>
        </x-elements.centered-quote>
    </x-layout.section-full-width>
</x-public>