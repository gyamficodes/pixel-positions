<?php
use \App\Models\Employer;
use \App\Models\Job;



it('belongs to an employer', function () {
    //AAA =
    // Arange
     $employer = Employer::factory()->create();
     $job = Job::factory()->create([
        'employer_id' => $employer->id
     ]);
      
    // Act && Asset
     expect( $job->employer->is( $employer))->toBeTrue();
});



//tags

it('can have tags' , function () {
   $job = Job::factory()->create();
   $job->tag('Frontend');
   expect($job->tags)->toHaveCount(1);
});
