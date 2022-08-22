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
        <section class="sec-saque">
            <h1>Faça aqui seu saque</h1> <br>

            <x-jet-validation-errors class="mb-4" />

            <form action="" method="post">
                @csrf

                <div class="row mb-4">
                    <div class="col-lg-6 mb-1">
                        <label for="valor">NOME OU RAZÃO SOCIAL</label>
                        <input class="form-control" type="number" id="valor" name="valor" :value="old('valor')" autofocus required maxlength="100">
                    </div>
                </div>
            </form>
        </section>
    </div>

</body>
</html>
