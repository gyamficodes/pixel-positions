<x-layout>
    <div class=" space-y-10">
        <section class=" text-center pt-6">
          <h1 class="  capitalize text-[20px] text-white text-center mb-3 ">let`s find your next job</h1>
        

          <x-forms.form action="/search" class=" mt-6">
         <x-forms.input :label="false" name="q" placeholder="Web Developer"/>
         </x-forms.form>
        </section>
   
     <section class="  pt-10">
       <x-section-head>featured jobs</x-section-head>
    
          <div class=" grid grid-cols-3 w-full mt-3 gap-4">
            @foreach($featuredJobs as $job)
            <x-job-card :$job/>
             @endforeach
          </div>
      </section>
    
         <section>
            <x-section-head>Tags</x-section-head>
            <div  class=" mt-6 space-x-4">
               @foreach($tags as $tag)
               <x-tag :tag="$tag" />
               @endforeach
            </div>
         </section>
         <section>
            <x-section-head>Recent Jobs</x-section-head>
            <div class=" mt-6  space-y-3">
               @foreach($jobs as $job)
               <x-job-card-wide :$job />
                @endforeach
            </div>
         </section>
    </div>
   </x-layout>
   