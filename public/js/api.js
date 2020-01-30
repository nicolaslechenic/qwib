
let street = document.getElementById("street");
let search = document.getElementById("search");

street.addEventListener("keyup", function () {
    let code = street.value;

    search.innerHTML = "";
    fetch("https://api-adresse.data.gouv.fr/search/?q=" + code)
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {
            console.log(json.features[0].properties.label);

            json.features.forEach(function (feature) {
                let label = document.createElement("li");
                label.innerText = feature.properties.label;
                search.appendChild(label)
            })
        })
})