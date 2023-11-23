<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/contact.css">
</head>
<body>

<h2>Contactez-nous!</h2>
<p>Remplir ce formulaire et redier votre message, nous vous réponderons dans les plus bref delais. Merci !</p>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">Prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Nom de famille</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Pays</label>
    <select id="country" name="country">
      <option value="australia">Australie</option>
      <option value="canada">Canada</option>
      <option value="usa">France</option>
    </select>

    <label for="subject">Votre message</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid rgb(88, 65, 65);
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: rgb(17, 49, 41);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: rgb(17, 49, 41);
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
body{
    background-color: rgb(67, 71, 71);
}
body{
    margin-left: 300px;
    margin-top: 10px;
    margin-right: 300px;
   
}

body h2,p{
    color: white;
}


</style>


</body>
</html>