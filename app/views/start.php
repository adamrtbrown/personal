<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ember Starter Kit</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <script type="text/x-handlebars" id="test">
    
    <header>
        <span class='big'>Adam RT Brown</span>
        <span class='users'>Users viewing right now: <span class='box'>1</span></span>
    </header>
    
    <nav>hi</nav>
    <section></section>
  


    {{outlet}}
  </script>

  <script type="text/x-handlebars" id="index">
    <ul>
    {{#each item in model}}
      <li>{{item}}</li>
    {{/each}}
    </ul>
  </script>

  <script src="js/libs/jquery-1.10.2.js"></script>
  <script src="js/libs/handlebars-1.1.2.js"></script>
  <script src="js/libs/ember-1.5.1.js"></script>
  <script src="js/app.js"></script>
  <script src="js/router.js"></script>
  <!-- to activate the test runner, add the "?test" query string parameter -->
  <script src="tests/runner.js"></script>
</body>
</html>
