<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\TrainerProfile;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Trainers (10 records)
        $trainers = [
            [
                'name' => 'Rahul Sharma',
                'email' => 'rahul.sharma@example.com',
                'phone_number' => '9876543210',
                'password' => Hash::make('password123'),
                'role' => 'trainer',
                'profile' => [
                    'dob' => '1988-03-15',
                    'address' => '123 MG Road, Koramangala',
                    'city' => 'Bengaluru',
                    'about_me' => 'Certified fitness coach with 5 years of experience.',
                    'certifications' => 'ACE Fitness Trainer, Yoga Alliance RYT-200',
                    'awards' => 'Best Trainer Bengaluru 2023',
                ],
            ],
            [
                'name' => 'Priya Patel',
                'email' => 'priya.patel@example.com',
                'phone_number' => '9123456789',
                'password' => Hash::make('password123'),
                'role' => 'trainer',
                'profile' => [
                    'dob' => '1990-07-22',
                    'address' => '45 Vile Parle East',
                    'city' => 'Mumbai',
                    'about_me' => 'Specializes in strength training and nutrition.',
                    'certifications' => 'NASM Certified Personal Trainer',
                    'awards' => 'Mumbai Fitness Award 2022',
                ],
            ],
            [
                'name' => 'Amit Kumar',
                'email' => 'amit.kumar@example.com',
                'phone_number' => '9988776655',
                'password' => Hash::make('password123'),
                'role' => 'trainer',
                'profile' => [
                    'dob' => '1985-11-10',
                    'address' => '12 Connaught Place',
                    'city' => 'Delhi',
                    'about_me' => 'Expert in HIIT and marathon training.',
                    'certifications' => 'ISSA Certified, CrossFit Level 1',
                    'awards' => 'Delhi Fitness Coach of the Year 2024',
                ],
            ],
            [
                'name' => 'Sneha Reddy',
                'email' => 'sneha.reddy@example.com',
                'phone_number' => '9871234567',
                'password' => Hash::make('password123'),
                'role' => 'trainer',
                'profile' => [
                    'dob' => '1992-04-18',
                    'address' => '78 Banjara Hills',
                    'city' => 'Hyderabad',
                    'about_me' => 'Passionate about yoga and wellness.',
                    'certifications' => 'Yoga Alliance RYT-500',
                    'awards' => 'Hyderabad Yoga Guru 2023',
                ],
            ],
            [
                'name' => 'Vikram Singh',
                'email' => 'vikram.singh@example.com',
                'phone_number' => '9765432109',
                'password' => Hash::make('password123'),
                'role' => 'trainer',
                'profile' => [
                    'dob' => '1987-09-05',
                    'address' => '56 Anna Nagar',
                    'city' => 'Chennai',
                    'about_me' => 'Bodybuilding and strength training expert.',
                    'certifications' => 'IFBB Certified Coach',
                    'awards' => 'Chennai Fitness Icon 2022',
                ],
            ],
            [
                'name' => 'Anjali Gupta',
                'email' => 'anjali.gupta@example.com',
                'phone_number' => '9898765432',
                'password' => Hash::make('password123'),
                'role' => 'trainer',
                'profile' => [
                    'dob' => '1991-12-25',
                    'address' => '34 Park Street',
                    'city' => 'Kolkata',
                    'about_me' => 'Zumba and aerobics instructor.',
                    'certifications' => 'Zumba Certified Instructor',
                    'awards' => 'Kolkata Dance Fitness Award 2023',
                ],
            ],
            [
                'name' => 'Rohan Mehta',
                'email' => 'rohan.mehta@example.com',
                'phone_number' => '9876541234',
                'password' => Hash::make('password123'),
                'role' => 'trainer',
                'profile' => [
                    'dob' => '1989-06-12',
                    'address' => '89 Sector 15',
                    'city' => 'Gurgaon',
                    'about_me' => 'Specializes in functional fitness.',
                    'certifications' => 'FMS Certified, ACSM Personal Trainer',
                    'awards' => 'Gurgaon Fitness Star 2024',
                ],
            ],
            [
                'name' => 'Kavita Desai',
                'email' => 'kavita.desai@example.com',
                'phone_number' => '9761234567',
                'password' => Hash::make('password123'),
                'role' => 'trainer',
                'profile' => [
                    'dob' => '1993-02-28',
                    'address' => '22 Camp Road',
                    'city' => 'Pune',
                    'about_me' => 'Pilates and core strength specialist.',
                    'certifications' => 'Pilates Method Alliance Certified',
                    'awards' => 'Pune Wellness Coach 2023',
                ],
            ],
            [
                'name' => 'Suresh Yadav',
                'email' => 'suresh.yadav@example.com',
                'phone_number' => '9879876543',
                'password' => Hash::make('password123'),
                'role' => 'trainer',
                'profile' => [
                    'dob' => '1986-08-19',
                    'address' => '15 Civil Lines',
                    'city' => 'Jaipur',
                    'about_me' => 'Experienced in martial arts and fitness.',
                    'certifications' => 'Krav Maga Certified Instructor',
                    'awards' => 'Jaipur Fitness Mentor 2022',
                ],
            ],
            [
                'name' => 'Neha Joshi',
                'email' => 'neha.joshi@example.com',
                'phone_number' => '9123459876',
                'password' => Hash::make('password123'),
                'role' => 'trainer',
                'profile' => [
                    'dob' => '1990-10-07',
                    'address' => '67 Ashok Nagar',
                    'city' => 'Ahmedabad',
                    'about_me' => 'Certified in sports nutrition and training.',
                    'certifications' => 'ISSN Sports Nutritionist',
                    'awards' => 'Ahmedabad Trainer of the Year 2024',
                ],
            ],
        ];

        // Users (5 records)
        $users = [
            [
                'name' => 'Arjun Verma',
                'email' => 'arjun.verma@example.com',
                'phone_number' => '9988776543',
                'password' => Hash::make('password123'),
                'role' => 'user',
            ],
            [
                'name' => 'Meena Iyer',
                'email' => 'meena.iyer@example.com',
                'phone_number' => '9876540987',
                'password' => Hash::make('password123'),
                'role' => 'user',
            ],
            [
                'name' => 'Siddharth Nair',
                'email' => 'siddharth.nair@example.com',
                'phone_number' => '9123451234',
                'password' => Hash::make('password123'),
                'role' => 'user',
            ],
            [
                'name' => 'Pooja Rani',
                'email' => 'pooja.rani@example.com',
                'phone_number' => '9765439876',
                'password' => Hash::make('password123'),
                'role' => 'user',
            ],
            [
                'name' => 'Kiran Malhotra',
                'email' => 'kiran.malhotra@example.com',
                'phone_number' => '9871239876',
                'password' => Hash::make('password123'),
                'role' => 'user',
            ],
        ];

        // Insert Trainers
        foreach ($trainers as $trainerData) {
            $profileData = $trainerData['profile'];
            unset($trainerData['profile']);
            
            $user = User::create($trainerData);
            TrainerProfile::create(array_merge(['user_id' => $user->id], $profileData));
        }

        // Insert Users
        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
