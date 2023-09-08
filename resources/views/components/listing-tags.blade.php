@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="d-flex flex-row px-0 justify-content-center gap-2">
    @foreach ($tags as $tag)
        <li class="list-group-item bg-dark text-white rounded-3">
            <a href="/?tag={{ $tag }}" class="link-underline px-2 link-underline-opacity-0 text-white">
                {{ $tag }} </a>
        </li>
    @endforeach
</ul>
