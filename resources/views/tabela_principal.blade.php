@extends('layouts.app', ["current" => "tabela_principal"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-hover table-striped" id="tp">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Numero</th>
                    <th>Vendedor</th>
                    <th>Cidade</th>
                    <th>Compania</th>
                    <th>ação</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript">
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
        })

        function montarLinha(p){
            var row = "<tr>" +
                "<td>"+ p.nome +"</td>"+
                "<td>"+ p.tel +"</td>"+
                "<td>"+ p.vendedor +"</td>"+
                "<td>"+ p.cidade +"</td>"+
                "<td>"+ p.compania +"</td>"+
                "<td> <button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#modal"+p.id+"'> verificar </button> </td>"
            "</tr>"
            return row
        }
        function montarModal(p){
            var modal = "<div class='modal fade' id='modal"+p.id+"' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>"+
                    "<div class='modal-dialog' role='document'>"+
                        "<div class='modal-content'>"+
                        "<div class='modal-header'>"+
                            "<h2 class='modal-title' id='exampleModalLongTitle'>"+p.nome+"</h2>"+
                            "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>"+
                                "<span aria-hidden='true'>&times;</span>" +
                            "</button>"+
                        "</div>"+
                        "<div class='modal-body'>"+
                            "..."+
                        "</div>"+
                        "<div class='modal-footer'>"+
                            "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>"+
                            "<button type='button' class='btn btn-primary'>Save changes</button>"+
                        "</div>"+
                        "</div>"+
                    "</div>"+
                "</div>"
            return modal
        }

        function carregarClientes(){
            $.getJSON('/api/tabela_principal', function(data){
                for(i=0;i<data.length;i++){
                    linha = montarLinha(data[i]);
                    modal = montarModal(data[i]);
                    $('#tp>tbody').append(linha);
                    $('#tp>tbody').append(modal);
                }
            });
        }

        $(function(){
            carregarClientes();

        })


    </script>
@endsection