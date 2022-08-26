<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/saque.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Saque</title>
</head>
<body>

    <div class="container">
        <section class="sec-saque mt-3">
            <h1>Faça aqui seu saque</h1> <br>

            <x-jet-validation-errors class="mb-4" />

            <form action="{{ route('saque-valor') }}" method="post">
                @csrf

                <div class="row mb-4">
                    <div class="col-lg-6 mb-1">
                        <label for="valor">VALOR DO SAQUE</label>
                        <input class="form-control" type="number" id="valor" name="valor" :value="old('valor')" autofocus required maxlength="100">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Sacar</button>
            </form>
        </section>
    </div>

</body>
</html>
