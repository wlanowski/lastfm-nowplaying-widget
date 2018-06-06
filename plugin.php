<?php include __DIR__ . "/include/model.php";
/*
Follow things can be used
$track['nowplaying']
$track['url']
$track['artist'];
$track['name']
$track['album']
$track['userloved']
$track['playcount']
$track['image']
$track['date']
$track['time']   time in uts, added by wlanowski
*/
?>
<!DOCTYPE HTML>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title><?php echo $username; ?> auf last.fm</title>

    <!-- Font Awesome with Brands -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/solid.css" integrity="sha384-Rw5qeepMFvJVEZdSo1nDQD5B6wX0m7c5Z/pLNvjkB14W6Yki1hKbSEQaX9ffUbWe" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/brands.css" integrity="sha384-VGCZwiSnlHXYDojsRqeMn3IVvdzTx5JEuHgqZ3bYLCLUBV8rvihHApoA1Aso2TZA" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/fontawesome.css" integrity="sha384-GVa9GOgVQgOk+TNYXu7S/InPTfSDTtBalSgkgqQ7sCik56N9ztlkoTr2f/T44oKV" crossorigin="anonymous">



    <link rel="stylesheet" href="include/widget.css">
    <style type="text/css">
        /* Because of PHP-var, background-image is defined here */
        .background {
            background-image: url(<?php echo $track['image'];?>);
        }
    </style>

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <?php if($autorefresh) { ?><meta http-equiv="refresh" content="100"><?php } ?>
</head>

<body>
<div class="outer" id="outer">
    <div class="background">
        <div class="heavenbox" id="heavenbox">
            <a href="https://last.fm/user/<?php echo $username;?>"><i class="fab fa-lastfm awesome-big"></i></a>
            <a href="https://github.com/wlanowski/lastfm-nowplaying-widget"><i class="fab fa-github awesome-big"></i></a>
            <!--
                        <i class="fa fa-lastfm-square>"
                        <i class="fa fa-github-square>"
            -->
        </div>
        <div class="infobox" id="infobox">
            <div class="songname">
                <i class="fa fa-music awesome"></i>
                <?php echo $track['name']; ?>
            </div>
            <div id="statistic1">
                <div class="property">
                    <i class="fa fa-microphone awesome"></i>
                    <?php echo $track['artist']; ?>
                </div>
                <div class="property">
                    <i class="fa fa-compact-disc awesome"></i>
                    <?php echo $track['album']; ?>
                </div>
            </div>
            <div id="statistic2">
                <div class="property">
                    <i class="fa fa-clock awesome"></i>
                    <?php
                    if ($track['nowplaying'] != '') {
                        echo 'spielt gerade...';
                    } else
                        echo 'gehört am ' . date('d.m.y \u\m H:i', $track['time']);
                    ?>
                </div>
                <div class="property">
                    <i class="fa fa-history awesome"></i>
                    <?php
                    echo 'Counter: ' . $track['playcount']
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(function () {
        var $els = $('div[id^=statistic]'),
            i = 0,
            len = $els.length;

        $els.slice(1).hide();
        setInterval(function () {
            $els.eq(i).fadeOut(function () {
                i = (i + 1) % len;
                $els.eq(i).fadeIn();
            })
        }, 5000)
    });

    var $t_heavenbox = $("#heavenbox");

    $("#outer").hover(function () {
        $t_heavenbox.css("visibility", "visible");
    }, function () {
        $t_heavenbox.css("visibility", "");
    });

</script>
</body>
</html>
