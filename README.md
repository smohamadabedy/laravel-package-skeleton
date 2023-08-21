# laravel-package-skeleton
A laravel package with all necessary configurations


Composer Configs
```
{
    
   "name": "App/my_package",  //name for your package and must follow Vendor/Name
    "description": "a package to be used in  Laravel", 
    "license": "MIT",
    "version": "1.0.0",
    // autoload and autoload-dev for defining namespaces in your package
    "autoload": {
        "psr-4": {
            "App\\MyPackage\\": "src/"
        }
    },
	 "autoload-dev": {
        "psr-4": {
            "App\\MyPackage\\Test\\": "test/"
        }
    },
    "authors": [
        {
            "name": "", // your name
            "email": "" // your email
        }
    ],
    "require-dev": {
		   "orchestra/testbench":"^7.2" 
	},

  // this one for auto-discovery
  "extra": {
        "laravel": {
            "providers": [
                "App\\MyPackage\\MyPackageServiceProvider"
            ]
        }
    }

    
}
```

for testing type
```
phpunit
```

or

```
 vendor/bin/phpunit
```

# add package to your project
to test in a dummy laravel project add following in your laravel composer.json
```
"repositories": {
        "dev-package":
        {
            "type": "path",
            "url": "your package absoloute address",
            "options":{
                "symlink": true
            }
        }
},
```

then run 
```
composer require App/my_package // or Vendor/Name
```
