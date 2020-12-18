<?php
require_once('nav.php');
?>
<title>Contact</title>
</head>
<body>
    <main>
        <section>
            <div class="main-container ">
                <p class="date">
                    <?php $mydate = getdate(date("U"));
                    echo "$mydate[weekday], $mydate[mday] $mydate[month],  $mydate[year]";
                    ?>
                </p>
                <h2>Contact</h2>
            </div>
        </section>
    </main>
    <?php
    require_once('footer.php');
    ?>