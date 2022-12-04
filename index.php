<title>How's Tennessee?</title>
<link rel="stylesheet" href="unclejim.css">
<body>
    <audio autoplay loop id="tune">
    <source src= "music.mp3" type="audio/mpeg">
Your browser does not support audio, it seems. C'est dommage! Lo Siento! That's too bad!
</audio>
<h1>Tennessee is <?php echo getStatus(); ?></h1>
<?php
      // Define the getStatus() function
      function getStatus() {
        // Open the update.txt file for reading
        $file = fopen('update.txt', 'r');

        // Read the status from the file
        $status = fread($file, filesize('update.txt'));

        // Close the file
        fclose($file);

        // Return the status
        return $status;
      }
    ?>    
<center><img class="tn" src="tennessee.png"></center>
<h2>Made with lots of effort by <a href="https://twitter.com/joey5802">TechWalker</a></h2>
<h2>Made with little effort by <a href="https://twitter.com/joey5802">TechWalker</a> and lots of effort by [REDACTED]</h2>
<h2>All updates automatically posted to <a href="https://twitter.com/TNstats">Twitter</a></h2>
<a href="admin">Change how Tennesse is doing</a>