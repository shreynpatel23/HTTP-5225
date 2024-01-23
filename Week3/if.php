<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,100));

        if ($randomNumber <= 60) {
            echo "<h1> Oops I am sorry you are failed! </h1>";
        }
        else if ($randomNumber >= 61 && $randomNumber <= 70) {
            echo "<h1> your grade is E. You can do better! </h1>";
        }
        else if ($randomNumber >= 71 && $randomNumber <= 75) {
            echo "<h1> your grade is D. You are going on the right track! </h1>";
        }
        else if ($randomNumber >= 76 && $randomNumber <= 80) {
            echo "<h1> your grade is C. You just need some efforts! </h1>";
        }
        else if ($randomNumber >= 81 && $randomNumber <= 85) {
            echo "<h1> your grade is B. You are good! </h1>";
        }
        else if ($randomNumber >= 86 && $randomNumber <= 90) {
            echo "<h1> your grade is A. You are excellent! </h1>";
        }
        else if ($randomNumber >= 91 && $randomNumber <= 100) {
            echo "<h1> your grade is A+. Nice Work! </h1>";
        }

        $randomDay = ceil(rand(1,7));

        switch($randomDay) {
            case 1:
                echo '<h2> Monday </h2>';
                break;
            case 2:
                echo '<h2> Tuesday </h2>';
                break;
            case 3:
                echo '<h2> Wednesday </h2>';
                break;
            case 4:
                echo '<h2> Thursday </h2>';
                break;
            case 5:
                echo '<h2> Friday </h2>';
                break;
            case 6:
                echo '<h2> Saturday </h2>';
                break;
            case 7:
                echo '<h2> Sunday </h2>';
                break;
            default:
                echo '<h2> Enter a valid day </h2>';
        }

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';
        echo '<p>The random day is '.$randomDay.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        // if ($randomNumber == 1)
        // {

        //     $linkName = 'Codecademy';
        //     $linkURL = 'https://www.codecademy.com/';
        //     $linkImage = '';
        //     $linkDescription = 'Learn to code interactively, for free.';

        // }

        // // The random number is 2, so use W3Schools
        // elseif ($randomNumber == 2)
        // {

        //     $linkName = '';
        //     $linkURL = 'https://www.w3schools.com/';
        //     $linkImage = '../images/w3schools.png';
        //     $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        // }

        // // The random number is 3, so use MDN
        // else
        // {

        //     $linkName = 'Mozilla Developer Network';
        //     $linkURL = 'https://www.codecademy.com/';
        //     $linkImage = '../images/mozilla.png';
        //     $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        // }

        // // **************************************************

        // // Beginning of the exercise, place all of your PHP code here
        // // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        // if($linkName !== "") {
        //     echo '<div> <a href=' .$linkURL. ' target=\'_blank\'>' .$linkName. '</a></div>';
        // }
        // if($linkImage !== "") {
        //     echo '<img src=' .$linkImage . ' width=500 />';
        // }
        // echo '<p>' .$linkDescription. '</p>';

        ?>

    </body>
</html>