
/*----------------------------
   Status Text
  ------------------------------ */

var text = ["Programmer", "Game Developer", "HTL Student", "Sailor"];
var counter = 0;
var elem = $("#status");
setInterval(change, 2300);
function change() {
  elem.fadeOut(function () {
    elem.html(text[counter]);
    counter++;
    if (counter >= text.length) { counter = 0; }
    elem.fadeIn();
  });
}

/*----------------------------
   Send Email
  ------------------------------ */

function sendMail() {
  if (escape(document.getElementById("mail-subject").value) != "" && escape(document.getElementById("mail-text").value) != "") {
    var link = "mailto:hiebeler.daniel@gmail.com"
      + "&subject=" + escape(document.getElementById("mail-subject").value) + "&body=" + escape(document.getElementById("mail-text").value);

    window.location.href = link;
  }
  else {
    if (escape(document.getElementById("mail-subject").value) != "") {

    }
  }

}

/*----------------------------
   Toggle nav
  ------------------------------ */

function toggleNav() {
  if(document.getElementById("myNav").style.width == "100%")
  {
    document.getElementById("myNav").style.width = "0%";
  $('.animated-icon1').toggleClass('open');
  }
  else{
    document.getElementById("myNav").style.width = "100%";
  $('.animated-icon1').toggleClass('open');
  }
  
}

var footerParaHeight = $(".footer").height();
$(".page_overfooter").css("margin-bottom",footerParaHeight);



/*----------------------------
   Color Change
  ------------------------------ */


$(window).scroll(function() {

  // selectors
  var $window = $(window),
      $body = $('.bg-2'),
      $panel = $('.panel');

  // Change 33% earlier than scroll position so colour is there when you arrive.
  var scroll = ($window.scrollTop() + ($window.height()) / 2);

  $panel.each(function() {
      var $this = $(this);

      // if position is within range of this panel.
      // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
      // Remember we set the scroll to 33% earlier in scroll var.
      if ($this.position().top <= scroll) {

          // Remove all classes on body with color-
          $body.removeClass(function(index, css) {
              return (css.match(/(^|\s)color-\S+/g) || []).join(' ');
          });

          // Add class of currently active div
          $body.addClass('color-' + $(this).data('color'));
      }
  });

}).scroll();