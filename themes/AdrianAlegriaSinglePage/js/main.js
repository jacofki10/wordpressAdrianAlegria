//pluging instagram
var token = '2104073551.1677ed0.baa1b703d5fc4389aad405ff02039ffc',
	client_id = '25864e713d914f66b5375607797b8bba',
	hashtag = 'adrianalegriadj', // hashtag without # symbol
	num_photos = 13, // maximum 20
	container = document.getElementById('rudr_instafeed'), // it is our <ul id="rudr_instafeed">
	scrElement = document.createElement('script');

window.mishaProcessResult = function (data) {
	for (x in data.data) {
		if (data.data[x].tags.indexOf('adrianalegriadj') >= 0) {
			container.innerHTML +=
				'<div class="col-md-6 col-lg-4"><a class="mb-4 mb-lg-5 d-block mx-auto position-relative" href="' +
				data.data[x].link +
				'" target="_blank"><img class="img-fluid" src="' +
				data.data[x].images.standard_resolution.url +
				'"></a></div>';
		}
	}
};

scrElement.setAttribute(
	'src',
	'https://api.instagram.com/v1/users/self/media/recent?access_token=' +
	token +
	'&count=' +
	num_photos +
	'&callback=mishaProcessResult'
);
document.body.appendChild(scrElement);
