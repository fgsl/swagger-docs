# Installation in a PHP project

Run command:

    composer require fgsl/swagger-docs

For getting Composer: https://getcomposer.org/download/

# How to use

See sample below: 

```bash
vendor/bin/fsd
```

Defaults: **source directory:** src/ **target directory:** public/.

For an alternative source directory, pass the directory name as first argument.

For an alternative target directory, pass the directory name as second argument.

So: 

```bash
vendor/bin/fsd [sourceDirectory] [targetDirectory]
```

[sourceDirectory] and [targetDirectory] are relative to root directory of application.

# Build

```bash
vendor/bin/phing
```

# Annotations

Read about annotations in:

https://zircote.github.io/swagger-php
