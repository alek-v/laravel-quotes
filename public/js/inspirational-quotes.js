function getQuote() {
    let http = new XMLHttpRequest()
    http.open('GET', 'https://type.fit/api/quotes')
    http.onload = function () {
        let quote = this.response;
        let show_quote = JSON.parse(quote)[getRandomInt(1, 1643)]
        document.getElementById('quote').innerHTML = show_quote.text
    }
    http.send()
}

function getVavokQuote() {
    let http = new XMLHttpRequest()
    http.open('GET', '/quotes/vavok-quotes/get')
    http.onload = function () {
        let quote = this.response;
        let show_quote = JSON.parse(quote)
        let display_data = show_quote.body;

        if (show_quote.author != null) {
            display_data = display_data + '<hr />' + show_quote.author;
        }

        document.getElementById('quote').innerHTML = display_data;
    }
    http.send()
}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min);
}