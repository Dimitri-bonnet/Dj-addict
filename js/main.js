const $search = $("#search");
const $result = $("#result");


$( "#bouton" ).click(function() {
  let search = $("#recherche").val();
  console.log($search);

  if(search === "prenom"){
    $.get({
      url: 'http://localhost/Dj-Addict%20site/messagefunction.php',
      data: {prenom: $search.val()},
      dataType: "json"

    })

    .done(function(data){
      $result.empty();
      data.forEach(message => {
      console.log(message);
      formatMessage(message, $result);
      });
    })

    .fail(function (reqt,error){
       console.log(error)
    })

    function formatMessage (message, div){
      let Mdata = $(
        "<h6 class='bg-white text-center'>Date : "+ message.date + "</h6>"+"<p class='bg-white pl-4 mt-n4'>" + "<br>Nom : "  +message.nom + "<br> <strong>Prenom : " + message.prenom  + "</strong>"+"<br> Email : " + message.email + "<br> Objet : "+ message.objet +"<br> Message : "+ message.msg +"</p>"
        + "<div class='text-center'><a class='text-center btn btn-danger mb-4 mt-n2' href=supp-msg.php?id="+message.id+"'>Supprimer</a></div>");
      Mdata.appendTo(div);
    }

  }else if(search === "nom"){
    $.get({
      url: 'http://localhost/Dj-Addict%20site/messagefunction.php',
      data: {nom: $search.val()},
      dataType: "json"

    })

    .done(function(data){
      $result.empty();
      data.forEach(message => {
      console.log(message);
      formatMessage(message, $result);
      });
    })

    .fail(function (reqt,error){
       console.log(error)
    })
  
    
    function formatMessage (message, div){
      let Mdata = $(
        "<h6 class='bg-white text-center'>Date : "+ message.date + "</h6>"+"<p class='bg-white pl-4 mt-n4'>" + "<br> <strong>Nom : </strong>"    +"<strong>" +message.nom + "</strong>"+ "<br>Prenom : " + message.prenom +"<br> Email : " + message.email + "<br> Objet : "+ message.objet +"<br> Message : "+ message.msg +"</p>"
        + "<div class='text-center'><a class='text-center btn btn-danger mb-4 mt-n2 '  href=supp-msg.php?id="+message.id+"' + >Supprimer</a></div>");
      Mdata.appendTo(div);
    }

  }else if(search === "email"){
    $.get({
      url: 'http://localhost/Dj-Addict%20site/messagefunction.php',
      data: {email: $search.val()},
      dataType: "json"

    })

    .done(function(data){
      $result.empty();
      data.forEach(message => {
      console.log(message);
      formatMessage(message, $result);
      });
    })

    .fail(function (reqt,error){
       console.log(error)
    })

    function formatMessage (message, div){
      let Mdata = $("<h6 class='bg-white text-center'>Date : "+ message.date + "</h6>"+"<p class='bg-white pl-4 mt-n4'>" + "<br>Nom : "  +message.nom + "<br>Prenom : " + message.prenom  + "<br><strong>Email : " + message.email + "</strong>"+ "<br> Objet : "+ message.objet +"<br> Message : "+ message.msg +"</p>"
      + "<div class='text-center'><a class='text-center btn btn-danger mb-4 mt-n2 '  href=supp-msg.php?id="+message.id+"'>Supprimer</a></div>");
      Mdata.appendTo(div);
    }

  }else if(search === "objet"){
    $.get({
      url: 'http://localhost/Dj-Addict%20site/messagefunction.php',
      data: {objet: $search.val()},
      dataType: "json"

    })

    .done(function(data){
      $result.empty();
      data.forEach(message => {
      console.log(message);
      formatMessage(message, $result);
      });
    })

    .fail(function (reqt,error){
       console.log(error)
    })

    function formatMessage (message, div){
      let Mdata = $("<h6 class='bg-white text-center'>Date : "+ message.date + "</h6>"+"<p class='bg-white pl-4 mt-n4'>" + "<br>Nom : "  +message.nom + "<br>Prenom : " + message.prenom  + "<br>Email : " + message.email + "<br><strong> Objet : "+ message.objet+"</strong>" +"<br> Message : "+ message.msg +"</p>"
      + "<div class='text-center'><a class='text-center btn btn-danger mb-4 mt-n2 '  href=supp-msg.php?id="+message.id+"'>Supprimer</a></div>");
      Mdata.appendTo(div);
    }

  }else if(search === "msg"){
    $.get({
      url: 'http://localhost/Dj-Addict%20site/messagefunction.php',
      data: {msg: $search.val()},
      dataType: "json"

    })

    .done(function(data){
      $result.empty();
      data.forEach(message => {
      console.log(message);
      formatMessage(message, $result);
      });
    })

    .fail(function (reqt,error){
       console.log(error)
    })

    function formatMessage (message, div){
      let Mdata = $("<h6 class='bg-white text-center'>Date : "+ message.date + "</h6>"+"<p class='bg-white pl-4 mt-n4'>" + "<br>Nom : "  +message.nom + "<br>Prenom : " + message.prenom  + "<br>Email : " + message.email + "<br>Objet : "+ message.objet +"<br> <strong>Message : "+ message.msg +"</strong>"+"</p>"
      + "<div class='text-center'><a class='text-center btn btn-danger mb-4 mt-n2 '  href=supp-msg.php?id="+message.id+"'>Supprimer</a></div>");
      Mdata.appendTo(div);
    }
  }else if(search === "date"){
    $.get({
      url: 'http://localhost/Dj-Addict%20site/messagefunction.php',
      data: {date: $search.val()},
      dataType: "json"

    })

    .done(function(data){
      $result.empty();
      data.forEach(message => {
      console.log(message);
      formatMessage(message, $result);
      });
    })

    .fail(function (reqt,error){
       console.log(error)
    })

    function formatMessage (message, div){
      let Mdata = $("<h6 class='bg-white text-center'><strong>Date : "+ message.date + "</strong>"+"</h6>"+"<p class='bg-white pl-4 mt-n4'>" + "<br>Nom : "  +message.nom + "<br>Prenom : " + message.prenom  + "<br>Email : " + message.email + "<br>Objet : "+ message.objet +"<br> Message : "+ message.msg + "</p>"
      + "<div class='text-center'><a class='text-center btn btn-danger mb-4 mt-n2 '  href=supp-msg.php?id="+message.id+"'>Supprimer</a></div>");
      Mdata.appendTo(div);
    }
  }else if(search === "all"){
    $.get({
      url: 'http://localhost/Dj-Addict%20site/messagefunction.php',
      data: {all: $search.val()},
      dataType: "json"

    })

    .done(function(data){
      $result.empty();
      data.forEach(message => {
      console.log(message);
      formatMessage(message, $result);
      });
    })

    .fail(function (reqt,error){
       console.log(error)
    })

    function formatMessage (message, div){
      let Mdata = $("<h6 class='bg-white text-center'><strong>Date : "+ message.date + "</strong>"+"</h6>"+"<p class='bg-white pl-4 mt-n4'>" + "<br>Nom : "  +message.nom + "<br>Prenom : " + message.prenom  + "<br>Email : " + message.email + "<br>Objet : "+ message.objet +"<br> Message : "+ message.msg + "</p>"
      + "<div class='text-center'><a class='text-center btn btn-danger mb-4 mt-n2 '  href=supp-msg.php?id="+message.id+"'>Supprimer</a></div>");
      Mdata.appendTo(div);
    }
  }                
}); 


