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
# Dependency

This project depends on [swagger-php](https://zircote.github.io/swagger-php).

# Annotations

Read about annotations in [swagger-php annotations](https://zircote.github.io/swagger-php/reference/annotations.html).

# Model for API page

The following page shows the documentation generated by this component. You only need to replace [WEB ROOT ROUTE] bu the root URL of your application.

```html
<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="[WEB ROOT ROUTE]swagger-ui.css" >
    <link rel="icon" type="image/png" href="[WEB ROOT ROUTE]>favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="[WEB ROOT ROUTE]>favicon-16x16.png" sizes="16x16" />
    <style>
      html
      {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
      }

      *,
      *:before,
      *:after
      {
        box-sizing: inherit;
      }

      body
      {
        margin:0;
        background: #fafafa;
      }
    </style>
  </head>

  <body>
    <div id="swagger-ui"></div>
    <script src="<?=$this->url('home')?>swagger-ui-bundle.js"> </script>
    <script src="<?=$this->url('home')?>swagger-ui-standalone-preset.js"> </script>
    <script src="<?=$this->url('home')?>spec.js"> </script>
    <script>
    window.onload = function() {
      // Begin Swagger UI call region
      const ui = SwaggerUIBundle({
        //url: "https://petstore.swagger.io/v2/swagger.json",
        spec : spec,
        dom_id: '#swagger-ui',
        deepLinking: true,
        presets: [
          SwaggerUIBundle.presets.apis,
          SwaggerUIStandalonePreset
        ],
        plugins: [
          SwaggerUIBundle.plugins.DownloadUrl
        ],
        layout: "StandaloneLayout"
      })
      // End Swagger UI call region

      window.ui = ui
    }
  </script>
  </body>
</html>
```

