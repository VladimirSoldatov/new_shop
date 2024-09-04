<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf–8">
<meta name="viewport" content="width=device–width, initial–scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>new_shop</title>
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
<!–– Latest compiled and minified JavaScript ––>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}">
</script>
<script type="text/javascript" src="{{asset('js/jquery-3.0.0.js')}}">
</script>
</head><!–– /head ––>

<body>
@section('menu')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
	    <a class="navbar-brand" href="home">Главное меню</a>
        <a class="nav-link" href="users">Пользователи</a>
        <a class="nav-link" href="photo">Фотографии</a>
        <a class="nav-link" onclick="closeWindow">Выйти</p>
      </div>
    </div>
  </div>
</nav>
@show
<div class="container">
@yield('content')
</div>
</body>
<script> 
function closeWindow(){
	if (confirm('Вы действительно хотите закрыть страницу?')) {
		window.close();
	}
}
 </script>
</html>