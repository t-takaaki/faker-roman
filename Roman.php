<?php

namespace Faker\Provider;

class Roman extends \Faker\Provider\Person
{
    // ローマ市民の男子の名は、個人名（praenomen）・氏族名（nomen gentile）・家族名（cognomen）・添え名（agnomen）からなっていた。 Wikipediaしらべ
    protected static $romanNameFormats = array(
        '{{praenomen}}＝{{nomen_gentile}}＝{{cognomen}}＝{{agnomen}}',
    );

    protected static $praenomen = array(
        'アウルス', 'アッピウス', 'ガイウス', 'グナエウス', 'デキムス', 'フラウィウス', 'カエソー', 'ルキウス', 'マルクス', 'マニウス', 'マーメルクス', 'ヌメリウス', 'プブリウス', 'クィントゥス', 'セルウィウス', 'セクストゥス', 'スプリウス', 'ティトゥス', 'ティベリウス', 'プリムス', 'セクンドゥス', 'テルティウス', 'クァルトゥス', 'クィーントゥス', 'セクストゥス', 'セプティムス', 'オクタウィウス', 'ノニウス', 'デキムス', 'サルウィウス', 'スタティウス', 'ウィブリウス');

    protected static $nomen_gentile = array(
        'アエミリウス', 'アントニウス', 'ウァレリウス', 'ウィプサニウス', 'カルプルニウス', 'クィンクティウス', 'クラウディウス', 'コルネリウス', 'スルピキウス', 'セルウィリウス', 'センプロニウス', 'ティトゥリウス', 'テレンティウス', 'ドミティウス', 'ファビウス', 'フルウィウス', 'ポンペイウス', 'マンリウス', 'ユニウス', 'ユリウス', 'リウィウス', 'リキニウス'
    );

    protected static $cognomen = array(
        'アグリッパ', 'アントニヌス', 'ウァロ', 'カエキリウス・メテッルス', 'カエサル', 'カトー', 'カルス', 'ガルバ', 'クラッスス
サビヌス', 'スキピオ', 'ドルスス', 'パウルス', 'ピソ', 'ブルトゥス', 'マルケッルス'
    );

    protected static $agnomen = array(
        'アウグストゥス', 'アフリカヌス', 'インペラトル', 'オクタウィアヌス', 'ゲルマニクス', 'プリンケプス'
    );


    public function name()
    {
        $format = static::randomElement(static::$romanNameFormats);
        return $this->generator->parse($format);
    }

    public static function praenomen()
    {
        return static::randomElement(static::$praenomen);
    }

    public static function nomen_gentile()
    {
        return static::randomElement(static::$nomen_gentile);
    }

    public static function cognomen()
    {
        return static::randomElement(static::$cognomen);
    }

    public static function agnomen()
    {
        return static::randomElement(static::$agnomen);
    }
}
