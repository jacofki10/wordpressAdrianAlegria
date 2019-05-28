//pluging instagram
var token = '1561946125.8a60331.c43b4d0d117943388eddf3391256a463',
	num_photos = 9, // maximum 20
	container = document.getElementById('rudr_instafeed'), // it is our <ul id="rudr_instafeed">
	scrElement = document.createElement('script');

window.mishaProcessResult = function(data) {
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
	'https://api.instagram.com/v1/users/self/media/recent?access_token=' +
		token +
		'&count=' +
		num_photos +
		'&callback=mishaProcessResult'
);
document.body.appendChild(scrElement);

//get info from beatport
var string;
string = 'https://www.beatport.com/artist/adrian-alegria/232753';
$.getJSON(string, function(data) {
	$.each(data, function(i) {
		$(
			'<li class="col-md-6 col-lg-4 view view-first"><img class="img-fluid" src="images/everydayep.jpg" alt=""><div class="mask"><h2>EVERY DAY EP</h2><h5 class="align-items-center">Adrian Alegria</h5><button onclick="window.location.href="https://www.beatport.com/release/every-day-ep/2214584" type="button"  class="btn btn-outline-light btn-lg rounded-0">Play</button></div></li>'
		).appentTo($('#grid'));
	});
});
