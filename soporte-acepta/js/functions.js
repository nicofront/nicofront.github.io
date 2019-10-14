$(document).ready(function() {

	wow = new WOW({mobile: false});
	wow.init();

	let htmlText = ""; let i = 0;
	let urls = [['index.html', 'Home', 'Te damos la bienvenida a Mesa de Ayuda Acepta', 0]];
	urls.push(['buscar-certificado.html', 'Buscador de Certificado Digital', 'Lorem ipsum dolor sit amet', 0]);
	urls.push(['casilla-digital.html', 'Casilla Digital', 'Lorem ipsum dolor sit amet', 0]);
	urls.push(['certificado-digital.html', 'Certificado Digital', 'Lorem ipsum dolor sit amet', 0]);
	urls.push(['factura-electronica.html', 'Factura Electrónica', 'Lorem ipsum dolor sit amet', 0]);
	urls.push(['faq.html', 'Preguntas Frecuentes', 'Lorem ipsum dolor sit amet', 0]);
	urls.push(['firma-avanzada.html', 'Firma Electrónica Avanzada', 'Lorem ipsum dolor sit amet', 0]);
	urls.push(['generar-caf.html', 'Generador de CAF', 'Lorem ipsum dolor sit amet', 0]);
	urls.push(['gestor-documental.html', 'Gestor Documental DEC5', 'Lorem ipsum dolor sit amet', 0]);
	urls.push(['verificacion-identidad.html', 'Servicio de Verificación de Identidad', 'Lorem ipsum dolor sit amet', 0]);

	$('#sandwich').click(function(){
		$('#head-secondary').stop().fadeToggle();
		return false;
	});

	//.toggle
	$('.faq-trigger').click(function(){
		var self = $(this);
		self.next().stop().slideToggle();
		return false;
	});

	$('.accordion-trigger').click(function(){
		var self = $(this);
		self.stop().toggleClass('active');
		self.next().stop().slideToggle();
		return false;
	});

	function getUrlVars() {
	    var vars = {};
	    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
	        vars[key] = value;
	    });
	    return vars;
	};

	if($('#results').length > 0){
		console.log('init');
		var searchQuery = getUrlVars()["query"];
		if(!searchQuery || searchQuery.length < 3) return;
		document.getElementById("searchquery").innerHTML = 'Resultados de la búsqueda “' + searchQuery + '”';

		const parseHTMLString = (() => {
		  const parser = new DOMParser();
		  return str => parser.parseFromString(str, "text/html");
		})();

		const getSearchStringForDoc = doc => {
		  return [
		    doc.title,
		    doc.body.innerText
		  ].map(str => str.trim())
		   .join(" ");
		};

		const stringMatchesQuery = (str, query) => {
		  str = str.toLowerCase();
		  query = query.toLowerCase();
		  return query
		    .split(/\W+/)
		    .some(q => str.includes(q))
		};

		const htmlStringMatchesQuery = (str, query) => {
		  const htmlDoc = parseHTMLString(str);
		  const htmlSearchString = getSearchStringForDoc(htmlDoc);
		  return stringMatchesQuery(htmlSearchString, query);
		};

		function addSearchItem(array){
			for(i = 0; i < array.length; ++i){
				if(array[i][3] == 1){
					let ritem = document.createElement("div");
					let titletag = document.createElement("h3");
					let titleinner = document.createTextNode(array[i][1]);
					let contenttag = document.createElement("p");
					let contentinner = document.createTextNode(array[i][2]);
					let buttontag = document.createElement("a");
					let buttoninner = document.createTextNode("Ver más");
					ritem.setAttribute('class', 'results-item');
					buttontag.setAttribute('class', 'button transition');
					buttontag.setAttribute('href', array[i][0]);
					titletag.appendChild(titleinner);
					contenttag.appendChild(contentinner);
					buttontag.appendChild(buttoninner);
					ritem.appendChild(titletag);
					ritem.appendChild(contenttag);
					ritem.appendChild(buttontag);
					let box = document.getElementById("results-box");
					box.appendChild(ritem);
				}
			}
		};

		let p1 = fetch('index.html').then(function (response) {
			console.log('Fetch exitoso');
			return response.text();
		}).then(function (html) {
			let parser = new DOMParser();
			let doc = parser.parseFromString(html, 'text/html');
			htmlText = doc.documentElement.innerHTML;
			console.log("Match " + searchQuery + ":", htmlStringMatchesQuery(htmlText, searchQuery));
			if(htmlStringMatchesQuery(htmlText, searchQuery)) urls[0][3]++;
		}).catch(function (err) {
			console.warn('Algo salio mal.', err);
		});	

		let p2 = fetch('buscar-certificado.html').then(function (response) {
			return response.text();
		}).then(function (html) {
			let parser = new DOMParser();
			let doc = parser.parseFromString(html, 'text/html');
			htmlText = doc.documentElement.innerHTML;
			if(htmlStringMatchesQuery(htmlText, searchQuery)) urls[1][3]++;
		}).catch(function (err) {
			console.warn('Algo salio mal.', err);
		});	

		let p3 = fetch('casilla-digital.html').then(function (response) {
			return response.text();
		}).then(function (html) {
			let parser = new DOMParser();
			let doc = parser.parseFromString(html, 'text/html');
			htmlText = doc.documentElement.innerHTML;
			if(htmlStringMatchesQuery(htmlText, searchQuery)) urls[2][3]++;
		}).catch(function (err) {
			console.warn('Algo salio mal.', err);
		});	

		let p4 = fetch('certificado-digital.html').then(function (response) {
			return response.text();
		}).then(function (html) {
			let parser = new DOMParser();
			let doc = parser.parseFromString(html, 'text/html');
			htmlText = doc.documentElement.innerHTML;
			if(htmlStringMatchesQuery(htmlText, searchQuery)) urls[3][3]++;
		}).catch(function (err) {
			console.warn('Algo salio mal.', err);
		});

		let p5 = fetch('factura-electronica.html').then(function (response) {
			return response.text();
		}).then(function (html) {
			let parser = new DOMParser();
			let doc = parser.parseFromString(html, 'text/html');
			htmlText = doc.documentElement.innerHTML;
			if(htmlStringMatchesQuery(htmlText, searchQuery)) urls[4][3]++;
		}).catch(function (err) {
			console.warn('Algo salio mal.', err);
		});	

		let p6 = fetch('faq.html').then(function (response) {
			return response.text();
		}).then(function (html) {
			let parser = new DOMParser();
			let doc = parser.parseFromString(html, 'text/html');
			htmlText = doc.documentElement.innerHTML;
			if(htmlStringMatchesQuery(htmlText, searchQuery)) urls[5][3]++;
		}).catch(function (err) {
			console.warn('Algo salio mal.', err);
		});	

		let p7 = fetch('firma-avanzada.html').then(function (response) {
			return response.text();
		}).then(function (html) {
			let parser = new DOMParser();
			let doc = parser.parseFromString(html, 'text/html');
			htmlText = doc.documentElement.innerHTML;
			if(htmlStringMatchesQuery(htmlText, searchQuery)) urls[6][3]++;
		}).catch(function (err) {
			console.warn('Algo salio mal.', err);
		});	

		let p8 = fetch('generar-caf.html').then(function (response) {
			return response.text();
		}).then(function (html) {
			let parser = new DOMParser();
			let doc = parser.parseFromString(html, 'text/html');
			htmlText = doc.documentElement.innerHTML;
			if(htmlStringMatchesQuery(htmlText, searchQuery)) urls[7][3]++;
		}).catch(function (err) {
			console.warn('Algo salio mal.', err);
		});

		let p9 = fetch('gestor-documental.html').then(function (response) {
			return response.text();
		}).then(function (html) {
			let parser = new DOMParser();
			let doc = parser.parseFromString(html, 'text/html');
			htmlText = doc.documentElement.innerHTML;
			if(htmlStringMatchesQuery(htmlText, searchQuery)) urls[8][3]++;
		}).catch(function (err) {
			console.warn('Algo salio mal.', err);
		});

		let p10 = fetch('verificacion-identidad.html').then(function (response) {
			return response.text();
		}).then(function (html) {
			let parser = new DOMParser();
			let doc = parser.parseFromString(html, 'text/html');
			htmlText = doc.documentElement.innerHTML;
			if(htmlStringMatchesQuery(htmlText, searchQuery)) urls[9][3]++;
		}).catch(function (err) {
			console.warn('Algo salio mal.', err);
		});

		Promise.all([p1, p2, p3, p4, p5, p6, p7, p8, p9, p10]).then(values => { 
			addSearchItem(urls);
		});

	}// #results
});