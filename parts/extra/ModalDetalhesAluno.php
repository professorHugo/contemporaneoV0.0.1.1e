<div class="modal fade" id="ModalDetalhesAluno<?php echo $resBuscarAluno['matricula_aluno'] ?>" tabindex="-1" role="dialog" aria-labelledby="ModalDetalhesAluno">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Aluno <?php echo $resBuscarAluno['nome_aluno'] ?></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="NomeDoAluno">Nome do Aluno: </label>
                        <input type="text" name="NomeDoAluno" id="NomeDoAluno" class="form-control" value="<?php echo $resBuscarAluno['nome_aluno'] ?>">
                    </div>
                    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="EscolaridadeAluno">Escolaridade do Aluno: </label>
                        <select name="EscolaridadeAluno" id="EscolaridadeAluno" class="form-control">
                            <option value="<?php echo $resBuscarAluno['escolaridade_aluno'] ?>">
                                <?php echo $resBuscarAluno['escolaridade_aluno'] ?>
                            </option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <label for="TelefoneAluno">Telefone do Aluno</label>
                        
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>