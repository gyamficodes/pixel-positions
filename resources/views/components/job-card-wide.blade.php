@props(['job'])
<div class="  flex bg-white/5 gap-6  border py-4  rounded-xl  group px-4 order border-transparent hover:border-blue-800  transition-all duration-3.000 ease ">
 <div>
    <x-employer-logo :width="90"/>
 
 </div>
    <div class=" flex-1 flex flex-col">
        <a href="" class=" self-start  text-sm text-gray-400">
            Laracast
        </a>
      
            <h3 class=" text-xl mt-3 font-bold group-hover:text-blue-800 transition-colors duration-300 ease ">Video Producer</h3>
            <p class=" text-sm text-gray-400 mt-auto">Full Time $60,000,000</p>
     
    </div>
 
  
        <div>
            @foreach($job->tag as $tag)
            <x-tag :tag="$tag" >Backend</x-tag>
            @endforeach
        </div>

</div>