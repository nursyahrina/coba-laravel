<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Googlefonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;400;700&family=Satisfy&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <style>
        body {
            font-family: "Heebo", sans-serif;
        }

        a {
            text-decoration: none;
        }

        h1, h2, h3, .web-title {
            font-family: "Satisfy", cursive;
        }

        h1 {
            font-size: 3em;
        }

        h2 {
            font-size: 2.4em;
        }

        h3 {
            font-size: 1.8em;
        }

        .web-title {
            font-size: 1.5em;
        }

        .body-content {
            margin-top: 6rem;
        }

    </style>

    <title>Rubie'Studio | {{ $title }}</title>
  </head>
  <body>

      @include('partials.navbar')

      <div class="container body-content">
        @yield('container')
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

  </body>
</html>