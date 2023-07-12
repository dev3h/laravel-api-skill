## validate

-   when test api with custom request for validate code in controller, add in header in postman

```
key: Accept, value: application/json
key: Content-Type, value: application/json
```

-   Remember when validate, don't any space like this

```php
Bad:
'unique:skills, slug'

Good:
'unique:skills,slug'
```

## update

-   When you validate update, you want it is unique and then you click button update and you don't have any change, it is error because you set it is unique, solve it

```php
'slug' => ['required', 'unique:skills,slug,' . $this->skill->id],
```

-   $this->skill->id exclude id of current skill
-   Or like this:

```php
'slug' => ['required', Rule::unique('skills')->ignore($this->skill)],
```


