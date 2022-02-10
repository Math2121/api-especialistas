@extends('mail.app')

@section('content')
    <tr>
        <td class="content-block">
            <h3 class="mb-10">Recuperação de senha</h3>

            <p>Olá <b>{{ ucfirst($firstname) }}</b>, verificamos que você pediu uma recuperação de senha.</p>
            <p>Caso não tenha pedido, apenas desconsidere esse e-mail.</p>

            <p class="mb-0">
                <a href="{{ route('password.recover', ['token' => $token]) }}" style="
                padding: 6px 12px;
                font-weight: 700;
                background-color: rgb(255, 102, 0);
                border-color: rgb(255, 102, 0);
                color: #fff;
                line-height: 1.5;
                display: inline-block;
                border-radius: 20px;
              ">RECUPERAR SENHA
                </a>
            </p>
        </td>
    </tr>

@endsection
