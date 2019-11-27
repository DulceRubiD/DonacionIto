<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body>


				   <div class="container col-md-8 col-md-offset-2">
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                <h2>Beneficiarios</h2>
				            </div>
				            @if ($beneficiarios->isEmpty())
				                <div>No hay beneficiarios</div>
				            @else
				                <table class="table">
				                    <thead>
				                        <tr>
				                            
				                            <th>Nombre</th>
				                            <th>Correo</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        @foreach($beneficiarios as $user)
				                            <tr>
				                                <td>{!! $user->nombre !!}</td>
				                                <td>{!! $user->correo !!}</td>
				                             
				                            </tr>
				                        @endforeach
				                    </tbody>
				                </table>
				            @endif
				        </div>
				    </div>

</body>
</html>
