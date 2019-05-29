//pluging instagram
var token = '2104073551.1677ed0.baa1b703d5fc4389aad405ff02039ffc',
	client_id = '25864e713d914f66b5375607797b8bba',
	hashtag = 'adrianalegriadj', // hashtag without # symbol
	num_photos = 9, // maximum 20
	container = document.getElementById('rudr_instafeed'), // it is our <ul id="rudr_instafeed">
	scrElement = document.createElement('script');

window.mishaProcessResult = function (data) {
	for (x in data.data) {
		container.innerHTML +=
			'<a class="mb-4 mb-lg-5 d-block mx-auto position-relative" href="' +
			data.data[x].link +
			'" target="_blank"><div class="col-md-6 col-lg-4"><img class="img-fluid" src="' +
			data.data[x].images.standard_resolution.url +
			'"></a></div>';
	}
};

scrElement.setAttribute(
	'src',
	//	'https://api.instagram.com/v1/users/self/media/recent?access_token=' +
	// token +
	'https://api.instagram.com/v1/tags/adrianalegriadj/media/recent?access_token=' +
	token +
	'&count=' +
	num_photos +
	'&callback=mishaProcessResult'
);
document.body.appendChild(scrElement);

//instagram with tags
var token = '2104073551.1677ed0.baa1b703d5fc4389aad405ff02039ffc',
	hashtag = 'adrianalegriadj', // hashtag without # symbol
	num_photos = 9;

$.ajax({
	url: 'https://api.instagram.com/v1/tags/' + hashtag + '/media/recent',
	dataType: 'jsonp',
	type: 'GET',
	data: { access_token: token, count: num_photos },
	success: function (data) {
		console.log(data);
		for (x in data.data) {
			$('ul').append('<li><img src="' + data.data[x].images.standard_resolution.url + '"></li>');
		}
	},
	error: function (data) {
		console.log(data);
	}
});



//get info from beatport
var string;
string = 'https://www.beatport.com/artist/adrian-alegria/232753';
$.getJSON(string, function (data) {
	$.each(data, function (i) {
		$(
			'<li class="col-md-6 col-lg-4 view view-first"><img class="img-fluid" src="images/everydayep.jpg" alt=""><div class="mask"><h2>EVERY DAY EP</h2><h5 class="align-items-center">Adrian Alegria</h5><button onclick="window.location.href="https://www.beatport.com/release/every-day-ep/2214584" type="button"  class="btn btn-outline-light btn-lg rounded-0">Play</button></div></li>'
		).appentTo($('#grid'));
	});
});
