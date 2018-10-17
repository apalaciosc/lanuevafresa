$(document).ready(function () {
  // Initialize jPlayerJukebox
  var jpjb = new jPlayerJukebox({
    'swfPath': 'jplayer',
    'jukeboxOptions': {
      'autoAdvance': false,
      'position': 'float-bl'
    }
  });

  $('#btn-api-select-1').on('click', function () { jpjb.select(1); });
  $('#btn-api-play').on('click', function () { jpjb.play(); });
  $('#btn-api-play-1').on('click', function () { jpjb.play(1); });
  $('#btn-api-pause').on('click', function () { jpjb.pause(); });
  $('#btn-api-next').on('click', function () { jpjb.next(); });
  $('#btn-api-previous').on('click', function () { jpjb.previous(); });
  $('#btn-api-shuffle').on('click', function () { jpjb.shuffle(); });
  $('#btn-api-add').on('click', function () {
    jpjb.add({
      'title': 'mp3 (New song)',
      'artist': 'Lucas Gonze',
      'mp3': 'media/mp3.mp3',
      'poster': 'media/cover2.jpg',
      'download': true,
      'buy': 'https://www.freesound.org/people/lucasgonze/sounds/58970/'
    });
  });
  $('#btn-api-remove').on('click', function () { jpjb.remove(); });
  $('#btn-api-remove-2').on('click', function () { jpjb.remove(2); });
  $('#btn-api-clear').on('click', function () { jpjb.clear(); });
  $('#btn-api-parse').on('click', function () { jpjb.parse(); });

  $('#btn-api-setViewState-minimized').on('click', function () { jpjb.setViewState('minimized', 400); });
  $('#btn-api-setViewState-maximized').on('click', function () { jpjb.setViewState('maximized', 400); });
  $('#btn-api-setViewState-hidden').on('click', function () { jpjb.setViewState('hidden', 400); });

  $('#btn-api-showPlaylist').on('click', function () { jpjb.showPlaylist(); });
  $('#btn-api-showPlaylist-false').on('click', function () { jpjb.showPlaylist(false); });
});