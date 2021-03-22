// Criando do Mapa
// L = Objeto/ map() e setView = Função dentro do L 
const map = L.map('mapid').setView([-23.7099839,-46.5538248], 15);

// Criando uma camada que vai receber o mapa e adicionando o mapa
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

// Criando Ícone
const icon = L.icon({
    //iconUrl: "https://i.ibb.co/c3QCpNh/icon-map.png",

    iconSize: [58, 68],    // Tamanho do Ícone
    iconAnchor: [29, 68],  // Onde o Ícone estará 'Ancorado"
    popupAnchor: [170, 2]  // Posição onde ficará o PopUp quando clicado
})

// Criando o PopUp Overlay
const popup = L.popup({
    closeButton: false,      // Desabilitando o closeButton
    className: 'map-popup',  // Nome de Classe 
    minWidth: 240,           // Largura Minima
    minHeight: 240           // Altura Minima

    // Função que irá retornar o PopUp
}).setContent('Secretária da Saúde de SBC <a href="individual_page.php"><i class="fas fa-arrow-right text-white"></i></a>')

// Cria uma marcação e adicionando um PopUp
L.marker([-23.7099839, -46.5538248])
.addTo(map)
.bindPopup(popup);

L.marker([-23.7071933, -46.5515241]).addTo(map);
//L.marker([-23.7084841, -46.5554545]).addTo(map);
/*
$('.counter-count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
      
      //chnage count up speed here
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

var main = function () {
    $('.push-bar').on('click', function(event){
      if (!isClicked){
        event.preventDefault();
        $('.arrow').trigger('click');
        isClicked = true;
      }
    });
  
    $('.arrow').css({
      'animation': 'bounce 2s infinite'
    });
    $('.arrow').on("mouseenter", function(){
        $('.arrow').css({
                'animation': '',
                'transform': 'rotate(180deg)',
                'background-color': 'black'
           });
    });
     $('.arrow').on("mouseleave", function(){
        if (!isClicked){
            $('.arrow').css({
                    'transform': 'rotate(0deg)',
                    'background-color': 'black'
               });
        }
    });

    var isClicked = false;

    $('.arrow').on("click", function(){
        if (!isClicked){
            isClicked = true;
            $('.arrow').css({
                'transform': 'rotate(180deg)',
                'background-color': 'black',
           });

            $('.bar-cont').animate({
                top: "-15px"
            }, 300);
            $('.main-cont').animate({
                top: "0px"
            }, 300);
            // $('.news-block').css({'border': '0'});
            // $('.underlay').slideDown(1000);

        }
        else if (isClicked){
            isClicked = false;
            $('.arrow').css({
                'transform': 'rotate(0deg)',       'background-color': 'black'
           });

            $('.bar-cont').animate({
                top: "-215px"
            }, 300);
            $('.main-cont').animate({
                top: "-215px"
            }, 300);
        }
    console.log('isClicked= '+isClicked);
    });
  
    $('.card').on('mouseenter', function() {
      $(this).find('.card-text').slideDown(300);
    });
  
    $('.card').on('mouseleave', function(event) {
       $(this).find('.card-text').css({
         'display': 'none'
       });
     });
};

$(document).ready(main);*/