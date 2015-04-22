Vendor Package Bundle
=====================

This Symfony2 bundle aims to ...

Installation
------------

Add requirements to composer.json:

``` json
{
  "require" : {
    "vendor/package-bundle" : "~1.0"
  }
}
```

Register the bundle
-------------------

Register the bundle in the `AppKernel.php` file

``` php
// ...other bundles ...
$bundles[] = new Vendor\PackageBundle\VendorPackageBundle();
```

Configuration
-------------

Add the configuration to `config.yml`

``` yaml
vendor_package:
    config:
        key: value
```
