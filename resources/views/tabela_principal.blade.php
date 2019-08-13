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
            <tbody id="tbodyid">
                
            </tbody>
        </table>
    
    </div>
</div>

<!-- Modal -->

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLongTitle">Informações do Cliente</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span> 
                </button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf    
                    <input type="hidden" id="id" readonly>
                    <div class="input-group">
                        <span class="input-group-addon"><strong>Nome: </strong></span>
                        <input type="text" class="form-control" id="nome" name="nome" aria-describedby="basic-addon1">
                    </div><br/>
                    
                    <div class="input-group">
                        <span class="input-group-addon"><strong>Tel: </strong></span>
                        <input type="text" class="form-control" id="tel" name="tel" aria-describedby="basic-addon1">
                        
                        <span class="input-group-addon"><strong>Vendedor: </strong></span>
                        <input type="text" class="form-control" id="vendedor" name="vendendor" aria-describedby="basic-addon1">
                    </div><br/>

                    <div class="input-group">
                        <span class="input-group-addon"><strong>Cidade: </strong></span>
                        <input type="text" class="form-control" id="cidade" name="cidade" aria-describedby="basic-addon1">
                    
                        <span class="input-group-addon"><strong>Compania: </strong></span>
                        <input type="text" class="form-control" id="compania" name="compania" aria-describedby="basic-addon1">
                        
                    </div><br/>

                    <div class="input-group">
                        <span class="input-group-addon"><strong>Last call: </strong></span>
                        <input type="date" class="form-control" id="last_call" name="last_call" aria-describedby="basic-addon1">
                    </div><br/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="editar()">Editar</button>
            </div>
        </div>
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
            if (p.vendedor == null){ p.vendedor = '~'}
            if (p.cidade == null){ p.cidade = '~'}
            if (p.compania == null){ p.compania = '~'}
            
            var row = "<tr>" +
                "<td>"+ p.nome +"</td>"+
                "<td>"+ p.tel +"</td>"+
                "<td>"+ p.vendedor +"</td>"+
                "<td>"+ p.cidade +"</td>"+
                "<td>"+ p.compania +"</td>"+
                "<td> <button type='button' class='btn btn-primary btn-sm' data-toggle='modal' onclick='montarModal("+p.id+")'> verificar </button> </td>"+
            "</tr>"
            return row
        }
        function montarModal(id){
            $.getJSON('/api/tabela_principal/'+id, function(data){
                $('#id').val(data.id);
                $('#nome').val(data.nome);
                $('#tel').val(data.tel)
                $('#vendedor').val(data.vendedor)
                $('#cidade').val(data.cidade)
                $('#compania').val(data.compania)
                $('#last_call').val(data.last_call)
                $('#modal').modal('show')
            });
        }

        function carregarClientes(){
            $.getJSON('/api/tabela_principal', function(data){
                for(i=0;i<data.length;i++){
                    linha = montarLinha(data[i]);
                    $('#tp>tbody').append(linha);
                }
            });
        }

        function editar(){
            cliente = {
                id : $("#id").val(),
                nome : $("#nome").val(),
                tel: $("#tel").val(),
                vendedor: $("#vendedor").val(),
                cidade: $("#cidade").val(),
                compania:$("#compania").val(),
                last_call: $("#last_call").val()
            };
            $.ajax({
                type: "PUT",
                data: cliente,
                url: "/api/tabela_principal/"+ cliente.id,
                context: this,
                success: function(data){
                    new_data = JSON.parse(data);
                    $("#tbodyid").empty();
                    carregarClientes();
                    console.log('Editou')
                },
                error: function(error){
                    console.log(error);
                }
            });
        }

        $(function(){
            carregarClientes();
        })


    </script>
@endsection