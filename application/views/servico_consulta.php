<header class="page-header">
	<h2>Consulta de Serviço</h2>
</header>


<div class="panel panel-default">
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-12">
				<div>
					<a href="{NOVO_SERVICO}" class="btn btn-primary {dis_incluir}"><i class="glyphicon glyphicon-plus"></i> Novo Servico</a>
					<div class="pull-right">
						<a onclick="abrirDialogRelatorio()" class="btn btn-primary {dis_imprimir}"><i class="glyphicon glyphicon-print"></i> Imprimir</a>
					</div>
				</div>
				</br>
				<div class="table">
					<table
						class="table table-striped table-bordered table-hover table-condensed" id="tb_servico">
						<thead>
							<tr>
								<th>Descrição</th>
								<th class="coluna-acao" width="80"></th>
								<th class="coluna-acao" width="80"></th>
							</tr>
						</thead>
						<tbody>
							{BLC_DADOS}
							<tr>
								<td class="vertical-center">{hel_desc_ser}</td>
								<td class="text-center"><a href="{EDITAR_SERVICO}" class="btn btn-link btn-xs {dis_alterar}" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a></td>
								<td class="text-center"><a onclick="{APAGAR_SERVICO}" class="btn btn-link btn-xs {dis_excluir}" title="Apagar"><i class="glyphicon glyphicon-trash"></i></a></td>
							</tr>
							{/BLC_DADOS}
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span>
				</button>
				<h3 class="modal-title" id="myModalLabel">Info Rio Sistemas</h3>
			</div>
			<div class="modal-body">
				<h4>Deseja realmente apagar este serviço ?</h4>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="apagar()">Sim</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="relatorio_servico" tabindex="-1" role="dialog" aria-labelledby="relatorio_servico_label" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                    <h3 class="modal-title" id="relatorio_cidade_label">Relatório - Serviço</h3>
                </div>
                <div class="modal-body">
                	<form class="form-horizontal">
						<div class="form-group">
							<label for="ordenacao_relatorio" class="col-sm-2 ">Ordenar por</label>
								<div class="col-sm-4">
									<div class="radio-inline">
										<label>
											<input type="radio" id="ordenacao_codigo" name="ordenacao_relatorio" value="0" checked/>Código
										</label>
									</div>
									<div class="radio-inline">
										<label>
											<input type="radio" id="ordenacao_nome" name="ordenacao_relatorio" value="1"/>Nome
										</label>
									</div>
								</div>
						</div>
					</form>
					<br/>					
					<div class="form-group">
						<center>
							<button onclick="visualizarRelatorio()" name="salvar_usuario" class="btn btn-primary" > <i class="glyphicon glyphicon-print"></i> Visualizar</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						</center>	
					</div>	
                </div>
        	</div>
    	</div>
</div>


<script type="text/javascript">

	var idExclusao = "";
	
    function abrirConfirmacao(id){
        idExclusao = id;
        $('#myModal').modal('show');
    }

    function apagar(){
        $('#myModal').modal('hide');
        location.href = 'servico/apagar/' + idExclusao;
    }

    function abrirDialogRelatorio(){
        $('#relatorio_servico').modal('show');
    }

    function visualizarRelatorio() {
      	var orderBy = "";

    	if (document.getElementById('ordenacao_codigo').checked) {
    		orderBy = " ORDER BY hel_pk_seq_ser";
    	} else {
    		orderBy = " ORDER BY hel_desc_ser";
		}
    	
    	$('#relatorio_servico').modal('hide');
    	
    	window.open('servico/relatorio/'+ orderBy, '_blank');
    }	
    
</script>