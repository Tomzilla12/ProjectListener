<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Projects</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <div class="main">
      <?php
      $dirs = array_filter(glob('*'), 'is_dir');
      $pattern = '/^assets$/';
      foreach($dirs as $dir) {
        if (!preg_match($pattern, $dir)) {
          if ($dir != "private") {
            print("<a href=\"$dir\">
              <div class=\"project\">
                <h4 class=\"text\">$dir</h4>
              </div>
            </a>
            ");
          }
        }
      }
      ?>

    <!-- Scripts -->
			<script src="assets/js/main.js"></script>
  </body>
</html>