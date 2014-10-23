
    {{--@extends('layouts.padrao');  SE NÃO INSTANCIAR NO METODO O LAYOUT ABILITAR ESSA TAG  # NESSE CASSO ESTÁ NO CONTROLLER HOME--}}
    @section('sidebar')


    @section('conteudo')
         <table>
         <tr>
            <td>Nome</td>
            <td>Descrição</td>
            <td>Preço</td>
          </tr>
             @foreach( $produtos as $produto)

             @include('elements.list_produtos')

                  {{--

                   <tr>
                        <td>{{ $produto->nome }} </td>
                        --  Foi realizado um tratamento no objeto para pegar os valores da tabela categoria que estão setados
                        <td>{{ isset($produto->categoria->nome) ? $produto->categoria->nome : '' }} </td>
                        <td>{{ $produto->valor }}</td>
                    </tr>
                     --}}
                     @endforeach
                     {{-- Sistema de mensagens no sistema, vale apena lembrar que aqui podemos personalizar nossas mensagens --}}
                        {{--@lang('validation.accepted')--}}
                  </table>
    @endsection
