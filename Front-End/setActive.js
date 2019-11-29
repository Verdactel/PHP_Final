var url = window.location.href;
var news = document.getElementById("news");
var weather = document.getElementById("weather");
var login = document.getElementById("login");

var regex = new RegExp('[\/][A-Za-z]+[.][A-Za-z]+$', 'g');
var page = url.match(regex);
page = page[0].replace("/","");

if(page === "index.php"){
    news.classList.add("active");
}
else if(page === "weather.php"){
    weather.classList.add("active");
}
else if(page === "login.php"){
    login.classList.add("active");
}