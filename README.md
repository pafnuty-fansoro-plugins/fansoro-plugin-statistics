# Statistics Plugin for [Morfy CMS](http://morfy.org/)
Very simple plugin for show statistics page generation in the end of current page.
Like this:

```
<!-- 
    Run time: 0.022 s.
    Memory consumption: 0.236 Mb
 -->
```

## Install
1. Place `statistics` folder in `plugins` folder into Morfy CMS.
2. Edit `config.php`.

## Configuration
Just add `statistics` to `plugins` array in gonfig.php
```php
# config.php
return array(
    ...
    'plugins' => array(
        'markdown',
        'sitemap',
        'statistics', // <= Enable Statistics Plugin
    )
    ...
);
```

## License 
[MIT](https://github.com/pafnuty/morfy-statistics/blob/master/LICENSE)





