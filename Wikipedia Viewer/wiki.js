$(document).ready(function(){
  'use strict';
  $('.searchquery').on('keyup', cari);
  $('.cari').submit(cari);
  function cari() {
    var query = $('.searchquery').val();
    var url = 'http://en.wikipedia.org/w/api.php?action=opensearch&format=json&callback=?&search='+query;
    $.getJSON(url, function(data){
      $('ul').empty();
      console.log(data);
      for (var i=0; i < data[3].length; i++) {
        if (data[2][i] !== "") {
          $('ul').append('<a target = "_blank" href="'+data[3][i]+'"><li>'+data[2][i]+'</li></a>');
        }
      }  
    });
    return false;
  }
});