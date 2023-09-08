@props(['listing'])

<div class="col">
    <div class="card" style="max-width: 500px; height:250px;">
        <div class="row">
            <div class="col-sm-5">
                <img src="{{ asset('images/logo.png') }}" class="w-100 p-1" alt="">
            </div>
            <div class="col-sm-7">
                <div class="card-body align-items-center">
                    <h5 class="card-title">{{$listing->company}}</h5>
                    <p class="card-text pb-2">{{$listing->description}}</p>
                    <x-listing-tags :tagsCsv="$listing->tags"/>
                    <div class="text-lg-start mt-2">
                        <img src="{{ asset('icons/geo-alt.svg') }}" alt="">
                        {{$listing->location}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>