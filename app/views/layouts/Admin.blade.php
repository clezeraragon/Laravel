<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<title> Area Administrativa </title>
	</head>
	<body>
	  <div>
                <div style="float:left; width: 200px; margin-right:20px;">
                        @section('sidebar')
                               Gerenciar Site....
                            @show
</div>
                            <div class="container">
                                @yield('conteudo')
                            </div>

         </div>
	</body>
</html>