<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<title> Area Administrativa </title>
		{{HTML::style('style.css')}}
	</head>
	<body>
	  <div>
                <div style="float:left; width: 200px; min-height: 300px; margin-right:20px;">
                        @section('sidebar')
                               Gerenciar Site....

                               <ul>
                               <li>
                               {{ HTML::link('admin/' , 'Listar Produto') }}
                               </li>
                               <li>
                               {{ HTML::link('admin/newproduto' , 'Cadastrar Produto') }}
                               </li>
                               </ul>
                            @show
</div>
                            <div class="container">
                                @yield('conteudo')
                            </div>

         </div>
         {{HTML::script('scripts.js')}}
	</body>
</html>