Provides Super Cow Power to your Symfony2 Project
=================================================

[![Latest Stable Version](https://poser.pugx.org/kzykhys/super-cow-power/v/stable.png)](https://packagist.org/packages/kzykhys/super-cow-power)
[![Build Status](https://travis-ci.org/kzykhys/SuperCowPower.png?branch=master)](https://travis-ci.org/kzykhys/SuperCowPower)
[![Coverage Status](https://coveralls.io/repos/kzykhys/SuperCowPower/badge.png)](https://coveralls.io/r/kzykhys/SuperCowPower)

             (__)
             (oo) <"There are no Easter Eggs in this framework."
       /------\/
      / |    ||
     *  /\---/\
        ~~   ~~


Installation
------------

Update your composer.json and run `php composer.phar update`

``` json
{
    "require": {
        "kzykhys/super-cow-power": "~1.0"
    }
}
```

Update your AppKernel.php

``` php
if (in_array($this->getEnvironment(), array('dev', 'test'))) {
    //...
    $bundles[] = new SuperCowPower\Bundle\SuperCowBundle\SuperCowPowerSuperCowBundle();
}
```

Usage
-----

Moo `php app/console help`

Testing
-------

Run `phpunit`

License
-------

GPL-2.0

------

             (__)
             (oo) <"Have you mooed today?"
       /------\/
      / |    ||
     *  /\---/\
        ~~   ~~

