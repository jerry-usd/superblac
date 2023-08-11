$(window).on("scroll", function() {
    if($(window).scrollTop() > 20) {
        $(".main-nav").addClass("kol");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".main-nav").removeClass("kol");
    }
});

 new Splide( '#so', {
  perPage: 4,
  rewind : true,
  autoplay:true,
    breakpoints: {
    '640': {
      perPage: 2,
      gap    : '1rem',
    },
    '480': {
      perPage: 1,
      gap    : '1rem',
    },
  }
} ).mount();




function locations(argument) {
var data="type=locations";

     
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', 'php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     console.log(xhr.responseText);
        document.getElementById('option').innerHTML=xhr.responseText;
     }
  xhr.send(data);
}
locations();


function hw(argument) {
var data="type=hw";

     
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', 'php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     console.log(xhr.responseText);
        document.getElementById('hww').innerHTML=xhr.responseText;
     }
  xhr.send(data);
}
hw();


function list(argument) {
var data="type=list";

     
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', 'php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     console.log(xhr.responseText);
        document.getElementById('list').innerHTML=xhr.responseText;
        AOS.init();
         new Splide( '#so', {
  perPage: 4,
  rewind : true,
    breakpoints: {
    '640': {
      perPage: 2,
      gap    : '1rem',
    },
    '480': {
      perPage: 1,
      gap    : '1rem',
    },
  }
} ).mount();

     }
  xhr.send(data);
}
list();


function blog(argument) {
var data="type=hblog";

     
     
     var xhr = new XMLHttpRequest();
     xhr.open('POST', 'php/master.php', true);
     xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
     xhr.onload = function () {
     console.log(xhr.responseText);
        document.getElementById('hblog').innerHTML=xhr.responseText;
       AOS.init();
     }
  xhr.send(data);
}
blog();