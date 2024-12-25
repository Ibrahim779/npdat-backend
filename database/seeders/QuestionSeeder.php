<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'question' => '{"ar":"ما هو الحد الأعلى للتمويل ؟"}',
            'answer' => '{"ar":"اﻟﺤﺪ اﻟﺄﻋﻠﻰ ﻟﻠﺸﺮﻛﺔ اﻟﺮاﻏﺒﺔ ﻓﻲ الحصول على تمويل ﻳﺼﻞ اﻟﻰ 10 ﻣﻠﻴﻮن رﻳﺎل ﺳﻌﻮدي"}',
        ]);

        DB::table('questions')->insert([
            'question' => '{"ar":"هل أستطيع أن أحصل على تمويل لأكثر من مستخلص أو مشروع ؟"}',
            'answer' => '{"ar":"نعم"}',
        ]);

        DB::table('questions')->insert([
            'question' => '{"ar":"هل بالامكان استرجاع المبلغ الذي وضعته في الفرصة الاستثمارية قبل موعد سداد طالب التمويل ؟"}',
            'answer' => '{"ar":"ﻟﺎ ﻳﻤﻜﻨﻚ اﺳﺘﺮﺟﺎع اﻟﻤﺒﻠﻎ اﻟﺎ ﻓﻲ ﺣﺎل ﻟﻢ ﺗﻜﺘﻤﻞ ﺗﻐﻄﻴﺔ اﻟﻔﺮﺻﺔ المطروحة"}',
        ]);

        DB::table('questions')->insert([
            'question' => '{"ar":"من الذي يمكنهم الاستثمار في ركيز ؟"}',
            'answer' => '{"ar":"ﻳﻤﻜﻦ ﻟﺄي ﻣﻮاﻃﻦ/ة أو ﻣﻘﻴﻢ/ة ﻣﻤﻦ ﻳﺘﺠﺎوز ﺳﻦ 18 ﻋﺎم وﻳﻤﻠﻚ ﻫﻮﻳﺔ وﻃﻨﻴﺔ أو هوية مقيم سارية المفعول، وﻟﺪﻳﻪ ﺣﺴﺎب ﺑﻨﻜﻲ ﻓﻲ أﺣﺪ اﻟﺒﻨﻮك اﻟﻤﺤﻠﻴﺔ أن ﻳﻘﻮم ﺑﻌﻤﻠﻴﺔ اﻟﺎﺳﺘﺜﻤﺎر ﻋﻠﻰ ﻣﻨﺼﺔ ركيز"}',
        ]);
    }
}
