var action = function(currency) {
	if(currency == 'e') {

	fetch('https://api.coindesk.com/v1/bpi/currentprice.json')
.then(res => res.json())
.then(res => document.getElementById("value").innerHTML = res.bpi.EUR.rate + " €");
}

else if(currency == 'd') {

	fetch('https://api.coindesk.com/v1/bpi/currentprice.json')
.then(res => res.json())
.then(res => document.getElementById("value").innerHTML = res.bpi.USD.rate + " $");
}

else {

	fetch('https://api.coindesk.com/v1/bpi/currentprice.json')
.then(res => res.json())
.then(res => document.getElementById("value").innerHTML = res.bpi.GBP.rate + " £");
}
}

