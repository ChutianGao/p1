
<!DOCTYPE html>
<html>
<head>

    <title>Chutian Gao</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" type='text/css'>

    <link rel="stylesheet" href="css/main.css" type='text/css'>
    <link rel="shortcut icon" href="http://findcharlie.me/favicon.ico">

</head>
<body>

    <div class="container">

        <h1>Chutian <span class="text-muted">Charlie</span> Gao</h1>

        <img src='images/selfie-1710-s.jpg' alt='Chutian (Charlie) Gao' title="Chutian (Charlie) Gao" class="img-responsive">

        <h2>About Me</h2>
        <p>
            My name is Chutian Gao. I am pursuing a Web Technology Certificate. E-15 is the 4th class that I took in Harvard Ext. School.

            <br><br>I am a Web Developer and working at Wellesley College. I've been developing PHP web applications for 2 years and haven't had a chance to use an industrial-grade framework. I'm looking forward to learning more advanced Web App development skills!

            <br><br>So excited!
        </p>

        <h2>Random Quote</h2>
        
        <?php
            // Define Quotes Array
            $quote_pool = array(
                array(
                    "quote" => "Don't cry because it's over, smile because it happened.",
                    "footer" => "Dr. Seuss"
                ),
                array(
                    "quote" => "So many books, so little time.",
                    "footer" => "Frank Zappa"
                ),
                array(
                    "quote" => "Be yourself; everyone else is already taken.",
                    "footer" => "Oscar Wilde"
                ),
                array(
                    "quote" => "You only live once, but if you do it right, once is enough.",
                    "footer" => "Mae West"
                ),
                array(
                    "quote" => "Be the change that you wish to see in the world.",
                    "footer" => "Mahatma Gandhi"
                )
            );
            // Generate Random Quote
            $selected_number = mt_rand(0, sizeof($quote_pool) - 1 );
            $selected_quote = $quote_pool[$selected_number]['quote'];
            $selected_footer = $quote_pool[$selected_number]['footer'];
        ?>
        <blockquote>
            <?php 
                // Print Quote Body
                echo $selected_quote;
            ?>
            <footer>
                <?php 
                    // Print Quote Footer
                    echo $selected_footer;
                ?>
            </footer>
        </blockquote>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
