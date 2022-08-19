<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cadastrar.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Cadastrar</title>
</head>
<body style="background: #a3a3a3;">
    <div class="container">
        <section class="sec-cadastro">
            <h1>Faça aqui seu cadastro</h1> <br>

            <x-jet-validation-errors class="mb-4" />

            <form action="{{ route('register') }}" method="post">
                @csrf

                <div class="row mb-4">
                    <div class="col-lg-6 mb-1">
                        <label for="nome_razao">NOME OU RAZÃO SOCIAL</label>
                        <input class="form-control" type="text" id="nome_razao" name="name" :value="old('name')" autofocus required maxlength="100">
                    </div>

                    <div class="col-lg-6 mb-1">
                        <label for="cpf_cnpj">CPF OU CNPJ</label>
                        <input class="form-control"  type="text" id="cpf_cnpj" name="cpf_cnpj" :value="old('cpf_cnpj')" autofocus required maxlength="20">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-4 mb-1">
                        <label for="rg_inscSocial">RG/INSCRIÇÃO SOCIAL</label>
                        <input class="form-control" type="text" id="rg_inscSocial" name="rg_inscricao_social" :value="old('rg_inscricao_social')" autofocus required maxlength="100">
                    </div>

                    <div class="col-lg-4 mb-1">
                        <label for="rg_inscSocial">E-MAIL</label>
                        <input class="form-control" type="text" id="email" name="email" :value="old('email')" autofocus required maxlength="100">
                    </div>

                    <div class="col-lg-4 mb-1">
                        <label for="data_nasc_fundacao">DATA DE NASCIMENTO OU FUNDAÇÃO</label>
                        <input class="form-control" type="date" id="data_nasc_fundacao" name="data_nasc_fundacao" :value="old('data_nasc_fundacao')" autofocus required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-6 mb-1">
                        <label for="telefone">TELEFONE</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" :value="old('telefone')" autofocus required>
                    </div>

                    <div class="col-lg-6 mb-1">
                        <label for="cep">CEP</label>
                        <input class="form-control" type="text" id="cep" name="cep" :value="old('cep')" autofocus required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-6 mb-1">
                        <label for="cidade">CIDADE</label>
                        <input class="form-control" type="text" id="cidade" name="cidade" :value="old('cidade')" autofocus required>
                    </div>

                    <div class="col-lg-6 mb-1">
                        <label for="cep">BAIRRO</label>
                        <input class="form-control" type="cep" id="bairro" name="bairro" :value="old('bairro')" autofocus required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-5 mb-1">
                        <label for="cidade">RUA</label>
                        <input class="form-control" type="text" id="rua" name="rua" :value="old('rua')" autofocus required>
                    </div>

                    <div class="col-lg-2 mb-1">
                        <label for="numRua">NÚMERO DA RUA</label>
                        <input class="form-control" type="number" id="num_rua" name="num_rua" :value="old('num_rua')" autofocus >
                    </div>

                    <div class="col-lg-5 mb-1">
                        <label for="complemento">COMPLEMENTO</label>
                        <input class="form-control" type="text" id="complemento" name="complemento" :value="old('complemento')" autofocus>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-6 mb-1">
                        <label for="password">SENHA</label>
                        <input class="form-control" type="password" id="password" name="password" :value="old('password')" autofocus required>
                    </div>

                    <div class="col-lg-6 mb-1">
                        <label for="password_confirmation">REPITA A SENHA</label>
                        <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Já tenho uma conta') }}
                    </a>

                    <x-jet-button class="ml-4 btn btn-primary">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </form>
        </section>
    </div>

</body>
</html>
