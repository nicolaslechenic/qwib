$("#submit").click(function(){

    console.log("ok")

    let nom = document.getElementById("info").value;
    let prenom = document.getElementById("info2").value;
    let tel = document.getElementById("info3").value;
    let adresse  = document.getElementById("info4").value;
    let mail = document.getElementById("info5").value;

$.ajax({
    url:'https://slack.com/api/chat.postMessage',
    type: "POST",
    data: {
        "channel": "bot",
        "text":nom +" : "+ prenom +" : "+ tel +" : "+ adresse +" : "+ mail,
        "token": creds.token,
    },
    dataType: "text"
}).done(function (response) {
console.log(response)
}).fail(function (error) {
console.log(error)
})
})
