<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/saque.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Transferência</title>
</head>
<body>

    <div class="container">
        <section class="sec-saque mt-3">
            <h1>Faça aqui sua transferência</h1> <br>

            <x-jet-validation-errors class="mb-4" />

            <form action="{{ route('transferir-valor') }}" method="post">
                @csrf

                <div class="row mb-4">
                    <div class="col-lg-6 mb-1">
                        <label for="valor">VALOR DA TRANSFERÊNCIA</label>
                        <input class="form-control" type="number" id="valor_transferencia" name="valor_transferencia" :value="old('valor_transferencia')" autofocus required maxlength="10">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-6 mb-1">
                        <label for="numDest">INFORME O NÚMERO DA CONTA DESTINATÁRIA</label>
                        <input class="form-control" type="number" id="num_conta_dest" name="num_conta_dest" :value="old('num_conta_dest')" autofocus required maxlength="10">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-6 mb-1">
                        <label for="valor">INFORME O NOME DO DESTINATÁRIO</label>
                        <input class="form-control" type="text" id="nome_destinatario" name="nome_destinatario" :value="old('nome_destinatario')" autofocus required maxlength="100">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Transferir</button>
            </form>
        </section>
    </div>

</body>
</html>
