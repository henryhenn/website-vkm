<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RitualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ritual')
            ->insert([
                [
                    'acara_id' => 3,
                    'acara' => 'Kelahiran Buddha Maitreya',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '正月初一日, 慶祝 彌勒古佛 聖誕紀念',
                    'ritual2' => 'Zhēng yuè chū yī rì, qìng zhù mí lè gǔ fó shèng dàn jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 彌勒古佛 拜壽 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng mí lè gǔ fó bài shòu sān guì jiǔ kòu sān kòu shǒu',
                    'note' => '',
                    'user_add' => 'Admin',
                    'user_update' => 'Admin',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 6,
                    'acara' => 'Parinibana Buddha Cin Kung',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '二月初二日, 慶祝 金公祖師 成道紀念',
                    'ritual2' => 'Èr yuè chū èr rì, qìng zhù jīn gōng zǔ shī chéng dào jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 金公祖師 道喜 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng jīn gōng zǔ shī dào xǐ sān guì jiǔ kòu sān kòu shǒu',
                    'note' => 'NULL',
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 8,
                    'acara' => 'Kelahiran B. Avalokitesvara',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '二月十九日, 慶祝 南海古佛 聖誕紀念',
                    'ritual2' => 'Èr yuè shí jiǔ rì, qìng zhù nán hǎi gǔ fó shèng dàn jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 南海古佛 拜壽 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng nán hǎi gǔ fó bài shòu sān guì jiǔ kòu sān kòu shǒu',
                    'note' => '',
                    'user_add' => 'Admin',
                    'user_update' => 'Admin',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 9,
                    'acara' => 'Parinibana Ibu Guru Suci',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '二月二十三日, 慶祝 師母大人 成道紀念',
                    'ritual2' => 'Èr yuè èr shí sān rì, qìng zhù shī mǔ dà rén chéng dào jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 師母大人 道喜 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng shī mǔ dà rén dào xǐ sān guì jiǔ kòu sān kòu shǒu',
                    'note' => 'NULL',
                    'user_add' => 'cwh',
                    'user_update' => 'Admin',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 14,
                    'acara' => 'Kelahiran Buddha Cin Kung',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '四月二十四日, 慶祝 金公祖師 成道紀念',
                    'ritual2' => 'Sì yuè èr shí sì rì, qìng zhù jīn gōng zǔ shī chéng dào jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 金公祖師 拜壽 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng jīn gōng zǔ shī bài shòu sān guì jiǔ kòu sān kòu shǒu',
                    'note' => 'NULL',
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 16,
                    'acara' => 'Parinibana Bodhisatva Te Wei',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '五月初五日, 慶祝 德威將軍 成道紀念',
                    'ritual2' => 'Wǔ yuè chū wǔ rì, qìng zhù dé wēi jiāng jūn chéng dào jì niàn',
                    'dupa1' => '献向三炷',
                    'dupa2' => 'Xiàn xiàng sān zhù',
                    'sujud1' => '向 德威將軍 道喜 五叩首',
                    'sujud2' => 'Xiàng dé wēi jiāng jūn dào xǐ wǔ kòu shǒu',
                    'note' => 'Tambah BaiJie ( seperti kebaktian )',
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 20,
                    'acara' => 'Kesempurnaan B. Avalokitesvara',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '六月十九日, 慶祝 南海古佛 得道紀念',
                    'ritual2' => 'Liù yuè shí jiǔ rì, qìng zhù nán hǎi gǔ fó dé dào jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 南海古佛 道喜 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng nán hǎi gǔ fó dào xǐ sān guì jiǔ kòu sān kòu shǒu',
                    'note' => '',
                    'user_add' => 'admin',
                    'user_update' => 'admin',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 21,
                    'acara' => 'Kelahiran B. Satya Kalama',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '六月二十四日, 慶祝 關聖帝君 聖誕紀念',
                    'ritual2' => 'Liù yuè èr shí sì rì, qìng zhù guān shèng dì jūn shèng dàn jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 關聖帝君 拜壽 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng guān shèng dì jūn bài shòu sān guì jiǔ kòu sān kòu shǒu',
                    'note' => 'NULL',
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 22,
                    'acara' => 'Parinibana Fu Qian Ren',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '七月初一日, 慶祝 傅前人 成道紀念',
                    'ritual2' => 'Qī yuè chū yī rì, qìng zhù fù qián rén chéng dào jì niàn',
                    'dupa1' => '献向三炷',
                    'dupa2' => 'Xiàn xiàng sān zhù',
                    'sujud1' => '向 傅前人 道喜 五叩首',
                    'sujud2' => 'Xiàng fù qián rén dào xǐ wǔ kòu shǒu',
                    'note' => 'NULL',
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 24,
                    'acara' => 'Kelahiran Bapak Guru Agung',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '七月十九日, 慶祝 天然古佛 聖誕紀念',
                    'ritual2' => 'Qī yuè shí jiǔ rì, qìng zhù tiān rán gǔ fó shèng dàn jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 天然古佛 拜壽 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng tiān rán gǔ fó bài shòu sān guì jiǔ kòu sān kòu shǒu',
                    'note' => '',
                    'user_add' => 'admin',
                    'user_update' => 'admin',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 26,
                    'acara' => 'Parinibana Bapak Guru Agung',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '八月十五日, 慶祝 天然古佛 成道紀念',
                    'ritual2' => 'Bā yuè shí wǔ rì, qìng zhù tiān rán gǔ fó chéng dào jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 天然古佛 道喜 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng tiān rán gǔ fó dào xǐ sān guì jiǔ kòu sān kòu shǒu',
                    'note' => 'Tambah BaiJie ( Seperti Kebaktian )',
                    'user_add' => 'admin',
                    'user_update' => 'admin',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 27,
                    'acara' => 'Parinibana Bapak Guru Agung',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '八月十五日, 慶祝 天然古佛 成道紀念',
                    'ritual2' => 'Bā yuè shí wǔ rì, qìng zhù tiān rán gǔ fó chéng dào jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 天然古佛 道喜 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng tiān rán gǔ fó dào xǐ sān guì jiǔ kòu sān kòu shǒu',
                    'note' => 'Tambah BaiJie ( Seperti Kebaktian )',
                    'user_add' => 'admin',
                    'user_update' => 'admin',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 27,
                    'acara' => 'Kelahiran Ibu Guru Suci',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '八月二十八日, 慶祝 師母大人 聖誕紀念',
                    'ritual2' => 'Bā yuè èr shí bā rì, qìng zhù shī mǔ dà rén shèng dàn jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 師母大人 拜壽 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng shī mǔ dà rén bài shòu sān guì jiǔ kòu sān kòu shǒu',
                    'note' => 'NULL',
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 30,
                    'acara' => 'Parinibana B. Avalokitesvara',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '九月十九日, 慶祝 南海古佛 成道紀念',
                    'ritual2' => 'Jiǔ yuè shí jiǔ rì, qìng zhù nán hǎi gǔ fó chéng dào jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 南海古佛 道喜 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng nán hǎi gǔ fó dào xǐ sān guì jiǔ kòu sān kòu shǒu',
                    'note' => '',
                    'user_add' => 'admin',
                    'user_update' => 'admin',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 34,
                    'acara' => 'Parinibana Hong Chang Di Zun',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '十一月十五日, 慶祝 宏昌帝君 成道紀念',
                    'ritual2' => 'Shí yī yuè shí wǔ rì, qìng zhù hóng chāng dì jūn chéng dào jì niàn',
                    'dupa1' => '献向三炷',
                    'dupa2' => 'Xiàn xiàng sān zhù',
                    'sujud1' => '向 宏昌帝君 道喜 五叩首',
                    'sujud2' => 'Xiàng nán hǎi gǔ fó dào xǐ sān guì jiǔ kòu sān kòu shǒu',
                    'note' => 'NULL',
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 35,
                    'acara' => 'Parinibana Hao Ci Da Di',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '十一月十八日, 慶祝 好慈大帝 成道紀念',
                    'ritual2' => 'shí yī yuè shí bā rì, qìng zhù hǎo cí dà dì chéng dào jì niàn',
                    'dupa1' => '初献向三炷, 亞献向三炷, 終献向三炷',
                    'dupa2' => 'Chū Xiàn xiàng sān Zhù, yà Xiàn xiàng sān Zhù, zhōng Xiàn xiàng sān Zhù',
                    'sujud1' => '向 好慈大帝 道喜 三跪九叩 三叩首',
                    'sujud2' => 'Xiàng hǎo cí dà dì dào xǐ sān guì jiǔ kòu sān kòu shǒu',
                    'note' => 'NULL',
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'updated_at' => '2022-01-07'
                ],
                [
                    'acara_id' => 35,
                    'acara' => 'Mengantar Dewa Zao Jun',
                    'tahun_imlek_id' => 1,
                    'ritual1' => '十二月二十三日, 送駕 灶君',
                    'ritual2' => 'Shí èr yuè èr shí sān rì, sòng jià zào jūn',
                    'dupa1' => '献向三炷',
                    'dupa2' => 'Xiàn xiàng sān zhù',
                    'sujud1' => '向 灶君 送駕 五叩首',
                    'sujud2' => 'Xiàng zào jūn sòng jià wǔ kòu shǒu',
                    'note' => '',
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'updated_at' => '2022-01-07'
                ]
            ]);
    }
}
