<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  
</head>
<body>
<main>
  <form>
    <hgroup>
      <h2>Formulaire</h2>
    </hgroup>
    
    <fieldset>
      <input type="text" placeholder="Nom" required>
      <input type="text" placeholder="Prenom" required>
      <input type="email" placeholder="Courriel" required>
      <input type="contact" placeholder="Telephone" required>
    </fieldset><br>
  
    <button>Enregistrer</button>
  </form>
  
  <section>
    <h2>Merci!</h2>
    <br>
   
  </section>
</main>

<script>
  $('button').click(function(e) {
  e.preventDefault();
  $('main').addClass('flip');
});

</script>

</body>
</html>