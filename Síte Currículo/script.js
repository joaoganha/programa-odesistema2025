//alert("Olá mundo!");
//feito em casa
//Uma variável guarda algum valor temporariamente
//Entrada dos dados
var nome = "Valdecir";
var idade = 45;
var senha = "999999";

//registrando alteração
//enviando alteração pro github com o visual estúdio
//alterado no GIT
//feito alteração

//estrutura de condição
if(idade > 17){
    //alert("Pode votar! "+ nome);
} else{
    //alert("Vai embora daqui! "+ nome);
}

if(nome == "Valdecir" && senha =="123"){
    //alert("Login concedido! ");
}else{
    //alert("Tente Novamente! seu intruso!");
}

//laço de repetição
contador = 0;
while(contador < 1000){
    contador = contador + 1;
    console.log(contador);
}


var celular = document.querySelector('.celular');     //icone de menu
var listaMenu = document.querySelector('.menu ul');   //itens do menu

celular.addEventListener('click', function(){ 
    listaMenu.classList.toggle('mostrarMenu');
 });