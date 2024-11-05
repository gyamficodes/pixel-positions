@props(['job'])

<x-panel>
    <div class=" self-start  text-sm">
        Laracast
    </div>
    <div class=" py-8  font-bold">
        <h3  class=" text-xl font-bold group-hover:text-blue-600">Video Producer</h3>
        <p class=" text-sm mt-4">Full Time $60,000,000</p>
    </div>
    <div class=" flex items-center !justify-between  ">
        <div>
            @foreach($job->tags as $tag)
            <x-tag :tag="$tag" size="small">{{ $tag->name }}</x-tag>
        @endforeach
        </div>
        <x-employer-logo :width="42"/>

    </div>
</x-panel>
 

