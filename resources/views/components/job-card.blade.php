@props(['job'])

<x-panel>
    <div class=" self-start  text-sm">
     {{$job->employer->name}}
    </div>
    <div class=" py-8  font-bold">
        <h3  class=" text-xl font-bold group-hover:text-blue-600">{{ $job->title }}</h3>
        <p class=" text-sm mt-4">{{$job->salary}}</p>
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
 

