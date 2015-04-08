Tool to manage particular SEO Metas and text for especial pages
===============================================================
If you need set a special seo metas or text in different pages this is your extension

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


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \jpunanua\seotools\AutoloadExample::widget(); ?>```








The extension has been generated successfully.
To enable it in your application, you need to create a git repository and require it via composer.

cd /incumad/beforeeat/backend/runtime/tmp-extensions/yii2-seotools

git init
git add -A
git commit
git remote add origin https://path.to/your/repo
git push -u origin master
The next step is just for initial development, skip it if you directly publish the extension on packagist.org
Add the newly created repo to your composer.json.

"repositories":[
    {
        "type": "git",
        "url": "https://path.to/your/repo"
    }
]
Note: You may use the url file:///incumad/beforeeat/backend/runtime/tmp-extensions/yii2-seotools for testing.
Require the package with composer

composer.phar require jpunanua/yii2-seotools:dev-master
And use it in your application.

\jpunanua\seotools\AutoloadExample::widget();
When you have finished development register your extension at packagist.org.