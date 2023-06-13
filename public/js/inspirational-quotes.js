function getQuote() {
    let http = new XMLHttpRequest()
    http.open('GET', 'https://type.fit/api/quotes')
    http.onload = function () {
        let quote = this.response;
        let show_quote = JSON.parse(quote)[getRandomInt(1, 200)]
        document.getElementById('quote').innerHTML = show_quote.text
    }
    http.send()
}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min);
}