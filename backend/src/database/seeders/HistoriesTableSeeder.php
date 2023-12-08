<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('histories')->insert([
            [
                'id' => '1',
                'title' => '手紙',
                'author' => '慶応元年十月十二日　印藤肇あて',
                'member_id' => 'd42c7f12-3a25-44ed-8224-80cdca97ed68',
                'public' => true,
                'events' => json_encode([
                    ['age' => 7, 'score' => -7, 'title' => '小学生', 'text' => '二白、今夜も助大夫とのみ呑ており申候。昨夜道路中うかゞい候事件色々相考候所、何レ急成ハかへりて両方の志通じかね'],
                    ['age' => 14, 'score' => 59, 'title' => '中学生', 'text' => '何レ御深慮千万の中と奉存候。右御報拝捧候。十二日龍'],
                    ['age' => 16, 'score' => -53, 'title' => '高校生', 'text' => '印藤大兄足下。猶けふハ船の事大ニ御セ話被遣候'],
                    ['age' => 18, 'score' => -32, 'title' => '大学受験', 'text' => '御礼千万語言にかへかね候。○いさ順助兄も唯今出崎時計御頼ニ候て御帰り被成候'],
                    ['age' => 19, 'score' => 6, 'title' => '大学生活', 'text' => '再拝※。印藤大将軍陣下龍。返報入。底本：龍馬の手紙宮地佐一郎、講談社学術文庫、講談社'],
                    ['age' => 22, 'score' => 1, 'title' => '現在', 'text' => '2003（平成15）年12月10日第1刷発行']
                ]),
                'created' => '2014-01-21 06:25:27',
                'updated' => '2014-01-21 06:25:27'
            ],
            [
                'id' => '2',
                'title' => '黒馬車',
                'author' => '宮本百合子',
                'member_id' => '0c9d739e-c106-407a-ad46-f9ed98379372',
                'public' => true,
                'events' => json_encode([
                    ['age' => 7, 'score' => -22, 'title' => '小学生', 'text' => '時候あたりだろうと云って居た宮部の加減は、よくなるどころか却って熱なども段々上り気味になって来た'],
                    ['age' => 14, 'score' => 35, 'title' => '中学生', 'text' => '地体夏に弱い上に、此の間どうしたのか頭の工合を悪くして三日ほど床について居た揚句にたべたかつおの刺身'],
                    ['age' => 16, 'score' => -6, 'title' => '高校生', 'text' => 'まあほんとに不養生な、。白肉のでさえたべない様にして居るのにねえ'],
                    ['age' => 18, 'score' => 5, 'title' => '大学受験', 'text' => 'あんなに云って置いたのをきかないからなんだよ'],
                    ['age' => 19, 'score' => -24, 'title' => '大学生活', 'text' => 'と主婦は顔をしかめながら、例の人の難儀をすてて置かれない性分で早速、医者を迎えた'],
                    ['age' => 22, 'score' => 12, 'title' => '現在', 'text' => '今じきにあがりますと云いながら、夕方になっても来て呉れないので、家の者は、書生が悪いと云ったので一寸逃']
                ]),
                'created' => '2004-08-22 18:00:34',
                'updated' => '2009-11-02 09:21:16'
            ],

        ]);
    }
}
