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
L.marker([-23.7099839,-46.5538248])
.addTo(map)
.bindPopup(popup);