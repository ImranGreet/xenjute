<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '+880123456789',
                'message' => 'I am interested in your jute and leather bags.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sarah Khan',
                'email' => 'sarah@example.com',
                'phone' => '+880987654321',
                'message' => 'Do you offer bulk orders for corporate gifts?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]); 
    }
}
