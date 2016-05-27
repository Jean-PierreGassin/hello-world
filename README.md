# jean-pierregassin/hello-world

A package that says hello world

## Installation

Install this package via composer

`composer require jean-pierregassin/hello-world`

## Usage

```php
<?php

use Jean_PierreGassin\HelloWorld\HelloWorld;

$helloWorld = new HelloWorld();
$helloWorld->setName('Me');

$helloWorld->say();
// prints 'Hello Me!'

```
