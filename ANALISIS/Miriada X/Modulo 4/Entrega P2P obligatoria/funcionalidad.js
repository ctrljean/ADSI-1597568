//Declaramos variables
var operandoa;
var operandob;
var operacion;

function init(){
  //variables
  var resultado = document.getElementById('resultado');
  var reset = document.getElementById('reset');
  var suma = document.getElementById('suma');
  var resta = document.getElementById('resta');
  var multiplicacion = document.getElementById('multiplicacion');
  var division = document.getElementById('division');
  var igual = document.getElementById('igual');
  var uno = document.getElementById('uno');
  var dos = document.getElementById('dos');
  var tres = document.getElementById('tres');
  var cuatro = document.getElementById('cuatro');
  var cinco = document.getElementById('cinco');
  var seis = document.getElementById('seis');
  var siete = document.getElementById('siete');
  var ocho = document.getElementById('ocho');
  var nueve = document.getElementById('nueve');
  var cero = document.getElementById('cero');
  var elevar = document.getElementById('elevar');
  var inverso = document.getElementById('inverso');
  var raiz = document.getElementById('raiz');
  var negativo = document.getElementById('negativo');
  var entero = document.getElementById('entero');
  var punto = document.getElementById('punto');

  //Eventos de click
  uno.onclick = function(e){
      resultado.textContent = resultado.textContent  + "1";
  }
  dos.onclick = function(e){
      resultado.textContent = resultado.textContent  + "2";
  }
  tres.onclick = function(e){
      resultado.textContent = resultado.textContent  + "3";
  }
  cuatro.onclick = function(e){
      resultado.textContent = resultado.textContent  + "4";
  }
  cinco.onclick = function(e){
      resultado.textContent = resultado.textContent  + "5";
  }
  seis.onclick = function(e){
      resultado.textContent = resultado.textContent  + "6";
  }
  siete.onclick = function(e){
      resultado.textContent = resultado.textContent  + "7";
  }
  ocho.onclick = function(e){
      resultado.textContent = resultado.textContent  + "8";
  }
  nueve.onclick = function(e){
      resultado.textContent = resultado.textContent  + "9";
  }
  cero.onclick = function(e){
      resultado.textContent = resultado.textContent  + "0";
  }
  reset.onclick = function(e){
      resetear();
  }

  elevar.onclick = function(e){
   operandoa = resultado.textContent
   operacion = "^";
   limpiar();
  }

  inverso.onclick = function(e){
  operandoa = resultado.textContent
  operacion = "(-)";
  limpiar();

  }
  raiz.onclick = function(e){
    operandoa = resultado.textContent
    operacion = "√";
    limpiar()
  }
  suma.onclick = function(e){
      operandoa = resultado.textContent;
      operacion = "+";
      limpiar();

  }
  resta.onclick = function(e){
      operandoa = resultado.textContent;
      operacion = "-";
      limpiar();

  }
  multiplicacion.onclick = function(e){
      operandoa = resultado.textContent;
      operacion = "*";
      limpiar();

  }
  division.onclick = function(e){
      operandoa = resultado.textContent;
      operacion = "/";
      limpiar();
  }
  punto.onclick = function(){
    resultado.textContent += '.';
  }
  negativo.onclick = function(e){
      resultado.textContent += '-';  
  }
  entero.onclick = function() {
    operandoa = resultado.textContent;
    operacion = "|";
    limpiar();
  }
  igual.onclick = function(e){
      operandob = resultado.tetContent;
      resolver();

  }
  function limpiar(){
  resultado.textContent = "";

  }
  function resetear(){
  resultado.textContent = "";
  operandoa = 0;
  operandob = 0;
  operacion = "";

  }
  function resolver(){
  var res = 0;
  switch(operacion){
    
    case "+":
      res = parseFloat(operandoa) + parseFloat(operandob);
      break;
    case "-":
        res = parseFloat(operandoa) - parseFloat(operandob);
        break;
    case "*":
      res = parseFloat(operandoa) * parseFloat(operandob);
      break;
    case "/":
      res = parseFloat(operandoa) / parseFloat(operandob);
      break;
    case "^":
      res = Math.pow(parseFloat(operandoa),parseFloat(operandob));
      break;
    case "(-)":
      if (Math.sign(operandoa) === 1) {
        res=operandoa * -1;
      }else {
        res = operandoa * -1; 
      }
    break;
    case "√":
      res = Math.sqrt(operandoa);
    break;
    case "|":
    if (Math.sign(operandoa) === 1) {
        res= Math.floor(operandoa);
      }else {
        res= Math.ceil(operandoa);
      }
    break;
  }
  resetear();
  resultado.textContent = res;
}
}


