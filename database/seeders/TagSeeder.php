<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobTags = [
            'Engineering',
            'Marketing',
            'Design',
            'Sales',
            'Customer Support',
            'Finance',
            'Human Resources',
            'Product Management',
            'Legal',
            'IT',
            'Operations',
            'Data Science',
            'Project Management',
            'Content Writing',
            'QA Testing',
        ];

        foreach ($jobTags as $tagName) {
            Tag::firstOrCreate(['name' => $tagName]);
        }
    }
}
