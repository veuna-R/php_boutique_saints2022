  // fonction pour afficher/masquer le mot de passe
function myFunction() {
    var x = document.getElementById("exampleInputPassword1");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
