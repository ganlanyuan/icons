function getParents(elem, selector) {
  var parents = [];
  if ( selector ) {
    var firstChar = selector.charAt(0);
  }

  // Get matches
  for ( ; elem && elem !== document; elem = elem.parentNode ) {
    if ( selector ) {

      // If selector is a class
      if ( firstChar === "." ) {
        if ( elem.classList.contains( selector.substr(1) ) ) {
          parents.push( elem );
        }
      }

      // If selector is an ID
      if ( firstChar === "#" ) {
        if ( elem.id === selector.substr(1) ) {
          parents.push( elem );
        }
      }

      // If selector is a data attribute
      if ( firstChar === "[" ) {
        if ( elem.hasAttribute( selector.substr(1, selector.length - 1) ) ) {
          parents.push( elem );
        }
      }

      // If selector is a tag
      if ( elem.tagName.toLowerCase() === selector ) {
        parents.push( elem );
      }

    } else {
      parents.push( elem );
    }

  }

  // Return parents if any exist
  if ( parents.length === 0 ) {
    return null;
  } else {
    return parents;
  }
}

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
    h2s = doc.querySelectorAll('h2');
    hiddenEls = doc.querySelectorAll('h2, li');

window.addEventListener('load', function () {
  for (var i = svgs.length; i--;) {
    var id = svgs[i].id;
    if (id !== null) {
      svgNames.push(id);
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
          item = getParents(svg, 'li')[0];

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
  
  for (var h = hiddenEls.length; h--;) {
    var h2 = hiddenEls[h];
    if (h2.classList.contains('hidden')) { h2.classList.remove('hidden'); }
  }
});
