## show with resource

-   if you want to return with obj data you can you resource like this

```php
php artisan make:resource V1/SkillResource
```

and use like this

```php
return new SkillResource($skill);
```

-   It return with obj data

```
data: {
    name: 'css',
    slug: 'css'
}
```

-   You can custom what you want to return in file SkillResource.php

```php
public function toArray($request)
{
    return [
        'name' => $this->name,
        'slug' => $this->slug,
    ];
}
```

-   If you don't use resource, it return like this

```
name: 'css',
slug: 'css'
```

## Collection

-   Use **collection** to return list data

```php
return SkillResource::collection(Skill::all());
```

-   Or can paginate

```php
return SkillResource::collection(Skill::paginate(10));
```
