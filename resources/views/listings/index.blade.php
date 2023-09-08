<x-layout>
    <!-- Main -->
    <main class="container text-center">

        @include('partials._banner')

        <div class="container pt-2">

            @unless (count($listings) == 0)

                @foreach (array_chunk($listings->all(), 2) as $threeListings)
                    <div class="row gap-5 mb-2">

                        @foreach ($threeListings as $listing)
                            <x-listing-card :listing="$listing" />
                        @endforeach

                    </div>
                @endforeach
                
                @else 
                <p> No listings found </p>
            @endunless
        </div>
    </main>
</x-layout>
