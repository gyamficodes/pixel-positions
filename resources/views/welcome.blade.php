<x-layout>
 <div class=" space-y-10">
    
  <section class=" ">
    <x-section-head>featured jobs</x-section-head>
 
       <div class=" grid grid-cols-3 w-full mt-3 gap-4">
         <x-job-card/>
         <x-job-card/>
         <x-job-card/>
       </div>
   </section>
 
      <section>
         <x-section-head>Tags</x-section-head>
         <div  class=" mt-6 space-x-4">
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
         </div>
      </section>
      <section>
         <x-section-head>Recent Jobs</x-section-head>
      </section>
 </div>
</x-layout>
