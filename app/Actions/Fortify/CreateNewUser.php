<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        //dd($input);
        Validator::make($input, [
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cpf_cnpj' => ['required', 'string', 'max:14'],
            'rg_inscricao_social' => ['required', 'string', 'max:14'],
            'data_nasc_fundacao'  => ['required', 'string', 'max:21'],
            'telefone' => ['required', 'string', 'max:16'],
            'cep'      => ['required', 'string', 'max:11'],
            'cidade'   => ['required', 'string', 'max:200'],
            'bairro'   => ['required', 'string', 'max:200'],
            'rua'      => ['required', 'string', 'max:100'],
            'num_rua'  => ['required', 'string', 'max:5'],
            'complemento' => ['required', 'string', 'max:150'],
            'password'    => $this->passwordRules(),
            'terms'    => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create(array_merge([
            'name'     => $input['name'],
            'email'    => $input['email'],
            'cpf_cnpj' => $input['cpf_cnpj'],
            'rg_inscricao_social' => $input['rg_inscricao_social'],
            'data_nasc_fundacao'  => $input['data_nasc_fundacao'],
            'telefone' => $input['telefone'],
            'cep'      => $input['cep'],
            'cidade'   => $input['cidade'],
            'bairro'   => $input['bairro'],
            'rua'      => $input['rua'],
            'num_rua'  => $input['num_rua'],
            'complemento'   => $input['complemento']],
            [
                'num_conta' => rand(),
                'saldo'     => 0,
                'password'  => Hash::make($input['password'])
            ]
        ));
    }
}
