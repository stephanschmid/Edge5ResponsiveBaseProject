# MtHaml Bundle

[HAML][haml] Symfony bundle using the [MtHaml PHP HAML parser][mthaml].

## Features

- **Acts as a Twig preprocessor**: Supports Twig functions, filters, macros, blocks, inheritance, expressions and every Twig features
- **Mix Twig and HAML templates**: You can include, extend, use and import Twig templates from HAML templates, and vice versa.
- **High performance**: Templates are compiled to PHP code and cached, no parsing or runtime overhead.
- **HAML syntax** supported by editors

## Installation

### Step 1: Download MtHaml and MtHamlBundle

#### Using Composer

```
$ composer require mthaml/mthaml-bundle:dev-master
```

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new MtHamlBundle\MtHamlBundle(),
    );
}
```

### Step 3: Configure the MtHamlBundle

``` yml
# app/config/config.yml

framework:
    # ...
    templating:
        engines: ['haml','twig']

# required, for Symfony to load the bundle configuration
mt_haml:
```

(This is required, for Symfony to load the bundle configuration.)

### Step 4: Use it

#### With the @Template() annotation:

``` php
/**
 * @Template(engine="haml")
 */
public function fooAction() {
```

#### With the @Haml() annotation:

The `@Haml` annotation is a sub class of `@Template` with `engine` set to `haml` by default.

``` php
/**
 * @Haml
 */
public function fooAction() {
```

#### With ->render()

``` php
public function bazAction() {
    $this->render('FooBundle:Bar:baz.html.haml');
}
```

#### With FOSRestBundle:

``` php
/**
 * @View(engine="haml")
 */
public function fooAction() {
```

## Syntax

See [MtHaml][mthaml] docs

[haml]: http://haml-lang.com/
[mthaml]: https://github.com/arnaud-lb/MtHaml

## Commands

### mthaml:debug:dump

The mthaml:debug:dump command compiles a HAML templates into Twig and displays the resulting Twig template.

For debug purposes.

Example:

    php ./app/console mthaml:debug:dump AcmeDemoBundle:Demo:index.html.haml
