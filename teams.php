

<html>
    
    <head>
        <style>
            body {
                background-color: #E5E7E9;
            }
        </style>
        <style>
            table {
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
        }
        </style>
        <meta charset="UTF-8">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="https://www.gstatic.com/firebasejs/5.5.1/firebase.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="teams.js"></script>
        <!--<script language="javascript" type="text/javascript" src="functions.js"></script>-->
    </head>
    <body>
        <!-- nav Bar --> 
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="teams.php">Teams</a></li>
        <li><a href="bracket.php">Bracket</a></li>
        <li><a href="winners.php">Previous Winners</a></li>
        <li><a href="rules.php">Rules</a></li>
        <li><a href="signup.php">Sign up</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="highlights.php">Highlights</a></li>
        </ul>
        
        <br></br>
        
        <!--<div class="main-list" id="list_div">-->
        <!--    <div class="list-item">-->
        <!--        <h3>Team Name</h3>-->
        <!--        <p>Team Members: name</p>-->
        <!--    </div>-->
        <!--</div>-->
        
        Teams with a check mark under the Verified column with be entered into a giveaway that will be done after the tournament. 
        <br>
        Donators will be Verified. 
        <br>
        Since there are only 16 spots, Donators will be reserved a spot.
        <br>
        If there are spots left over, it will be first come first serve.
        
        
        <div class="mainDiv" align="left">
            <h1>All Teams</h1>
            <table>
                <thead>
                    <tr>
                        <td><strong>Team Name</strong></td>
                        <td><strong>First Team Member</strong></td>
                        <td><strong>Second Team Member</strong></td>
                        <td>Verified</td>
                    </tr>
                </thead>
                <tbody id="table_body">
                    
                </tbody>
            </table>
        </div>
        
        <!--Team Name: <input type="text" id="teamName" placeholder="Team Name"> <br>-->
        <!--First Team Member: <input type="text" id="teamMember1" placeholder="PSN Name"> <br>-->
        <!--Second Team Member: <input type="text" id="teamMember2" placeholder="PSN Name"> <br>-->
        <!--<button onclick="signUp()">Sign Up</button>-->
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