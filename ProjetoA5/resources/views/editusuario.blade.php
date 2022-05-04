<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{asset('assets/bootstrap.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
    <div class="container ">
        <a class="navbar-brand h1 mb-0" href="#">Projeto A5</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSite">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('produtos.admin')}}" >Produtos </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('imagens.index')}}" >Imagens </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pedidos.index')}}" >Pedidos </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('usuarios.todos')}}" >Usuários </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('usuario.logout')}}" >Logout </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="second-column">
        <h2 class="title title-second"><b>Dados Cadastrais</b></h2>

        <form class="form" method="POST" action="{{route('usuario.edit',['usuario'=>$usuario->id])}}">
            @csrf
            @method('put')
            <h1 class="h3 mb-3 font-weight-normal">Editar</h1>
            <hr><br>
            <b>Nome</b>
            <label class="label-input" for="">
            <input type="text" name="name" value="{{$usuario->name}}" placeholder="Nome"  maxlength="20">
            </label>
            <br>
            <b>Sobrenome</b>
            <label class="label-input" for="">
            <input type="text" name="sobr_user" value="{{$usuario->sobr_user}}" placeholder="Sobrenome" maxlength="50">
            </label>
            <br>
            <b>CPF</b>
            <label class="label-input" for="">
            <input type="number" name="cpf_user" value="{{$usuario->cpf_user}}" placeholder="CPF" maxlength="11" required>
            </label><br>
            <b>Email</b>
            <label class="label-input" for="">
            <input type="email" name="email" value="{{$usuario->email}}" placeholder="E-mail" maxlength="50" required>
            </label><br>
            <b>Senha</b>
            <label class="label-input" for="">
            <input type="password" name="password" placeholder="Senha" maxlength="20" required>
            </label>
            <hr>
            <b>Sexo</b>
            <br>
            <label class="label-input" for="">
                <input type="radio"  name="sexo">Masculino
                <input type="radio"  name="sexo">Feminino
            </label>

            <hr>
            <b>Data de Nascimento</b>
            <br>

            <label class="label-input" for="">
            <input type="date" name="data_user" value="{{$usuario->data_user}}">
            </label>

            <hr>
            <b>Endereço do Usuário</b>
            <br>

            <label class="label-input" for="">
            <input type="text" name="end_user" value="{{$usuario->end_user}}" placeholder="Endereço" required>
            </label><br>

            <label class="label-input" for="">
            <input type="number" name="num_user" value="{{$usuario->num_user}}" placeholder="Número" min="0" max="99999" required>
            </label><br>

            <label class="label-input" for="">
            <input type="text" name="bairro_user" value="{{$usuario->bairro_user}}" placeholder="Bairro">
            </label><br>

            <label class="label-input" for="">
            <input type="number" name="cep_user" value="{{$usuario->cep_user}}" placeholder="CEP" maxlength="8">
            </label><br>

            <label class="label-input" for="">
            <select name="estado" value="{{$usuario->estado}}">
                    <option selected><b>Selecione o Estado</b></option>
                    <option>Acre (AC)</option>
                    <option>Alagoas (AL)</option>
                    <option>Amapá (AP)</option>
                    <option>Amazonas (AM)</option>
                    <option>Bahia (BH)</option>
                    <option>Ceará (CE)</option>
                    <option>Distrito Federal (DF)</option>
                    <option>Espirito Santo (ES)</option>
                    <option>Goiás (GO)</option>
                    <option>Maranhão (MA)</option>
                    <option>Mato Grosso (MT)</option>
                    <option>Mato Grosso do Sul (MS)</option>
                    <option>Minas Gerais (MG)</option>
                    <option>Pará (PA)</option>
                    <option>Paraíba (PB)</option>
                    <option>Paraná (PR)</option>
                    <option>Pernambuco (PE)</option>
                    <option>Piauí (PI)</option>
                    <option>Rio de Janeiro (RJ)</option>
                    <option>Rio Grande do Norte (RN)</option>
                    <option>Rio Grande do Sul (RS)</option>
                    <option>Rondônia (RO)</option>
                    <option>Santa Catarina (SC)</option>
                    <option>Acre (AC)</option>
                    <option>São Paulo (SP)</option>
                    <option>Sergipe (SE)</option>
                    <option>Tocantins (TO)</option>
                </select>
            </label><br>

            <label class="label-input" for="">
            <input type="text" name="cidade_user" value="{{$usuario->cidade_user}}" placeholder="Cidade" required>
            </label><br>

            <input type="submit" name="acao" value="Editar" class="btn btn-primary btn-sm">


        </form>
    </div>



</body>
</html>
