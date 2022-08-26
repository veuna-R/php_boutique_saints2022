<?php

// Accueil du BACK OFFICE

require_once("../inc/init.php");
require_once("inc/header.php");

?>

<!-- BODY -->

<style>
.wrapper {
  height: 50vh;
  /*This part is important for centering*/
  display: grid;
  place-items: center;
}

.typing-demo {
  width: 8ch;
  animation: typing 2s steps(22), blink .5s step-end infinite alternate;
  white-space: nowrap;
  overflow: hidden;
  border-right: 3px solid;
  font-family: 'Franklin Gothic Medium';
  font-size: 20vh;
}

@keyframes typing {
  from {
    width: 0
  }
}
    
@keyframes blink {
  50% {
    border-color: transparent
  }
}
</style>

<div class="wrapper">
    <h1 class='typing-demo' id="titleadmin">BackOffice</h1>
</div>


<?php
    require_once("inc/footer.php");
?>