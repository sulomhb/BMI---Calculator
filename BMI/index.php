
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="3009sesu">
    <meta name="datetime" content="2018-12-12 08:04:51">
    <meta name="docid" content="o6lvfnh7fXxjnJGk49mmlaXczJPdoZzP16q90J2kqKigpKtwU1+a9N6jlp6WmFKIlaWnlaCjnGptZ6Nw">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Regn ut din BMI</title>
</head>
<body id="uses">
    <div>

    <h1>Regn ut din BMI</h1>
    <br/>
      <form method="get">
    <label>Vekt(kg):</label> <br/>
    <input type="text" name="vekt">  
    <br/>
    <label>Høyde (m)</label><br/>
    <input type="text" name="høyde">  
    <br/>
    <br/>
    <input id="calculate" type="submit" name="submit" value="Regn ut BMI">
    <br/>
      
      </form>
      <br/>
<p>Din BMI er:</p>
<?php require 'funksjoner.php'; ?>
    </div>

</body>
</html>