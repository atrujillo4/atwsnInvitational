

// (Basic functionality) Check if team and player already exists
function signUp() {
    var database = firebase.database()
    var ref = database.ref('Teams');
    var teamMember1 = document.getElementById("teamMember1").value;
    if (teamMember1.length < 1){
        window.alert("First team member is blank");
        return false;
    }
    var teamMember2 = document.getElementById("teamMember2").value;
    if (teamMember2.length < 1){
        window.alert("Second team member is blank");
        return false;
    }
    var teamName = document.getElementById("teamName").value;
    if (teamName.length < 1){
        window.alert("Team name is blank");
        return false;
    }
    var verified = "no";
    var signUpdata = {
        teamMember1: teamMember1,
        teamMember2: teamMember2,
        teamName: teamName,
        verified: verified
    }
    ref.push(signUpdata);
    window.location.href='https://atwsninvitational.herokuapp.com/teams.php'
    
    
}


function discordLink(){
    var database = firebase.database()
    var ref = database.ref('discordLink');
    ref.on('value', gotLink, errData);
    //document.getElementById("discordLink").innerHTML = ref;
}

function gotLink(link){
    console.log(link.val());
}


// (basic functionality) More testing required
function submitHighlight(){
    console.log("test");
    var database = firebase.database()
    var ref = database.ref('Highlights');
    var highlightUrl = document.getElementById("highlight").value;
    highlightUrl = highlightUrl.split('=')[1];
    //alert(highlightUrl);
    if(highlightUrl.length < 1){
        window.alert("Highlight URL is blank");
        return false;
    }
    var submittedBy = document.getElementById("whoPosted").value;
    if(submittedBy.length < 1){
        window.alert("Submitted By is blank");
        return false;
    }
    var highlightData = {
        link: highlightUrl,
        whoPosted: submittedBy
    }
    ref.push(highlightData);
}

function getHighlights(){
    var database = firebase.database()
    var ref = database.ref('Highlights');
    ref.on('value', gotData, errData);
    console.log("getting highliughts");
}

function gotData(data){
    console.log(data.val());
    var highlights = data.val();
    var keys = Object.keys(highlights);
    console.log(keys);
    for(var i = 0; i < keys.length; i++){
        var k = keys[i];
        var link = highlights[k].link;
        var whoPosted = highlights[k].whoPosted;
        console.log(link, whoPosted);
    }
}
function errData(err)
{
    
}
// Database connection (more variables into environment)
function setup() {
    var config = {
    apiKey: "AIzaSyB1ier0r2yeE0CjRsPUCrKvJBF5pncOrTo",
    authDomain: "fortnitetournament-ba21c.firebaseapp.com",
    databaseURL: "https://fortnitetournament-ba21c.firebaseio.com",
    projectId: "fortnitetournament-ba21c",
    storageBucket: "fortnitetournament-ba21c.appspot.com",
    messagingSenderId: "941537702220"
    };
    firebase.initializeApp(config);
    console.log(firebase);
    var database = firebase.database();
    var ref = database.ref('Teams');
}
setup();
