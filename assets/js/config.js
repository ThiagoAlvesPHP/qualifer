//DEFINIR SE É EM PRODUÇÃO OU~DESENVOLVIMENTO
var url_local = window.location.href;
if(url_local.indexOf('localhost')==-1) {
    var url = 'https://blueseeds.mercatapp.com.br/';
} else {
    var url = 'http://localhost/PROJETOS_ANDAMENTO/BlueSeeds/';
}