<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>efeito vidro</title>
	<style type="text/css">
		.imagem{
			background-image: url(https://imagensemoldes.com.br/wp-content/uploads/2020/07/Imagem-Chuva-PNG.png);
		}
		.imagem background-image{
			width: 100%;
			background-repeat: none;
		}

		.caixa{
			width: 350px;
			height: auto;
            overflow: hidden;
			background: rgba(255, 255, 255, 0.1);
			backdrop-filter: blur(4px);
			-webkit-backdrop-filter: blur(10px);
			text-align: center;
			border-radius: 5px 30px;
            margin: auto;
            margin-top: 160px;
		}

        .dados{
            border-radius: 5px;
            opacity: 80%;
            padding: 2px;
            margin-top: 2px;
            border: solid 1px;
        }
        
        .titulo{
            text-shadow: 2px -3px 3px #fff;
        }
	</style>
</head>
<body class="imagem">
	    <div class="caixa">
        <h1 class="titulo">Cadastro</h1>
        <form style="padding: 5px;" action="cadastro.php" method="post">    
            <input class="dados" type="text" name="nome" placeholder="Nome"/><br/>
            <input class="dados" type="email" name="email" placeholder="@email.com"/><br/>
            <input class="dados" type="password" name="senha" placeholder="Senha"/>
            <br/>
            <input class="dados" type=submit value="Enviar"/>
        </form>
	</div>


    

</body>
</html>
