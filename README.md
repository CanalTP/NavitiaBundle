NavitiaBundle
=============

Requirements
-------------

- php5
- composer

Installation
-------------

### 1. Add "canaltp/navitia-bundle" in your composer.json file

    composer require "canaltp/navitia-bundle"

### 2. Add configuration in your config.yml

    canal_tp_navitia:
        configuration:
            url: 'http://api.navitia.io'
            token: YOUR_TOKEN
            format: object

### 3. Do request

    $query = array(
        'api' => 'coverage',
        'parameters' => [
            'region' => 'centre'
        ]
    );
    $coverages = $this->get('canal_tp.navitia')->call($query);

Contributing
-------------

1. Rémy Abi-khalil <https://github.com/netmisa>
2. Julien Maulny <https://github.com/alcalyn>
3. Ludovic Roche <https://github.com/lrocheWB>
