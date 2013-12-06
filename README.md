wordpress-faker
===============

generate Wordpress Posts with Alice/Faker

Installation
------------

with **Composer** :

```json
{
    "require-dev": {
        "digitalkaoz/wordpress-faker": "dev-master"
    }
}
```

as executable **PHAR** :

```
$ wget http://digitalkaoz.github.com/wordpress-faker/wordpress-faker.phar
```

Usage
-----

simply define a Alice Faker File (see https://github.com/nelmio/alice and https://github.com/fzaninotto/Faker)

here is a simple Example:

```yaml
digitalkaoz\WordpressFaker\Post:     #using this class is mandatory
    posts{1..10}:                    #will be a wp_post
        __set: __set
        post_title: <sentence()>
        post_status: 'publish'
        post_content: <paragraphs(6)>
        post_author: 1
        meta:                        #all these parameters will be wp_post_meta
          my_custom_meta: <boolean()>
```

Then run the Generation:

```
$ php wordpress-faker.phar fake PATH/TO/my_faker.yml PATH/TO/wp_config.php
```

**Voila** you have created 10 random Posts

Tests
-----

to be followed

TODO
----

* more wordpress features
* Tests
