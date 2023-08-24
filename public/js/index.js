const radios = document.querySelectorAll('.btn-check');

  radios.forEach(radio => {
    radio.addEventListener('click', () => {
      radios.forEach(otherRadio => {
        if (otherRadio !== radio) {
          otherRadio.checked = false;
        }
      });
    });
  });



  // PASSOS CONTEUDO //
let passos = [{"id":0, "img":'./img/foto1.jpg',"text": '<p>Fruto do Projeto Integrador do IFRS Campus Ibirubá, tem o objetivo de facilitar a mobilidade urbana de forma organizada por meio da disponibilização de horários e rotas dos ônibus para os alunos do IFRS, pois percebe-se a falta de informações sobre os transportes públicos, por exemplo a falta de informação sobre os trajetos percorridos pelo ônibus</p>','lista':'Sobre o Projeto'}, 
{"id":1, "img": './img/foto2.jpg',"text": '<p>O projeto é composto por dez alunos do IFRS Campus Ibirubá, do primeiro e do terceiro ano do curso Técnico em Informática Integrado ao Ensino médio. São eles: Amanda Everling, Caio Venturi, Guilhermi Pedroso, Gustavo dos Santos, Joaquim Debiasi, João Vitor Benedetti, Marielli Wilmens, Rafaela Tonini, Sarah Lopes e Yasnin dos Reis.</p>', 'lista':'Equipe SmartBus 2023'},
{"id":2, "img": './img/foto3.jpg',"text": '<p>O projeto é composto por oito alunos do IFRS Campus Ibirubá, do segundo e do terceiro ano do curso Técnico em Informática Integrado ao Ensino médio. São eles: Amanda Everling, Arthur Katzer, Guilhermi Pedroso, Laura Oliveira da Cunha, Luis Gabriel Reichert, Morgana Guntzel dos Santos, Pâmela Gomes dos Santos e Victoria Staudt Zamboni.</p>','lista':'Equipe SmartBus 2022'},
]
// BOTÃO PROXIMO FUNÇÃO //
var btn = document.querySelectorAll("#btnproximo");
let id= 0
function proximo(){
  if(id <= 1){
    id = id + 1;
    let passo = passos.filter(passos => passos.id === id)[0];
  document.getElementById('texto').innerHTML = passo.text;
  document.getElementById('lista').innerHTML = passo.lista;
  document.getElementById("img1").src = passo.img;  
  }
  if(id <= 0){
    id = 1;
    let passo = passos.filter(passos => passos.id === id)[0];
    document.getElementById('texto').innerHTML = passo.text;
    document.getElementById('lista').innerHTML = passo.lista;
    document.getElementById("img1").src = passo.img;  
  }
  console.log(id)
  }
// BOTÃO VOLTAR FUNÇÃO //
var btn = document.querySelectorAll("#btnvoltar");
function voltar(){
  if(id > 0){
      id = id  - 1;
      let passo = passos.filter(passos => passos.id === id)[0];
      document.getElementById('texto').innerHTML = passo.text;
      document.getElementById('lista').innerHTML = passo.lista;
      document.getElementById("img1").src = passo.img;
}if (id >= 2){
  id = 1;
  let passo = passos.filter(passos => passos.id === id)[0];
  document.getElementById('texto').innerHTML = passo.text;
  document.getElementById('lista').innerHTML = passo.lista;
  document.getElementById("img1").src = passo.img;
}
console.log(id)
}

