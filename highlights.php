
<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                background-color: #E5E7E9;
            }
        </style>
        <meta charset="UTF-8">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="https://www.gstatic.com/firebasejs/5.5.1/firebase.js"></script>
        <script language="javascript" type="text/javascript" src="functions.js"></script>
    </head>
    <body>
        <!-- nav Bar --> 
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="teams.php">Teams</a></li>
        <li><a href="bracket.php">Bracket</a></li>
        <li><a href="winners.php">Previous Winners</a></li>
        <li><a href="rules.php">Rules</a></li>
        <li><a href="signup.php">Sign up</a></li>
        <li><a href="about.php">About</a></li>
        <li><a class="active" href="highlights.php">Highlights</a></li>
        </ul>
        <br></br>
        
        Highlight page is currently under construction. You can currently only submit a video from a computer. 
        <br>
        By next week you will be able to submit a highlight video from a mobile device.
        <br></br>
        
        Highlight URL: <input type="text" id="highlight" placeholder="Youtube link"> <br>
        Submitted By: <input type="text" id="whoPosted" placeholder="Epic Name"> <br>
        <button onclick="submitHighlight()">Submit</button>
        
        <!--<iframe width="420" height="315"-->
        <!--    src="https://www.youtube.com/embed/tgbNymZ7vqY">-->
        <!--</iframe>-->
        <!--<iframe width="420" height="315"-->
        <!--    src="https://www.youtube.com/embed/gxoaLgCETgE">-->
        <!--</iframe>-->
        <script>
            getHighlights();
        </script>
        
    </body>
    <div class="footer">
        <center>
        <footer>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!-- Add font awesome icons -->
            <a href="facebook.php" class="fa fa-facebook"></a>
            <a href="twitter.php" class="fa fa-twitter"></a>
            <br>
            <small>&copy; No Copyright 2018, Just for Fun</small>
            <br>
        </footer>
        </center>
    </div>
    
</html>