# Laravel Sluggable

A trait to use on your models to generate slugs based on another attribute's value. Supports translated attributes (using [spatie/laravel-translatable](https://github.com/spatie/laravel-translatable)).

## Installation

You can install the package via composer:

```bash
composer require whitecube/laravel-sluggable
```

## Usage

``` php
namespace App;

use Whitecube\Sluggable\HasSlug;

class Post extends Model
{
    use HasSlug;

    public $sluggable = 'title';
}
```

### Changing the slug storage attribute

By default, the slug is configured to be stored in an attribute named `slug`. You can overwrite this setting with the `public $slugStorageAttribute` property on your model.

```php
namespace App;

use Whitecube\Sluggable\HasSlug;

class Post extends Model
{
    use HasSlug;
  
    public $sluggable = 'title';

    public $slugStorageAttribute = 'custom-slug-column';
}
```

### Conditional sluggable attributes

If needed, you can overwrite the trait's `getSluggable()` method and put your own sluggable attribute choice logic in it:

```php
namespace App;

use Whitecube\Sluggable\HasSlug;

class Post extends Model
{
    use HasSlug;
  
    /**
     * Get the attribute name used to generate the slug from
     *
     * @return string
     */
    public function getSluggable()
    {
        return $this->title ? 'title' : 'author';
    }
}
```

### Translated slugs

You can generate slugs based on translated attributes (using [spatie/laravel-translatable](https://github.com/spatie/laravel-translatable)). Remember to add the `slug` attribute to the `public $translatable` array to easily access them.

```php
namespace App;

use Whitecube\Sluggable\HasSlug;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasSlug;
    use HasTranslations;
  
    public $translatable = ['title', 'slug'];
    
    public $sluggable = 'title';
}
```

```php
Post::create([
    'title' => [
        'en' => 'The title',
        'fr' => 'Le titre'
    ]
]);

$post->getAttributes()['slug']; // ['en' => 'the-title', 'fr' => 'le-titre']
$post->slug; // the-title (given that the crrent app locale is 'en')
$post->translate('slug', 'fr'); // 'le-titre'
```

## Route Model Binding

Be advised that this package overrides the `getRouteKeyName` method, which means [Laravel's Route Model Binding](https://laravel.com/docs/master/routing#route-model-binding) will use the slug attribute by default (or the `$slugStorageAttribute` you have defined). In most cases, this is great, saves you a step and cleans up your models, but if you must, you can change it to whatever you like.

When using Route Model Binding, some other interesting features become available.

### Custom Route Model Binding Query

Sometimes you'd want to add custom behavior to the query Laravel performs. This packages makes it possible to hook into the query by defining a `getRouteBindingQuery` method on the model, which could be useful in several cases such as including soft-deleted results :

```php
namespace App;

use Whitecube\Sluggable\HasSlug;

class Post extends Model
{
    use HasSlug;
    
    // ...

    protected function getRouteBindingQuery($query) {
        return $query->withTrashed();
    }
}
```

### Cross-language redirects

If the slug provided in the URL does not correspond to the current locale's slug translation, but corresponds to a slug in another language, this package can automatically redirect to the proper slug.

An example: given the above example's post, we could imagine the following routing configuration:

```
/en/posts/the-title
/fr/articles/le-titre
```

But if we visit `/fr/articles/the-title`, the package will automatically perform a `301` redirect to `/fr/articles/le-titre`.

This behavior can be disabled by setting `public $slugTranslationRedirect = false;` on your model, in which case visiting `/fr/articles/the-title` will just render a `404` page.

### Translated URL generator

Do you need to generate alternate locale links for a translated sluggable model? We've got you covered. Take a look at `getSluggedUrlForRoute($route, $locale, $fullUrl)`:

```php
$post = Post::create([
    'title' => [
        'en' => 'The title in English',
        'fr' => 'Le titre en Français'
    ]
]);

$alternates = [];

foreach (['en', 'fr'] as $locale) {
    $alternates[] = $post->getSluggedUrlForRoute(Route::current(), $locale);
}
```

Considering the current route being `/blog/{post}/{tab}` with request parameter `{tab} = 'comments'`, the result would be:
```
/blog/the-title-in-english/comments
/blog/le-titre-en-francais/comments
```

## 💖 Sponsorships 

If you are reliant on this package in your production applications, consider [sponsoring us](https://github.com/sponsors/whitecube)! It is the best way to help us keep doing what we love to do: making great open source software.

## Contributing

Feel free to suggest changes, ask for new features or fix bugs yourself. We're sure there are still a lot of improvements that could be made, and we would be very happy to merge useful pull requests.

Thanks!

## Made with ❤️ for open source

At [Whitecube](https://www.whitecube.be) we use a lot of open source software as part of our daily work.
So when we have an opportunity to give something back, we're super excited!

We hope you will enjoy this small contribution from us and would love to [hear from you](mailto:hello@whitecube.be) if you find it useful in your projects. Follow us on [Twitter](https://twitter.com/whitecube_be) for more updates!
