// // //Letters Shuffle
var shuffleText = jQuery('.logo');
// Shuffle the contents of container
setTimeout(function () {
  // Shuffle the container with custom text
  shuffleText.shuffleLetters();
}, 2000);
// // //MobilePhone Menu hamburger
var hamburger = document.querySelector(".hamburger");
var hamburgerMenu = document.querySelector(".navbar-nav");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("is-active");
});
hamburgerMenu.onclick = function () {
  hamburger.classList.toggle("is-active");
}

// // //pluging spotify
var spotifyApi = new SpotifyWebApi();
// get albums by a certain artist
spotifyContainer = document.getElementById('grid'),
  spotifyApi.getArtistAlbums('24w4dGFG8bDi3wG1qbnDM7')
    .then(function (data) {
      for (i = 0; i < 6; i++) {
        spotifyContainer.innerHTML +=
          '<li class="col-md-6 col-lg-4 view view-first"><img class="img-fluid" src="' +
          data.items[i].images[0].url + '" alt="' + data.items[i].name + '"><div class="mask"><h2>' +
          data.items[i].name + '</h2><h5 class="align-items-center">' + data.items[i].artists[0].name + '</h5><button onclick="window.location.href=\'' +
          data.items[i].external_urls.spotify + '\'" type="button"  class="btn btn-outline-light btn-lg rounded-0">Play</button></div></li>';
      }
    });

//pluging instagram
var token = '2104073551.1677ed0.baa1b703d5fc4389aad405ff02039ffc',
  client_id = '25864e713d914f66b5375607797b8bba',
  hashtag = 'adrianalegriadj', // hashtag without # symbol
  num_photos = 13, // maximum 20
  container = document.getElementById('instafeed'), // it is our <ul id="rudr_instafeed">
  scrElement = document.createElement('script');

window.mishaProcessResult = function (data) {
  for (x in data.data) {
    if (data.data[x].tags.indexOf('adrianalegriadj') >= 0) {
      container.innerHTML +=
        '<div class="col-md-6 col-lg-4"><a class="mb-4 mb-lg-5 d-block mx-auto position-relative" href="' +
        data.data[x].link +
        '" target="_blank"><img class="img-fluid" src="' +
        data.data[x].images.standard_resolution.url +
        '" alt="' + data.data[x].name + '" ></a></div>';
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

