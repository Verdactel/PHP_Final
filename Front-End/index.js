
var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}

// $url = "https://community-open-weather-map.p.rapidapi.com/weather?lat=40.7618515&lon=-111.8764043&q=Salt%20Lake%20City";
// fetch($url, {
// 	"method": "GET",
// 	"headers": {
// 		"x-rapidapi-host": "community-open-weather-map.p.rapidapi.com",
// 		"x-rapidapi-key": "c4d8267dd6msha8dc3c0bf957218p1041e9jsn727bd0002918"
// 	}
// })
// .then(response => response.json())
// .then(data => {
//     console.log(data);
// })
// .catch(err => {
//     console.log(err);
// })

// $url = "https://newsapi.org/v2/top-headlines?country=us&apiKey=c1bffb35cf8d439fa9cd84b0c4d535e6";
// fetch($url)
//     .then(response => response.json())
//     .then(data => {
//         console.log(data);
//     })
//     .catch(e => console.log(e));