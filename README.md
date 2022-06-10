# Blade StoreFront Icons

A package to easily make use of StoreFront Icons in your Laravel Blade views.

## Available icons

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

```bash
composer require forrodominik/blade-sf-icons
```

## Configuration

Blade StoreFront Icons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-sf-icons.php` config file:

```bash
php artisan vendor:publish --tag=blade-sf-icons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-sf-icon-adjustments/>
```

You can also pass classes to your icon components:

```blade
<x-sf-icon-adjustments class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-sf-icon-adjustments style="color: #555"/>
```

The solid icons can be referenced like this:

```blade
<x-sf-icon-s-adjustments/>
```
