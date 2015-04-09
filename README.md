Tool to manage particular SEO Metas and text for especial pages
===============================================================
If you need set unique seo title, description associated with a page this is your extension, you can also add a html text using 
a wysiwis tool to add bold and links and improve your SEO in page with a unique content.

Set this fields using a module to manage all this functionality.

Use internally a md5 hash to made a unique id with (Host + Path) to identify pages and yii cache system to improve speed

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist jpunanua/yii2-seotools "*"
```

or add

```
"jpunanua/yii2-seotools": "*"
```

to the require section of your `composer.json` file.

###Migration


Run the following command in Terminal for database migration:

Linux/Unix:
```
yii migrate/up --migrationPath=@vendor/jpunanua/yii2-seotools/migrations
```

Windows:
```
yii.bat migrate/up --migrationPath=@vendor/jpunanua/yii2-seotools/migrations
```

###Config

A simple exmple of turning on seotool component.

```php
'components' => [
        'seotools' => [
            'class' => 'jpunanua\seotools\Component',
        ],
    ],
```


Turning on the seotools Module:


Simple example:

```php
    'modules' => [
        'seotools' => [
            'class' => 'jpunanua\seotools\Module',
            'roles' => ['@'], // For setting access levels to the seotools interface.
        ]
    ],
```

Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
 // @param bool $setCanonical true, try to create a canonical url and og url, action needs to have params
 // @param bool $checkDb try to get from DB params, true: try to get info from DB if it doesn't find save a new field
 // associated to current host + '/' + path, false: it just set the params give in the call. The db params has priority
 // over the call function params. It does a merge
$setCanonical = false;
$checkDb = true;
Yii::$app->seotools->setMeta(['title' => \Yii::t('title','A good title for this page')], $setCanonical, $checkDb);
```

###URLs

URLs for the seotools manage module:

```php
/seotools/manage
/seotools/manage/create
```

