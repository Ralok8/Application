 var start_width_perimeter = document.getElementById('perimeter').offsetWidth;
    var start_width_field = document.getElementById('active_field').offsetWidth;

    window.addEventListener('resize', field_resize);
    document.addEventListener('DOMContentLoaded', loadPage);

    function loadPage() {
        var countPositionsRows = 25;
        var countPostitionsInRow = 25;
        var countAllPositions = 1;

        for (var rowNumber = 1; rowNumber <= countPositionsRows; rowNumber++) {
            var rowId = appendRow(rowNumber);

            for (var countPositions = 1; countPositions <= countPostitionsInRow; countPositions++) {
                appendPosition(countAllPositions, rowId);
                countAllPositions++;
            }
        }
    

        field_resize(true);

        for ( var i = 1; i <= 6; i++ ) {
          var player = document.createElement('div');
          player.className = 'player';
          document.getElementById('position_' + i).appendChild(player);
        }
        
        resizePlayers();
    };

    function field_resize(load = false) {
        var activeField = document.getElementById('active_field');
        var perimeterWidth = document.getElementById('perimeter').offsetWidth;
        var goalHeight = document.getElementsByClassName('goal_A')[0].offsetHeight;

        if ((start_width_perimeter != perimeterWidth) || load) {
            activeField.style.width = perimeterWidth + 'px';
            activeField.style.height = parseFloat(perimeterWidth * 1.33) + 'px';
        }
    }

    function appendRow(number) {
        var sectorContainer = document.getElementById('positions_sector');
        var row = document.createElement('div');

        row.id = 'row_' + number;
        row.className = 'position_row';

        sectorContainer.appendChild(row);

        return row.id;
    }

    function appendPosition(number, idRow) {
        var row = document.getElementById(idRow);
        var position = document.createElement('div');
        

        position.id = 'position_' + number;
        position.className = 'position_block';
        //position.innerHTML = '<span>'+ number + '</span>';

        row.appendChild(position);
    }
    
    
var DragManager = new function() {
  var dragObject = {};
  var self = this;

  function onMouseDown(e) {

    if (e.which != 1) return;

    var elem = e.target.closest('.player');
    if (!elem) return;

    dragObject.elem = elem;
    dragObject.downX = e.pageX;
    dragObject.downY = e.pageY;
    dragObject.startWidth = elem.offsetWidth;
    dragObject.startHeight = elem.offsetHeight;

    return false;
  }

  function onMouseMove(e) {
    if (!dragObject.elem) return;

    if (!dragObject.avatar) {
      var moveX = e.pageX - dragObject.downX;
      var moveY = e.pageY - dragObject.downY;
      
      if (Math.abs(moveX) < 5 && Math.abs(moveY) < 5) {
        return;
      }

      dragObject.avatar = createAvatar(e);
      if (!dragObject.avatar) {
        dragObject = {};
        return;
      }

      var coords = getCoords(dragObject.avatar);
      dragObject.shiftX = dragObject.downX - coords.left;
      dragObject.shiftY = dragObject.downY - coords.top;

      startDrag(e);
    }
    
    dragObject.avatar.style.left = e.pageX - dragObject.shiftX + 'px';
    dragObject.avatar.style.top = e.pageY - dragObject.shiftY + 'px';

    return false;
  }

  function onMouseUp(e) {
    if (dragObject.avatar) {
      finishDrag(e);
    }

    dragObject = {};
  }

  function finishDrag(e) {
    var dropElem = findDroppable(e);

    if (!dropElem) {
      self.onDragCancel(dragObject);
    } else {
      self.onDragEnd(dragObject, dropElem);
    }
  }

  function createAvatar(e) {
    var avatar = dragObject.elem;
    
    //save old properties
    var old = {
        parent: avatar.parentNode,
        nextSibling: avatar.nextSibling,
        position: avatar.position || '',
        left: avatar.left || '',
        top: avatar.top || '',
        zIndex: avatar.zIndex || '',
        width: avatar.offsetWidth + 'px',
        height: this.width,
        className: 'player'
    };
    
   // console.log(old);

    //cancel drag
    avatar.rollback = function() {
        old.parent.insertBefore(avatar, old.nextSibling);
        avatar.style.position = old.position;
        avatar.style.left = old.left;
        avatar.style.top = old.top;
        avatar.style.zIndex = old.zIndex;
        avatar.style.width = old.width;
        avatar.style.height = avatar.style.width;
        avatar.style.opacity = old.opacity
        avatar.className = old.className
    };
    
    //finish drag
    avatar.resetStyles = function() {
        avatar.style.position = old.position;
        avatar.style.left = 0;
        avatar.style.top = 0;
        avatar.style.zIndex = old.zIndex;
        avatar.style.width = old.width;
        avatar.style.height = old.width;
        avatar.style.opacity = old.opacity
        avatar.className = old.className
    };

    return avatar;
  }

  function startDrag(e) {
    var avatar = dragObject.avatar;

    document.body.appendChild(avatar);
    avatar.style.zIndex = 9999;
    avatar.style.position = 'absolute';
    avatar.style.width = dragObject.startWidth + 'px';
    avatar.style.height = avatar.style.width;
    avatar.className = avatar.className + ' moved_player';
  }

  function findDroppable(event) {
    dragObject.avatar.hidden = true;
    
    var elem = document.elementFromPoint(event.clientX, event.clientY);
    console.log(elem);

    dragObject.avatar.hidden = false;
    

    if (elem == null || elem.className !== 'position_block') {
      return null;
    }

    console.log(elem);
    return elem.closest('.position_block');
  }

  document.onmousemove = onMouseMove;
  document.onmouseup = onMouseUp;
  document.onmousedown = onMouseDown;

  this.onDragEnd = function(dragObject, dropElem) {};
  this.onDragCancel = function(dragObject) {};

};


function getCoords(elem) {
  var box = elem.getBoundingClientRect();

  return {
    top: box.top + pageYOffset,
    left: box.left + pageXOffset
  };
}

function resizePlayers()
{
    var players = document.getElementsByClassName('player');
    
    for ( var i = 0; i < players.length; i++) {
        players[i].style.height = players[i].offsetWidth + 'px';
        
        console.log(players[i].offsetWidth);
        console.log(players[i].offsetHeight);
    }
}

function resizePlayer(player)
{
    player.style.height = player.offsetWidth + 'px';
}

DragManager.onDragCancel = function(dragObject) {
      dragObject.avatar.rollback();
};

DragManager.onDragEnd = function(dragObject, dropElem) {
    console.log(dropElem);
    dragObject.avatar.resetStyles();
    dropElem.appendChild(dragObject.elem);
};