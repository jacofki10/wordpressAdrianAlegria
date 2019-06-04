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

//pluging sounbdcloud

SC.initialize({
  client_id: "u8j5bvKLMEY0eVwyQGQMQWC0ArjMYDOz"
});
SC.get('/resolve', {
  url: 'https://soundcloud.com/adrian-alegria'
}, function (user) {
  console.log(user.id);
});
// find all sounds of buskers licensed under 'creative commons share alike'


// // //pluging spotify

var spotifyApi = new SpotifyWebApi();
spotifyApi.setAccessToken('BQC2LsYMyEABEUGRNjKpYmJEfRiNZm0ty60orPQ_WpSlTe8uXQ443DfAz4y-MDA4Bpb1vtvMlI0UurB4Q2AGtnl8bkiQ9M6Z_n8e4DEMijQXvADzKL7h4VTowp1UvW1EBuaxIfl2HS5lSAUKS_PCxa0YE0FbYw_BgceMKuds5XUaE2Z7SlamBjZ9yWqY0FY6TXO0zSEhmkyCRM5NZsDEGjIXXybV_5QmIar-OK9Bys2bGCDQyXCtuU4pozrtlyTfG8cUj-_3DL_lDmY');

// get albums by a certain artist
spotifyContainer = document.getElementById('grid'),
  spotifyApi.getArtistAlbums('1167317448')
    .then(function (data) {
      for (i = 0; i < 6; i++) {
        spotifyContainer.innerHTML +=
          '<li class="col-md-6 col-lg-4 view view-first"><img class="img-fluid" src="' +
          data.items[i].images[0].url +
          '" alt=""><div class="mask"><h2>' +
          data.items[i].name + '</h2><h5 class="align-items-center">' + data.items[i].artists[0].name + '</h5><button onclick="window.location.href=\'' +
          data.items[i].external_urls.spotify + '\'" type="button"  class="btn btn-outline-light btn-lg rounded-0">Play</button></div></li>';
      }
    });
