<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('rova.first_section_image', 0);
        $this->migrator->add('rova.first_section_title_ar', 'جمالك كما يجب أن يكون');
        $this->migrator->add('rova.first_section_title_en', 'Your body like it should be');
        $this->migrator->add('rova.first_section_description_ar', 'منتجات روفا تمنحك دائما التآلق الذي يعكس ثقتك بنفسك');
        $this->migrator->add('rova.first_section_description_en', 'Products from Rova give you a constant sense of confidence that reflects your own confidence');


        $this->migrator->add('rova.goals_title_ar', 'جمال، طبيعة، فعالية');
        $this->migrator->add('rova.goals_title_en', 'Beauty, Nature, Activity');
        $this->migrator->add('rova.goals_description_ar', 'نحن نسعى ﻷن نكون روادًا في صناعة الجمال من خلال تقديم منتجات تجميلية تجمع بين الفعالية والجودة، لتمنحك تجربة جمال متكاملة تلبي احتياجاتك وتساعدك علي التميز بإطﻼلة طبيعية وصحية');
        $this->migrator->add('rova.goals_description_en', 'We strive to be leaders in the beauty, nature, and activity of Rova by providing high-quality products that combine beauty and quality, so that you have a complete experience of beauty and health.');
        $this->migrator->add('rova.goals_list_item_ar', 'منتجات عالية الجودة');
        $this->migrator->add('rova.goals_list_item_en', 'High-quality products');
        $this->migrator->add('rova.goals_list_item1_ar', 'حلول تجميلية مبتكرة');
        $this->migrator->add('rova.goals_list_item1_en', 'Innovative beauty solutions');
        $this->migrator->add('rova.goals_first_image', 0);
        $this->migrator->add('rova.goals_second_image', 0);

        $this->migrator->add('rova.banner_image', 0);

        $this->migrator->add('rova.products_title_ar', 'جمالك يستحق العناية بكل تفاصيله');
        $this->migrator->add('rova.products_title_en', 'Your body like it should be');
        $this->migrator->add('rova.products_description_ar', 'اكتشفي أسرار الجمال الطبيعي لشعرك وبشرتك');
        $this->migrator->add('rova.products_description_en', 'Discover natural beauty flaws in your hair and skin');

    }
};
