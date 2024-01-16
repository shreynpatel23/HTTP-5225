<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<h1>Learning Php is fun!</h1>" ?>
    <?php echo "<h1>PHP and Creating Output</h1>" ?>
  
    <?php echo "<p>The PHP echo command can be used to create output.</p>" ?>

    <?php echo "<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>" ?>
    
    <?php echo "<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>" ?>
    
    <?php echo "<h2>More HTML to Convert</h2>" ?>

    <?php echo "<p>PHP says \"Hello World!\"</p>" ?>

    <?php echo "<p>Can you display a sentence with ' and \"?</p>" ?>

    <?php echo "<img src=\"php-logo.png\">" ?>

    <?php 
        $linkName = "Redirect To GitHub";
        $linkUrl = "https://github.com";
    ?>
    <div>
        <?php echo "<a href=". $linkUrl ." target=\"_blank\">". $linkName ."</a>" ?>
    </div>

    <?php
    
    $link['name'] = 'Codecademy';
    $link['url'] = 'https://www.codecademy.com/';
    $link['image'] = 'codecademy.png';
    $link['description'] = 'Learn to code interactively, for free.';
    
    echo '<h2>'.$link['name'].'</h2>';

    ?>

    <ul>
    <?php
        $languages = array("PHP", "Java", "Javascript", "ASP.NET");

        foreach ($languages as $language) {
            echo '<li>' . $language . "</li>";
        }
    ?>
    </ul>
</body>
</html>