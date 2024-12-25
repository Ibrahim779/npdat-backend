<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('npdat.banner_image_1', 0);
        $this->migrator->add('npdat.banner_image_2', 0);
        $this->migrator->add('npdat.banner_title_ar', 'منصة رقمية للرعاية الصحية ');
        $this->migrator->add('npdat.banner_title_en', 'Digital healthcare platform for LBI');
        $this->migrator->add('npdat.banner_description_ar', 'منصة نبضات الطبية منصة نبضات الطبية تهدف إﱃ تعزيز خدمات الرعاية الصحية والسياحة العلاجية من خلال حلول مبتكرة ﺗُحدث نقلة نوعية في تقديم الخدمات الطبية.');
        $this->migrator->add('npdat.banner_description_en', 'Nabdat Medical Platform aims to enhance healthcare and medical tourism services through innovative solutions to make a qualitative leap in the provision of medical services.');
        $this->migrator->add('npdat.banner_link_title_ar', 'انظر كيف يعمل');
        $this->migrator->add('npdat.banner_link_title_en', 'See how it works');
        $this->migrator->add('npdat.banner_link', '#');
        $this->migrator->add('npdat.banner_ios_app_link', '#');

        $this->migrator->add('npdat.app_1_title_ar', 'تطبيق المرضي');
        $this->migrator->add('npdat.app_1_title_en', 'Patients app');
        $this->migrator->add('npdat.app_1_description_ar', 'حجز المواعيد بسهولة. استشارات طبية عن ﺑُعد. الرسائل اﻵمنة مع اﻷطباء. الوصول إﱃ السجل الطبي اﻹلكتروني.');
        $this->migrator->add('npdat.app_1_description_en', 'Easily book appointments. Medical consultations on the go. Secure messaging with doctors. Access to electronic medical records.');
        $this->migrator->add('npdat.app_1_image', 0);
        $this->migrator->add('npdat.app_1_link', '#');

        $this->migrator->add('npdat.app_2_title_ar', 'تطبيق الأطباء');
        $this->migrator->add('npdat.app_2_title_en', 'Doctors app');
        $this->migrator->add('npdat.app_2_description_ar', 'إدارة المواعيد والتواصل مع المرضى. تقديم اﻻستشارات الطبية عن ﺑُعد. إصدار الوصفات الطبية. متابعة اﻹيرادات وإدارة العمليات اليومية.
لوحة تحكم المستشفى: إدارة مركزية للخدمات الطبية واﻹدارية. تتبع أداء اﻷطباء وجدولة المواعيد. ضمان جودة الخدمة الصحية');
        $this->migrator->add('npdat.app_2_description_en', 'Manage appointments and communicate with patients. Provide medical consultations on the go. Issue prescriptions. Monitor revenues and manage daily operations.');
        $this->migrator->add('npdat.app_2_image', 0);
        $this->migrator->add('npdat.app_2_link', '#');
    
        $this->migrator->add('npdat.npdat_title_ar', 'إدارة ذكية');
        $this->migrator->add('npdat.npdat_title_en', 'Smart management');

        $this->migrator->add('npdat.why_npdat_title_ar', 'إدارة ذكية');
        $this->migrator->add('npdat.why_npdat_title_en', 'Smart management');

        $this->migrator->add('npdat.icon_1_title_ar', 'سهولة جدولة المواعيد الطبية: ');
        $this->migrator->add('npdat.icon_1_title_en', 'Easy scheduling of medical appointments: ');
        $this->migrator->add('npdat.icon_1_description_ar', 'يوفر التطبيق طريقة سهلة ومريحة لحجز المواعيد مع اﻷطباء والعيادات في أي وقت ومن أي مكان.');
        $this->migrator->add('npdat.icon_1_description_en', 'The application provides an easy and convenient way to book appointments with doctors and clinics at any time and from anywhere.');

        $this->migrator->add('npdat.icon_2_title_ar', 'تذكير المواعيد والتنبيهات:');
        $this->migrator->add('npdat.icon_2_title_en', 'Appointment reminders and alerts:');
        $this->migrator->add('npdat.icon_2_description_ar', 'يرسل التطبيق إشعارات للتذكير بالمواعيد الطبية واﻷدوية لضمان التزامك بخطتك الصحية.');
        $this->migrator->add('npdat.icon_2_description_en', 'The application sends reminders and alerts to ensure your compliance with your health schedule.');

        $this->migrator->add('npdat.icon_3_title_ar', 'إدارة السجلات الصحية: ');
        $this->migrator->add('npdat.icon_3_title_en', 'Health records management: ');
        $this->migrator->add('npdat.icon_3_description_ar', 'يمكنك اﻻحتفاظ بملفاتك الطبية وتقاريرك في مكان واحد، مما يسهل الرجوع إليها عند الحاجة.');
        $this->migrator->add('npdat.icon_3_description_en', 'You can keep your medical files and reports in one place, making it easier to access them when needed.');

        $this->migrator->add('npdat.icon_4_title_ar', 'توفير الوقت والجهد: ');
        $this->migrator->add('npdat.icon_4_title_en', 'Save time and effort: ');
        $this->migrator->add('npdat.icon_4_description_ar', 'بدﻻً من اﻻنتظار الطويل أو التنقل بين العيادات، يتيح لك نبضات الوصول إﱃ أفضل الخدمات الصحية بنقرات بسيطة.');
        $this->migrator->add('npdat.icon_4_description_en', 'Avoid waiting or travelling between clinics, allowing you to access the best medical services with simple clicks.');
      
        $this->migrator->add('npdat.download_title_ar', 'حمل تطبيق نبضات اﻵن واستمتع بالخدمات الطبية المقدمة');
        $this->migrator->add('npdat.download_title_en', 'Download Nabdat app and enjoy the medical services provided');

        $this->migrator->add('npdat.download_link', '#');
    }
};