/* Scroll magic Index */

let controller = new ScrollMagic.Controller();
let scene2 = new ScrollMagic.Scene({
  triggerElement : '.box2',
  reverse : false
})
.setClassToggle('.box2', 'fade-in')
/* .addIndicators({
  name: 'indications',
  indent :300,
  colorStrat: '#fff'
}) */
.addTo(controller);

let scene3 = new ScrollMagic.Scene({
  triggerElement : '.box3',
  reverse : false
})
.setClassToggle('.box3', 'fade-in')
/* .addIndicators({
  name: 'indications',
  indent :300,
  colorStrat: '#fff'
}) */
.addTo(controller);

let scene4 = new ScrollMagic.Scene({
  triggerElement : '.box4',
  reverse : false
})
.setClassToggle('.box4', 'fade-in')
/* .addIndicators({
  name: 'indications',
  indent :300,
  colorStrat: '#fff'
}) */
.addTo(controller);

let scene5 = new ScrollMagic.Scene({
  triggerElement : '.box5',
  reverse : false
})
.setClassToggle('.box5', 'fade-in')
/* .addIndicators({
  name: 'indications',
  indent :300,
  colorStrat: '#fff'
}) */
.addTo(controller);


/* Click pour faire remonter la page au niveau 0PX */

let btnRemote = document.querySelector('.btnRemote')

btnRemote.addEventListener('click', () => {
   
      window.scrollTo({
        top:0,
        left:0,
        behavior: "smooth"
      })
})

/* Faire apparaitre/disparaitre le bouton */
$('#return_top').hide();

$(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() > 700){
      $('#return_top').fadeIn(800);
    }else{
      $('#return_top').fadeOut(800);
    }
  })
});