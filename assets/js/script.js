var clipboard = new Clipboard('.copy-button');
clipboard.on('success', function(e) {
    e.trigger.classList.add('copied');
    setTimeout(function () {
      e.trigger.classList.remove('copied');
    }, 1000);

    e.clearSelection();
});

clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
});

var svgNames = [],
    doc = document,
    svgs = doc.querySelectorAll('.item svg'),
    searchBar = doc.getElementById('search'),
    h2s = doc.querySelectorAll('h2, br');

window.addEventListener('load', function () {
  for (var i = svgs.length; i--;) {
    var title = svgs[i].getAttribute('title');
    if (title !== null) {
      svgNames.push(title);
    }
  }
});

function onKeydown(e) {
  e = e || window.event;
  var code = e.keyCode;

  if (code === 191 && searchBar !== doc.activeElement) {
    searchBar.focus();
  } else if (code === 13) {
    e.preventDefault();
  }
}

function onKeyup(e) {
  e = e || window.event;
  var code = e.keyCode,
      keywords = searchBar.value;

  if (code !== 191) {
    for (var h = h2s.length; h--;) {
      var h2 = h2s[h];
      if (keywords.length > 0 && keywords !== ' ') {
        if (!h2.classList.contains('hidden')) { h2.classList.add('hidden'); }
      } else {
        if (h2.classList.contains('hidden')) { h2.classList.remove('hidden'); }
      }
    }

    for (var i = svgNames.length; i--;) {
      var id = svgNames[i],
          svg = doc.querySelector('.item #' + id),
          item = svg.parentNode.parentNode;

      if (keywords.length > 0 && keywords !== ' ') {
        if (id.indexOf(keywords) === -1) {
          if (!item.classList.contains('hidden')) {
            item.classList.add('hidden');
          }
        } else {
          if (item.classList.contains('hidden')) {
            item.classList.remove('hidden');
          }
        }
      } else {
        if (item.classList.contains('hidden')) {
          item.classList.remove('hidden');
        }
      }
    }
  } else {
    searchBar.value = searchBar.value.replace('/', '');
  }
}

doc.addEventListener('keydown', onKeydown, false);
doc.addEventListener('keyup', onKeyup, false);

var searchClear = doc.querySelector('.search-clear');
searchClear.addEventListener('click', function () {
  if (searchBar.value !== '') { searchBar.value = ''; }
  
  for (var h = h2s.length; h--;) {
    var h2 = h2s[h];
    if (h2.classList.contains('hidden')) { h2.classList.remove('hidden'); }
  }

  for (var i = svgNames.length; i--;) {
    var id = svgNames[i],
        svg = doc.querySelector('.item #' + id),
        parent = svg.parentNode;

    if (parent.classList.contains('hidden')) { parent.classList.remove('hidden'); }
  }
});
