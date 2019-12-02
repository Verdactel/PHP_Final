

var newsWidgets = document.getElementById('newsWidgets');

const bindNewsWidget = data => {
    for(var i = 0; i < 10; i++) {
        var title = data.articles[i].title;
        var source = data.articles[i].source.name;
        let newsWidget = `
            <tr>
                <td>${title}</td>
                <td>${source}</td>
            </tr>
        `;
        newsWidgets.innerHTML += newsWidget;
    }
}

// https://newsapi.org/docs/endpoints/sources

 var url = 'https://newsapi.org/v2/top-headlines?' +
            'category=health&' +
            'country=us&' +
            'apiKey=c1bffb35cf8d439fa9cd84b0c4d535e6';

fetch(url).then(response => {
    return response.json();
}).then(json_data => {
    console.log(json_data);
    bindNewsWidget(json_data);
}).catch(error => {
    console.log(error);
})

// $url = "https://newsapi.org/v2/top-headlines?country=us&apiKey=c1bffb35cf8d439fa9cd84b0c4d535e6";
// fetch($url)
//     .then(response => response.json())
//     .then(data => {
//         console.log(data);
//         formatData(data);
//     })
//     .catch(e => console.log(e));

// function formatData(data) {
//     var articles = data.articles;
//     //articles[0].author
//     //articles[0].content
//     //articles[0].description
//     //articles[0].publishedAt
//     //articles[0].source
//         //articles[0].source.id
//         //articles[0].source.name
//     //articles[0].title
//     //articles[0].url
//     //articles[0].urlToImage
// }