<header class="page-header">
	<h2>Consulta dos Itens da Ordem de Serviço nº {hel_seqose_ios}</h2>
</header>


<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <a href="{NOVO_ITEM_ORDEM_SERVICO}" class="btn btn-primary {hel_disabled_ios}"><i class="glyphicon glyphicon-plus"></i> Novo Item</a>
                </div>
                </br>
                <div class="table">
                    <table class="table table-striped table-bordered table-hover table-condensed" id="tb_item_ordem_servico">
						<thead>
                            <tr>
                                <th>Serviço</th>    
                                <th>Chamado</th>
                                <th>Sistema</th>
                                <th class="coluna-acao" width="80"></th>
                                <th class="coluna-acao" width="80"></th>
                            </tr>
                        </thead> 
                        <tbody>
                        	{BLC_DADOS}
	                            <tr>
	                                <td class="vertical-center">{hel_desc_ser}</td>	    
	                                <td class="vertical-center">{hel_seqcha_ios}</td>
	                                <td class="vertical-center">{hel_desc_sis}</td>
	                                <td class="text-center"><a href="{EDITAR_ITEM_ORDEM_SERVICO}" class="btn btn-link btn-xs {hel_disabled_ios}" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a></td>
	                                <td class="text-center"><a onclick="{APAGAR_ITEM_ORDEM_SERVICO}" class="btn btn-link btn-xs {hel_disabled_ios}" title="Apagar"><i class="glyphicon glyphicon-trash"></i></a></td>
	                            </tr>
                        	{/BLC_DADOS}
                        </tbody>                   
                    </table>
                </div>
            </div>
        </div>
            <div class="text-right">
            <a href="{VOLTAR_ORDEM_SERVICO}" class="btn btn-info"><i class="glyphicon glyphicon-chevron-left"></i> Voltar Ordem Serviço</a>
            <a onclick="abrirDialogRelatorio()" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> Imprimir</a>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                    <h3 class="modal-title" id="myModalLabel">Info Rio Sistemas</h3>
                </div>
                <div class="modal-body">
                    <h4>Deseja realmente apagar este item da ordem de serviço ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="apagar()">Sim</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModalFinalizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                    <h3 class="modal-title" id="myModalLabel">Info Rio Sistemas</h3>
                </div>
                <div class="modal-body">
                    <h4>Imprimir a ordem de serviço ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary col-md-8" onclick="imprimirOrdemServico()">Sim</button>
                    <button type="button" class="btn btn-default col-md-3" data-dismiss="modal">Não</button>
                </div>
        </div>
    </div>
</div>
<script type="text/javascript">

	var idExclusao 		= "";
	var idOrdemServico 	= "";	

    function abrirConfirmacao(id, idos){
        idExclusao 		= id;
        idOrdemServico 	= idos;
        $('#myModal').modal('show');
    }

    function apagar(){
        $('#myModal').modal('hide');
        location.href = '{URL_APAGAR}/' + idExclusao + '/' + idOrdemServico;
    }

    function abrirDialogRelatorio(){
     $('#myModalFinalizar').modal('show');
    }

    function imprimirOrdemServico(){
        window.open('{URL_RELATORIO}/'+ {hel_seqose_ios} +'/0/0', '_blank');
        location.href = '{VOLTAR_ORDEM_SERVICO}'; 
        $('#myModalFinalizar').modal('hide');
    }
</script>