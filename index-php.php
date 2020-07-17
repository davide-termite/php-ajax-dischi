<?php include __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <title>Spofity</title>
  </head>
  <body>

    <!-- Header -->
    <header>

      <div class="container">

      </div>

    </header>
    <!-- End Header -->

    <!-- Main -->
    <main>

      <div class="container">

        <?php foreach ($database as $song){ ?>

          <div class="track-card">

            <div class="track-poster">
              <img src="<?php echo $song["poster"] ?>" alt="Track Poster">
            </div>

            <div class="track-infos">
              <h2 class="track-title"> <?php echo $song["title"] ?> </h2>
              <h5 class="track-author"> <?php echo $song["author"] ?> </h5>
              <span class="track-release-year"> <?php echo $song["year"] ?> </span>
            </div>

          </div>

        <?php } ?>

      </div>

    </main>
    <!-- End Main -->

  </body>
</html>
