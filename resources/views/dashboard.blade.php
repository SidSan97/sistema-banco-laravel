<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!--h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2-->
    </x-slot>

    <div class="container">
        <section class="painel-dash mt-4">
            <div class="row d-flex justify-content-center mb-3">
                <div class="col-lg-4">
                    <div class="bloco bg-danger">
                        <a href="http://">
                            <img src="{{ asset('img/money-withdrawal.png') }}" alt="" srcset=""> <br>
                            <span>Sacar</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bloco bg-success">
                        <a href="http://">
                            <img src="{{ asset('img/piggy-bank.png') }}" alt="" srcset=""> <br>
                            <span>Depositar</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center mb-3">
                <div class="col-lg-4">
                    <div class="bloco bg-danger">
                        <a href="http://">
                            <img src="{{ asset('img/bank-transfer.png') }}" alt="" srcset=""> <br>
                            <span>Transferir</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="bloco bg-success">
                        <a href="http://">
                            <img src="{{ asset('img/list.png') }}" alt="" srcset=""> <br>
                            <span>Extrato</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-app-layout>
