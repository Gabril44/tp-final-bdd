<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pedidos.css">
    <link rel="stylesheet" href="menu.css">
    <title>Pedidos</title>
</head>
<body>
    <header>
        <?php include("menu.html"); 
        $arr = array();

        ?>
    <h1>Bueno aca tendrian q estar los pedidos xd</h1>
    </header>
    <main>
    <body style="text-align: center;">
    <button class="open-button" onclick="openForm()" style="text-align: center;">Agregar producto</button>
    <div class="form-popup" id="myForm">
  <form class="form-container" method="post" name="ft" id="ft">
    <h1 class="formh1">Pedidos</h1>

    <label for="stock"><b class="formb">stock pa agregar:</b></label>
    <!--<input type="text" placeholder="Escribe el nombre" name="stock" required>-->
    <input type="hidden" name="selectedstock" id="selectedstock">
    <button type="button" class="btn" onclick="option1()">Opcion 1</button>
    <button type="button" class="btn" onclick="option2()">Opcion 2</button>
    <!--<input type="submit">Agregar</input>-->
    <button type="button" class="btn cancel" onclick="closeForm()">Cerrar</button>
  </form>
   </div>
   <?php
      if(isset($_POST['selectedstock'])){
        echo $_POST['selectedstock'];
      }
      ?>
    </body>
    </main>
<script>
function option1(){
  document.ft.selectedstock.value="Opcion1";
  document.ft.submit();
}
function option2(){
  document.ft.selectedstock.value="Opcion2";
  document.ft.submit();
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>