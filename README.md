# SpacelessBlade
[![Latest Stable Version](https://poser.pugx.org/hedronium/spaceless-blade/v/stable)](https://packagist.org/packages/hedronium/spaceless-blade)
[![License](https://poser.pugx.org/hedronium/spaceless-blade/license)](https://packagist.org/packages/hedronium/spaceless-blade)
[![Total Downloads](https://poser.pugx.org/hedronium/spaceless-blade/downloads)](https://packagist.org/packages/hedronium/spaceless-blade)

Adds a @spaceless tag to Laravel's Blade templating engine, based on https://github.com/renatomarinho/laravel-page-speed CollapseWhitespace

In twig you could do:
```twig
{% spaceless %}
    <div>
        <strong>foo</strong>
    </div>
{% endspaceless %}
```

Do you miss [Twig](http://twig.sensiolabs.org/doc/tags/spaceless.html)'s 
`{% spaceless %}` tag while working with Laravel's Blade?

With this package you can do this in Laravel's Blade too (without using Twig, of course).
Example:
```blade
@spaceless
    <div>
        <strong>foo</strong>
    </div>
@endspaceless
```

Example Output:
```html
<div><strong>foo</strong></div>
```

## Installation
### Get the Package
For **Laravel 5.1** or above, get version 2, by adding the following lines to composer.json
```
"hedronium/spaceless-blade": "~2.0"
```

For **Laravel 4** or above, get version 1 with latest patches, by adding the following lines to composer.json
```
"hedronium/spaceless-blade": "~1.0"
```


### Register the Service Provider
For **Laravel 5.4** and below, open up your `app.php` in your `config` folder, and add the following line to your `providers` list like:

```
'providers' => array(
    ...
    'hedronium\SpacelessBlade\SpacelessBladeProvider'
)
```
