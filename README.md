NavitiaBundle
=============

Requirements
-------------

- php5
- composer

Installation
-------------

### 1. Update your AppKernel file

```php
# app/AppKernel.php
[...]
new CanalTP\NavitiaBundle\CanalTPNavitiaBundle(),
[...]
```

### 2. Add "canaltp/navitia-bundle" in your composer.json file

```shell
composer require "canaltp/navitia-bundle"
```

### 3. Add configuration in your config.yml

```yml
# app/config.yml
canal_tp_navitia:
    configuration:
        url: 'http://api.navitia.io'
        token: YOUR_TOKEN
        format: object
```

### 4. Do request

```php
$query = array(
    'api' => 'coverage',
    'parameters' => [
        'region' => 'centre'
    ]
);
$coverages = $this->get('canal_tp.navitia')->call($query);
```


Suggest
-------

You can use [Navitia Profiler](https://github.com/CanalTP/NavitiaProfilerBundle) to see all request in your profiler.

### 1. Update your AppKernel file

```php
# app/AppKernel.php
[...]
new CanalTP\NavitiaProfilerBundle\NavitiaProfilerBundle(),
[...]
```


### 2. Add "canaltp/navitia-profiler-bundle" in your composer.json file

```shell
composer require "canaltp/navitia-profiler-bundle"
```

### 3. Overload your config

```yml
canal_tp.navitia:
  [...]
  arguments: ['@navitia_profiler']
  [...]
```

Contributing
------------

1. Rémy Abi-khalil <https://github.com/netmisa>
2. Julien Maulny <https://github.com/alcalyn>
3. Ludovic Roche <https://github.com/lrocheWB>

License
-------

The library is under [MIT](LICENSE).
