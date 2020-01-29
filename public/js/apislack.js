$("#submit").click(function(){

    console.log("ok")

    let nom = document.getElementById("nom").value;
    let prenom = document.getElementById("prenom").value;
    let tel = document.getElementById("phone").value;
    let adresse  = document.getElementById("street").value;
    let mail = document.getElementById("mail").value;

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
