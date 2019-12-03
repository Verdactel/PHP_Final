var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

//edit to show current location
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
//     displayData(data);
// })
// .catch(err => {
//     console.log(err);
// });

// var data = "";
// displayData(data);

function displayData(data)
{
    var weather_card_container = document.createElement("div");
    weather_card_container.setAttribute("class", "weather_card_container");

    
    //formulas
    var temp = Math.round((data.main.temp - 273.15) * 9/5 + 32); //fahrenheit
    var low_temp = Math.round((data.main.temp_min - 273.15) * 9/5 + 32);
    var high_temp = Math.round((data.main.temp_max - 273.15) * 9/5 + 32);

    var ktoc_formula = Math.round(temp - 273.15); //Celsius

    var humidity = data.main.humidity;
    var pressure = data.main.pressure;
    var weather = data.weather[0].main;
    var latitude = data.coord.lat;
    var longitude = data.coord.lon;
    var wind_speed = data.wind.speed;
    //create cards
    var weather_card = document.createElement("div");
    weather_card.setAttribute("class", "weather_card");

    var city_name = document.createElement("h1");
    city_name.innerHTML = data.name;
    weather_card.appendChild(city_name);

    var temp_container = document.createElement("div");
    temp_container.innerHTML = temp + "\xB0";
    weather_card.appendChild(temp_container);

    var weather_container = document.createElement("div");
    weather_container.innerHTML = weather;
    weather_card.appendChild(weather_container);

    weather_card_container.appendChild(weather_card);

    content.appendChild(weather_card_container);
}