# php-template

Template is an interface that represents a template to include.

## Requirements

php >=7.0

## Installation

Let the folder structure of your project look like the one described below.

```
root/
	bin/
	config/
	docs/
	public/
		index.php
	resources/
	src/
	tests/
```

To install this package via Composer you must add it to your `composer.json` file in the root of your project. 

```json
/* composer.json */
{
    "name": "myname/myproject",
	"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/zamasaur/php-template.git"
        }
    ],
    "require": {
        "zamasaur/php-template": "dev-master"
    }
}
```

You can now install the dependencies by running Composer's install command.
```
$ composer install
```

To use it you must include this line inside your `index.php`:

```php
require_once __DIR__ . "/../vendor/autoload.php";
```

## Usage

Let the folder structure of your project look like the one described below.

```
root/
	bin/
	config/
	docs/
	public/
		index.php
	resources/
		templates/
			template.php
	src/
	tests/
	vendor/
```

Let say that your template look like the one described below.

```php
/* template.php */
<!DOCTYPE html>
<html>
<head>
	<title>
		<!-- TITLE -->
	</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php echo "Hello, World!<br>"; ?>
	<!-- BODY -->
</body>
</html>
```

### incorporate

Includes the file by replacing the strings defined in `$searchArray` with those defined in `$replaceArray`.

```php
/* index.php */
require_once __DIR__ . "/../vendor/autoload.php";
use Zamasaur\PhpTemplate\TemplateImpl;

$filename = __DIR__ . "/../resources/templates/template.php";
$template = new TemplateImpl($filename);

$searchArray = array("<!-- TITLE -->", "<!-- BODY -->");
$replaceArray = array("MyTitle","MyBody");

$template->incorporate($searchArray, $replaceArray);
```

### incorporateOnce

Includes only once the file by replacing the strings defined in `$searchArray` with those defined in `$replaceArray`.

```php
/* index.php */
require_once __DIR__ . "/../vendor/autoload.php";
use Zamasaur\PhpTemplate\TemplateImpl;

$filename = __DIR__ . "/../resources/templates/template.php";
$template = new TemplateImpl($filename);

$searchArray = array("<!-- TITLE -->", "<!-- BODY -->");
$replaceArray = array("MyTitle","MyBody");

$template->incorporateOnce($searchArray, $replaceArray);
```

## UnitTest

This package comes with a series of UnitTest, to run them you must use the following command in a terminal opened in the root folder.

```
$ ./vendor/bin/phpunit tests
```

## PHPDoc

This package comply with the PHPDoc standard, to generate them you must use the following command in a terminal opened in the root folder.

```
$ ./vendor/bin/phpdoc -d ./src -t ./docs/api
```
