@extends('mail.app')

@section('content')
    <tr>
        <td class="content-block">
            <h3 class="mb-10">Confirmação de cadastro</h3>

            <p>Olá <b>{{ $user->firstname }}</b>, confirme seu cadastro clicando no botão abaixo.</p>
            <p>Caso não tenha se cadastrado em nosso sistema, apenas desconsidere esse e-mail.</p>

            <p class="mb-0">
                <a href="{{ route('register.auth.verification', $token) }}" style="
                        padding: 6px 12px;
                        font-weight: 700;
                        background-color: rgb(255, 102, 0);
                        border-color: rgb(255, 102, 0);
                        color: #fff;
                        line-height: 1.5;
                        display: inline-block;
                        border-radius: 20px;
                      ">CONFIRMAR CADASTRO
                </a>
            </p>
        </td>
    </tr>

@endsection
