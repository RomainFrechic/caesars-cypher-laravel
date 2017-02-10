<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">

	<title>Caesars Cypher</title>
</head>
<body>
<form class="ui mini form" action="/caesars/addCaesars/newForm" method="post">
{{csrf_field()}}
	<div class="ui inverted segment">
  <div class="ui inverted form">
    <div class="two fields">
      <div class="field">
        <label for="identiant">identidiant</label>
        <input placeholder="Identifiant" type="text" id="identifiant" name="identifiant">
      </div>
      <div class="field">
        <label for="password">Password</label>
        <input placeholder="Password" type="text" id="password" name="password">
      </div>
    </div>
    <input type="submit" class="ui submit button" value="Submit">
  </div>
</div>
</form>  
@foreach($caesarsRome as $caesars)

<h2>Identifiant : {{ $caesars->identifiant }}<div> </div>Password : {{ $caesars->password }}</h2>

@endforeach

@yield('content')

</body>
</html>