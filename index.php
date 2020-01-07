<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- JS: HANDLEBARS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
  <!-- TEMPLATE -->
  <script id="entry-template" type="text/x-handlebars-template">
    <div class="configuration">
      <p>ID : {{id}} - <strong>{{title}}</strong> - {{description}}</p>
    </div>
  </script>
  <!-- JS: JQUERY -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- JS -->
  <script src="assets/js/script.js"></script>
  <title>php-crud-read-create-update</title>
</head>
<body>

  <div class="container">
    <div class="left-side">
      <h3>Aggiungi una configurazione</h3>
      <form id="myForm">
        <label for="title">titolo</label>
        <input type="text" name="title"> <br>
        <label for="description">descrizione</label>
        <input type="text" name="description"> <br>
        <input type="submit" name="submit"> 
      </form>
      <h3>Modifica una configurazione</h3>
      <form id="update">
        <label for="title">nuovo titolo</label>
        <input type="text" name="title"> <br>
        <label for="description">nuova descrizione</label>
        <input type="text" name="description"> <br>
        <label for="configurationId">ID</label>
        <input type="text" name="configurationId"> <br>
        <input type="submit" name="submit"> 
      </form>
    </div>
  
    <div class="right-side">
      <h3>Configurazioni disponibili</h3>
      <div id="configurations"></div>
    </div>
  </div>
  
</body>
</html>