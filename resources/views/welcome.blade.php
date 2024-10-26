<x-layout>
 <div class=" space-y-10">
     <section class=" text-center pt-6">
       <h1 class="  capitalize text-[20px] text-white text-center mb-3 ">let`s find your next job</h1>
       <div>
         <input type="text" placeholder="Web Developer..." class=" rounded-xl  border border-white/5 bg-white/5 w-full max-w-lg px-5 py-4">
       </div>
     </section>

  <section class="  pt-10">
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
         <div class=" mt-6  space-y-3">
            <x-job-card-wide/>
            <x-job-card-wide/>
            <x-job-card-wide/>
         </div>
      </section>
 </div>
</x-layout>
