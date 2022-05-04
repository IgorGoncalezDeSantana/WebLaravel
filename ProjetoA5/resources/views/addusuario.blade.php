<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.css">
<body>

<div class="container">
    <div class="second-column">
        <h2 class="title title-second"><b>Criar Conta</b></h2>

        <form class="form" method="POST" action="{{route('usuario.salvar')}}">
            @csrf

            <h1 class="h3 mb-3 font-weight-normal">Dados</h1>
            <hr><br>
            <b>Nome</b>
            <label class="label-input" for="">
                <input type="text" name="name" placeholder="Nome"  maxlength="20">
            </label>
            <br>
            <b>Sobrenome</b>
            <label class="label-input" for="">
                <input type="text" name="sobr_user"  placeholder="Sobrenome" maxlength="50">
            </label>
            <br>
            <b>CPF</b>
            <label class="label-input" for="">
                <input type="number" name="cpf_user"  placeholder="CPF" maxlength="11" required>
            </label><br>
            <b>Email</b>
            <label class="label-input" for="">
                <input type="email" name="email"  placeholder="E-mail" maxlength="50" required>
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
                <input type="date" name="data_user" >
            </label>

            <hr>
            <b>Endereço do Usuário</b>
            <br>

            <label class="label-input" for="">
                <input type="text" name="end_user"  placeholder="Endereço" required>
            </label><br>

            <label class="label-input" for="">
                <input type="number" name="num_user"  placeholder="Número" min="0" max="99999" required>
            </label><br>

            <label class="label-input" for="">
                <input type="text" name="bairro_user"  placeholder="Bairro">
            </label><br>

            <label class="label-input" for="">
                <input type="number" name="cep_user" placeholder="CEP" maxlength="8">
            </label><br>

            <label class="label-input" for="">
                <select name="estado" >
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
                <input type="text" name="cidade_user" placeholder="Cidade" required>
            </label><br>

            <input type="submit" name="acao" value="Cadastrar" class="btn btn-primary btn-sm">


        </form>
    </div>
</div>

</body>
</html>
