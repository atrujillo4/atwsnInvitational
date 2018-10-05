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
var ref = database.ref('Highlights');
console.log(ref);
ref.on('value', gotData, errData)
ref.on("child_added", snap => {
    var postedBy = snap.child("whoPosted").val();
    var highlightLink = snap.child("link").val();
   
    var link = "https://www.youtube.com/embed/" + highlightLink;
    //alert(teamName);
    $("#table_body").append("<tr><td>" + postedBy + "</td><td>" + "<iframe width='420' height='315' src=" + link + " </iframe>" + "Test" + "</td></tr>");
});
function gotData(data){
    console.log(data.val());

}
function errData(data){
    
}

function submitHighlight(){
    var database = firebase.database()
    var ref = database.ref('Highlights');
    var link = document.getElementById("highlight").value;
    if (link.length < 1){
        window.alert("Highlight URL is blank");
        return false;
    }
    var whoPosted = document.getElementById("whoPosted").value;
    if (whoPosted.length < 1){
        window.alert("Submitted by is blank");
        return false;
    }
    if(link.includes('=')){
        link = link.split('=')[1];
    }
    else{
        link = link.split('e')[1];
        link = link.substring(1);
    }
    console.log(link);
    var signUpdata = {
        link: link,
        whoPosted: whoPosted
        
    }
    ref.push(signUpdata);
    window.location.reload();
}