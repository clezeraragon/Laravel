                  <tr>
                        <td>{{ $produto->nome }} </td>
                       {{--  Foi realizado um tratamento no objeto para pegar os valores da tabela categoria que estão setados --}}
                        <td>{{ isset($produto->categoria->nome) ? $produto->categoria->nome : '' }} </td>
                        <td>{{ $produto->valor }}</td>
                  </tr>
