
/* CORRIGIR DEPOIS, BUG NO LOGIN */
/*var working = false;

$('.login').on('submit', function(e) {
  e.preventDefault();
  if (working) return;
  working = true;
  var $this = $(this),
    $state = $this.find('button > .state');
  $this.addClass('loading');
  $state.html('Autenticando');
  setTimeout(function() {
    $this.addClass('ok');
    $state.html('Bem Vindo!');
    window.location="validar.php";
    setTimeout(function() {
      $state.html('Log in');
      $this.removeClass('ok loading');
      working = false;
    }, 4000);
  }, 3000);
});

/*
function AuthLogin(login) {

    var User = document.getElementById('User').value;
    var Password = document.getElementById('Password').value;
    alert("User:" + User);
    alert("Pw: " + Password);
    var request = $.ajax({
        url: 'validar.php',
        type: 'POST',
        data: { User: User,
                Password: Password},
        cache: false,
        success: function(data, status){
          alert("Os dados sao: " + data(User), data(Password));
          alert("O status é: " + status);
          }
        })
    };

/* recebe parametros - nova:
function AuthLogin(login) {

    var User = document.getElementById('User').value;
    var Password = document.getElementById('Password').value;
    alert("User:" + User);
    alert("Pw: " + Password);
    var request = $.ajax({
        url: 'validar.php',
        type: 'POST',
        data: { User: User,
                Password: Password},
        cache: false,
        success: function(data, status){
          alert("Os dados sao: " + data(User), data(Password));
          alert("O status é: " + status);
          }
        })
    };
*/


/*

if (data) { // note the object parameter has changed
              alert("Verdadeiro: " + data);
              window.location="painel.php";
          } else {
              alert("Falso : " + data);
              window.location="index.html";

*/

/*
var working = false;
$('.login').on('submit', function(e) {
  e.preventDefault();
  if (working) return;
  working = true;
  var $this = $(this),
    $state = $this.find('button > .state');
  $this.addClass('loading');
  $state.html('Autenticando');
  setTimeout(function() {
    $this.addClass('ok');
    $state.html('Bem Vindo!');
    setTimeout(function() {
      $state.html('Log in');
      $this.removeClass('ok loading');
      working = false;
    }, 4000);
  }, 3000);
});
*/

/*
    var User = $('User').attr('name');
    var Password = $('Password').attr('name');
*/