<?php
require_once('header.php');

$btnTxt = array("Home", "Portfolio", "Contact"
);
?>

<body>
  <section>
    <header>
      <nav class="nav-menu">
        <div class="banner">
          <!-- Brand/logo -->
          <?php
            echo <<<_END
              <div>
                  <a href="index.php"><i class="fas fa-home"></i>$btnTxt[0]</a>
                  <a href="$btnTxt[1].php">$btnTxt[1]</a>
                  <a href="$btnTxt[2].php"><i class="fas fa-user"></i>$btnTxt[2]</a>
              </div>
          _END;
          ?>
          </a>
        </div>
      </nav>
    </header>
  </section>