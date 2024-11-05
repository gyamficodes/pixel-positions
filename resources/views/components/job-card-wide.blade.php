@props(['job'])
<div class="  flex bg-white/5 gap-6  border py-4  rounded-xl  group px-4 order border-transparent hover:border-blue-800  transition-all duration-3.000 ease ">
 <div>
    <x-employer-logo :width="90"/>
 
 </div>
    <div class=" flex-1 flex flex-col">
        <a href="" class=" self-start  text-sm text-gray-400">
            {{$job->employer->name}}
        </a>
      
            <h3 class=" text-xl mt-3 font-bold group-hover:text-blue-800 transition-colors duration-300 ease ">{{ $job->title }}</h3>
            <p class=" text-sm text-gray-400 mt-auto">{{$job->salary}}</p>
     
    </div>
 
  
        <div>
            @foreach($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
        
        </div>

</div>