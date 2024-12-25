<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => [
                    'en' => 'Napdat',
                    'ar' => 'نبضات',
                ],
                'title' => [
                    'en' => 'Best life apps',
                    'ar' => 'تطبيقات لحياة افضل',
                ],
                'description' => [
                    'en' => 'We are offering you a healthy app to ease medical care and achieve the best life with advanced services.',
                    'ar' => 'نقدم لك تطبيق صحي مبتكر لتسهيل الرعاية الطبية وتحقيق حياة أفضل بخدمات متقدمة.',
                ]
        ]);

        Service::create([
            'name' => [
                    'en' => 'Rova',
                    'ar' => 'روفا', 
                ],
                'title' => [
                    'en' => 'Global products of beauty and cosmetics',  
                    'ar' => 'منتجات تجملية بمعاير عالمية',
                ],  
                'description' => [
                    'en' => 'We are offering you a healthy app to ease medical care and achieve the best life with advanced services.',     
                    'ar' => 'نقدم لك تطبيق صحي مبتكر لتسهيل الرعاية الطبية وتحقيق حياة أفضل بخدمات متقدمة.',    
                ],  
        ]);

        Service::create([
            'name' => [
                    'en' => 'Investment in real estate',
                    'ar' => 'الاستثمار العقاري',
                ],
                'title' => [
                    'en' => 'Smart investment and financial future',
                    'ar' => 'استثمار ذكي ومستقبل مالي مشرق',
                ],
                'description' => [
                    'en' => 'We are offering you a healthy app to ease medical care and achieve the best life with advanced services.',
                    'ar' => 'نحقق لك أفصى استفادة من استثماراتك وتحقيق إنتاجية مستدامة.',
                ]
        ]); 
    }
}
