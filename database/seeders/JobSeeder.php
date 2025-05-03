<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory(20)
            ->state(new Sequence(
                ['featured' => false, 'schedule' => 'Full Time'],
                ['featured' => true, 'schedule' => 'Part Time'],
            ))
            ->create()
            ->each(function ($job) {
                // Attach 3 random existing tags
                $tags = Tag::inRandomOrder()->take(3)->pluck('id');
                $job->tags()->attach($tags);
            });
    }
}
