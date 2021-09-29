<!-- SLIME 

  <canvas id="c"></canvas>

  <div class="floating-ui">
    <h1 style="color:White;">THALES</h1>
  </div>


  <script src="application/js/Fluid.js"></script>
  <script src="application/js/index.js"></script>
-->




  <div class="fixed-top gradient navbar navbar-expand-lg">
    
        <a class="nav-link text-white" href="#">PROJETOS</a>
        <a class="nav-link text-white" href="#">CONTATO</a>
    
  </div>



  <div id="secao1" class="text-center">
    <div>
        <img id="euimg" src="application/views/assets/img/eu.png">
    </div>
    <div id="secaobottom" class="gradient"></div>
        
  </div>
  <div>
        <h3 id="textoeu"></h3>
   </div>

<div class="text-center">
    <h6>Olá, eu sou o Thales Henrique, analista e desenvolvedor de sistemas<br><br>
        Meu foco está em desenvolvimento web com:<br> PHP, JAVASCRIPT, ANGULAR, HTML5, CSS3 e afins<br><br>
        Atualmente trabalho na empresa TOTVS como analista no time Framework<br><br>

        Amo desenvovimento web e amo estudar tecnologia. Atuando constantemente com modelo ágil SCRUM </h6>
</div>

<div id="redes" class="row text-center"> 

<div class="col-4">
 <a href="https://www.linkedin.com/in/thales-henrique-b027aa206/" style="color:#0099e1;"> <i class="fab fa-linkedin mt-4"></i></a>
</div>


<div class="col-4">
 <a href="https://github.com/thaleshpied" style="color:#0099e1;"> <i class="fab fa-github mt-4"></i></a>
</div>


<div class="col-4">
 <a href="https://www.instagram.com/thaleshenriq/" style="color:#0099e1;"> <i class="fab fa-instagram mt-4"></i></a>
</div>

</div>



<script type="text/javascript">
    var div = document.getElementById('textoeu');
var texto = 'Analista de Sistemas';

function escrever(str, el) {
  var char = str.split('').reverse();
  var typer = setInterval(function() {
    if (!char.length) return clearInterval(typer);
    var next = char.pop();
    el.innerHTML += next;
  }, 100);
}

escrever(texto, div);

</script>


<script type="text/javascript">

setTimeout(function(){
  var element = document.getElementById("euimg");
  element.classList.add("efeito");

  var element = document.getElementById("textoeu");
  element.classList.add("efeito");


},4000);





</script>



</body>

</html>