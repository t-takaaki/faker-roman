# faker Roman
* モックオブジェクト生成ライブラリ faker でランダムな古代ローマ人名を作成するためのプラグインです

## How to use
* composerが生成する autoload.php もしくは faker 以下の autoload.php を読み込み、ルートディレクトリ直下の src/Roman.php をrequireします

* fakerのFactoryクラスのクラスメソッド create のパラメータに 'ja_RO' を渡します
* 生成されたインスタンスから以下のメソッドをコールするとそれに基づいたローマ人がランダムで返ってきます

```index.php
// load composer plugins (include faker)
require_once './vendor/autoload.php';
// load Roman
require_once './src/Roman.php';

$faker = Faker\Factory::create('ja_RO');
echo $faker->name(); // マルクス・アウレリウス・アントニヌス
```

### name
* このメソッドは以下のルールに基づいた、古代ローマ人のフルネームを返します

```
個人名（praenomen）・氏族名（nomen gentile）・家族名（cognomen）・添え名（agnomen）
```

### praenomen
* このメソッドは古代ローマ人の「個人名」を返します

### nomen_gentile
* このメソッドは古代ローマ人の「氏族名」を返します

### cognomen
* このメソッドは古代ローマ人の「家族名」を返します

### agnomen
* このメソッドは古代ローマ人の「添え名」を返します