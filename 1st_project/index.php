<?php 
    require_once('nav.php');
?>
<title>Homepage</title>
</head>

<body>
<section>
    <header>
        <div class="banner">
            <p class="date"><?php $mydate=getdate(date("U")); echo "$mydate[weekday], $mydate[mday] $mydate[month],  $mydate[year]"; ?></p>
            <h1>Welkom</h1>
        </div>
    </header>
</section>

<main>
<section>
    <div class="main-container ">
        <h2>Hello</h2>
    </div>
</section>
</main>
    
<?php 
    require_once('footer.php');
?>