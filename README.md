![Unit Tests](https://github.com/treehousetim/exception/workflows/Unit%20Tests/badge.svg)

# treehousetim/exception
A PHP Exception class to use as a base for exception handling in well structured web apps.

## Installing

`composer require treehousetim/exception`

## Using
After installing, create your own class that extends `treehousetim\exception\Exception`.

Each namespace area of your code should implement its own `Exception.php`

Each Exception class should create class constants for relevant codes.

Exceptions are thrown with a variable length parameter list with the code as the very last parameter.

## Throwing

To throw an exception, you can build up your message with multiple parameters.  Place your code as the last parameter.
Exception messages are concatenated from the parameters with `PHP_EOL` as the glue.

```php
throw new Exception(
	'This',
	'is',
	$lib->getErrorText(),
	'bad',
	Exception::normalError
);
```

## Examples

### Exception class for somefancylibrary

```php
<?php namespace treehousetim\somefancylibrary;

class Exception extends \treehousetim\exception\Exception
{
	const normalError = 0;
	const shinyError = 1;
	const matteError = 2;
	const sphericalError = 3;
}
```

### Some Fancy Library

```php
<?php namespace treehousetim\somefancylibrary;

class burgerifier
{
	public function zorkAdventure()
	{
		throw new Exception(
			'This',
			'is',
			$lib->getErrorText(),
			'bad',
			Exception::normalError
		);
	}
}
```