var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function(){
  displayMusic();
});


function displayMusic() {

  $.ajax(
    {

      url: "http://localhost:8888/php-ajax-dischi/server.php",
      method: "GET",
      success: function(data) {

        console.log(data);

        var source = $("#track-template").html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < data.length; i++) {

          var html = template(data[i]);
          $("main .container").append(html);

        }
      },

      error: function (error) {
        alert("Si è verificato un errore " + errore)
      },

    }
  );

}
