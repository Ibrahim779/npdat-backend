<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('home.banner_image', 0);
        $this->migrator->add('home.banner_title_ar', 'رعاية صحية ذكية بتقنية المستقبل بين يديك اﻻن');
        $this->migrator->add('home.banner_title_en', 'Advanced healthcare technology between your hands');
        $this->migrator->add('home.banner_description_ar', 'اجعل رؤيتك التجارية مميزة مع حلولنا المتكاملة. نحن نساعدك في تحليل البيانات،تخزينها، إدارتها بفعالية لتحقيق أهدافك بكفاءة لضمان مستقبل مشرق ﻷعمالك.');
        $this->migrator->add('home.banner_description_en', 'Make your business more advanced with our comprehensive data analysis, storing it, and implementing it for a successful outcome.');
        
        $this->migrator->add('home.services_title_ar', 'خدماتنا');
        $this->migrator->add('home.services_title_en', 'Our services');

        $this->migrator->add('home.npdat_image', 0);
        $this->migrator->add('home.npdat_title_ar', 'خدماتنا الطبية');
        $this->migrator->add('home.npdat_title_en', 'Our medical services');
        $this->migrator->add('home.npdat_main_title_ar', 'رعاية طبية متقدمة لضمان صحتك');
        $this->migrator->add('home.npdat_main_title_en', 'Advanced medical care to ensure your health');
        $this->migrator->add('home.npdat_description_ar', 'تجربة الرعاية الصحية بحلول رقمية تسهل الوصول السريع للخدمات الطبية والتواصل الطبي بين المرضى واﻷطباء من خلال التقنيات المتطورة لتحسين النتاذج وتعزيز الكفاءة الطبية');
        $this->migrator->add('home.npdat_description_en', 'Healthcare experience with digital solutions that facilitate quick access to medical services and medical communication between patients and doctors through advanced technologies to improve outcomes and enhance medical efficiency.');

        $this->migrator->add('home.rova_image_1', 0);
        $this->migrator->add('home.rova_image_2', 0);
        $this->migrator->add('home.rova_title_ar', 'مميزات رووفا');
        $this->migrator->add('home.rova_title_en', 'Features of Rova');
        $this->migrator->add('home.rova_main_title_ar', 'اﻻستثمار في صناعة التجميل');
        $this->migrator->add('home.rova_main_title_en', 'Investing in the beauty industry');
        $this->migrator->add('home.rova_description_ar', 'مع حلولنا المبتكرة، نستثمر في قطاع التجميل لضمان مستقبل أكثر إشراقاً لصناعتك، مدعوماً بأحدث التقنيات');
        $this->migrator->add('home.rova_description_en', 'With our innovative solutions, we invest in the beauty sector to ensure a brighter future for your industry, powered by the latest technologies.');

        $this->migrator->add('home.invest_image_1', 0);
        $this->migrator->add('home.invest_image_2', 0);
        $this->migrator->add('home.invest_title_ar', 'الاستثمار العقاري');
        $this->migrator->add('home.invest_title_en', 'Real estate investing');
        $this->migrator->add('home.invest_main_title_ar', 'اﻻستثمار العقاري الذكي');
        $this->migrator->add('home.invest_main_title_en', 'Smart real estate investing');
        $this->migrator->add('home.invest_description_ar', 'نوفر خططًا استثمارية استراتيجية تلبي احتياجاتك في سوق العقارات مع خدمات استشارية من الدرجة اﻷوﱃ');
        $this->migrator->add('home.invest_description_en', 'We offer strategic investment plans that meet your needs in the real estate market with consulting services of the highest quality.');
        $this->migrator->add('home.invest_list_1_ar', 'استشارات خطة العمل');
        $this->migrator->add('home.invest_list_1_en', 'Work plan consultations');
        $this->migrator->add('home.invest_list_2_ar', 'استثمارات من الدرجة الأولى');
        $this->migrator->add('home.invest_list_2_en', 'First investment plans');

        $this->migrator->add('home.contact_title_ar', 'تواصل معنا اﻵن');
        $this->migrator->add('home.contact_title_en', 'Contact us');
        $this->migrator->add('home.contact_description_ar', 'جاهزون للإجابة علي جميع استفساراتك ودعمك لتحقيق أهدافك بأعلي كفاءة.');
        $this->migrator->add('home.contact_description_en', 'Ready to answer all your questions and support to achieve your goals with excellence.');
       
    }

};
