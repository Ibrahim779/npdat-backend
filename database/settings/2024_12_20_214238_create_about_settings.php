<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('about.banner_image', 0);

        $this->migrator->add('about.goals_title_ar', 'نبضات،سهولة، متابعة، وتقدم مستمر');
        $this->migrator->add('about.goals_title_en', 'Pulses, ease, follow-up, and continuous progress');
        $this->migrator->add('about.goals_image', 0);

        $this->migrator->add('about.vision_title_ar', 'رؤيتنا');
        $this->migrator->add('about.vision_title_en', 'Our vision');
        $this->migrator->add('about.vision_description_ar', 'نسعى أن نكون المنصة الرائدة في تقديم الحلول الصحية الرقمية التي تربط بين التكنولوجيا المتقدمة واحتياجات اﻷفراد، لنساهم في بناء مجتمع يتمتع بصحة أفضل ومستقبل أكثر إشراﻗًا.');
        $this->migrator->add('about.vision_description_en', 'We strive to be the leading platform in providing digital health solutions that connect advanced technology with individual needs, to contribute to building a community with better health and a brighter future.');

        $this->migrator->add('about.mission_title_ar', 'مهمتنا');
        $this->migrator->add('about.mission_title_en', 'Our mission');
        $this->migrator->add('about.mission_description_ar', 'تقديم خدمات طبية مبتكرة ومتكاملة ﺗُسهل وصول اﻷفراد إﱃ الرعاية الصحية المتخصصة، من خﻼل توفير أدوات فﻌ ّ الة لتحليل البيانات الطبية، تنظيمها، وإدارتها بطريقة تلبي احتياجات المستخدمين وتساهم في تحسين جودة حياتهم.');
        $this->migrator->add('about.mission_description_en', 'Providing innovative and integrated medical services to facilitate individuals\' access to specialized healthcare, by providing tools for analyzing medical data, organizing it, and managing it in a way that meets users\' needs and contributes to improving their quality of life.');

        $this->migrator->add('about.team_title_ar', 'فريقنا');
        $this->migrator->add('about.team_title_en', 'Our team');
        $this->migrator->add('about.team_description_ar', 'يتألف فريقنا من نخبة من المتخصصين في المجاﻻت التقنية والطبية، يعملون بروح الشغف واﻻبتكار لتطوير حلول متقدمة تلبي احتياجات العمﻼء وتحقق تطلعاتهم في الرعاية الصحية الرقمية. نحن ملتزمون بتقديم أفضل الخدمات لتمكين اﻷفراد والمؤسسات من تحقيق أهدافهم الصحية بفعالية وسهولة.');
        $this->migrator->add('about.team_description_en', 'Our team consists of a group of specialists in technical and medical fields, working with passion and innovation to develop advanced solutions that meet the needs of customers and achieve their aspirations in digital healthcare. We are committed to providing the best services to enable individuals and institutions to achieve their health goals effectively and easily.');

        $this->migrator->add('about.icon_1_title_ar', 'رعاية صحية');
        $this->migrator->add('about.icon_1_title_en', 'Healthcare');
        $this->migrator->add('about.icon_1_description_ar', 'نقدم لك تجربة صحية مبتكرة تسهم في تسهيل حياتك اليومية');
        $this->migrator->add('about.icon_1_description_en', 'We offer you an innovative health experience that helps facilitate your daily life');
        
        $this->migrator->add('about.icon_2_title_ar', 'تكنولوجيا متقدمة');
        $this->migrator->add('about.icon_2_title_en', 'Advanced technology');
        $this->migrator->add('about.icon_2_description_ar', 'استخدام تقنيات حديثة لتقديم حلول صحية تتناسب مع احتياجاتك الفردية.');
        $this->migrator->add('about.icon_2_description_en', 'Using advanced technologies to provide personalized health solutions.');
        
        $this->migrator->add('about.icon_3_title_ar', 'إدارة ذكية');
        $this->migrator->add('about.icon_3_title_en', 'Smart management');
        $this->migrator->add('about.icon_3_description_ar', 'من خلال التطبيق، يمكنك إدارة صحتك بكل يسر وفعالية في أي وقت.');
        $this->migrator->add('about.icon_3_description_en', 'Through the application, you can manage your health easily and effectively at any time.');
        
        $this->migrator->add('about.icon_4_title_ar', 'دعم شخصي');
        $this->migrator->add('about.icon_4_title_en', 'Personal support');
        $this->migrator->add('about.icon_4_description_ar', 'نحن هنا لدعمك بكل ما تحتاجه لتحقيق صحة أفضل وحياة أكثر توازﻧًا.');
        $this->migrator->add('about.icon_4_description_en', 'We are here to support you with everything you need to achieve better health and a more balanced life.');
       
        $this->migrator->add('about.counter_1_num', 70);
        $this->migrator->add('about.counter_1_title_ar', 'الدول');
        $this->migrator->add('about.counter_1_title_en', 'Countries');
        
        $this->migrator->add('about.counter_2_num', 60);
        $this->migrator->add('about.counter_2_title_ar', 'الجوائز والميداليات');
        $this->migrator->add('about.counter_2_title_en', 'Awards and Medals');
        
        $this->migrator->add('about.counter_3_num', 130);
        $this->migrator->add('about.counter_3_title_ar', 'العملاء الدوليين');
        $this->migrator->add('about.counter_3_title_en', 'International Customers');
        
        $this->migrator->add('about.counter_4_num', 21);
        $this->migrator->add('about.counter_4_title_ar', 'المرافق');
        $this->migrator->add('about.counter_4_title_en', 'Facilities');

        $this->migrator->add('about.ceo_image', 0);
        $this->migrator->add('about.ceo_title_ar', 'التزام عميق بالتنوع');
        $this->migrator->add('about.ceo_title_en', 'Committed to diversity');
        $this->migrator->add('about.ceo_main_title_ar', 'شركاء الأعمال');
        $this->migrator->add('about.ceo_main_title_en', 'Business partners');
        $this->migrator->add('about.ceo_name_ar', 'د. علي ال فاران');
        $this->migrator->add('about.ceo_name_en', 'Dr. Ali Al Faran');
        $this->migrator->add('about.ceo_word_ar', 'تسعى LBI إﱃ تنفيذ رؤية واضحة ترتكز علي الثقة والجودة ورضا العمﻼء. هدفنا ليس فقط الوجود الناجح، بل التقدم جنﺒًا إﱃ جنب مع أقوى المنافسين. نحن نعمل باستمرار عﲆ الحفاظ عﲆ تميزنا ونتجه نحو تحقيق أهداف أكثر شمولية.');
        $this->migrator->add('about.ceo_word_en', 'LBI seeks to implement a clear vision based on trust, quality, and customer satisfaction. Our goal is not only successful existence, but progress side by side with the strongest competitors. We constantly work to maintain our excellence and move towards achieving more comprehensive goals.');

        $this->migrator->add('about.help_text_ar', 'موظفونا الذين يبلغ عددهم ما يقرب من 8,000 موظف ملتزمون وجاهزون للمساعدة.');
        $this->migrator->add('about.help_text_en', 'Our nearly 8,000 committed staff members are ready to help.');

        $this->migrator->add('about.partner_title_ar', 'موثوق بها من قبل العلامات التجارية العالمية');
        $this->migrator->add('about.partner_title_en', 'Trusted by global brands');


       

    }
};
