<script type="text/javascript">
    $(document).ready(function(){
        $('.botao-alunos').click(function(){
            $('#alunos-por-turma').css('visibility','visible');
        });
        $('#fechar-janela').click(function(){
            $('#alunos-por-turma').css('visibility','hidden');
        });
        
        
});
</script>
<div id="abas">
    <div id="aba1">Lista turmas</div>
    <div id="aba2">Adicionar turma</div>

    <div id="lista">
        <section id="secao-superior">
            <select>
                <option>Todas</option>
                <option>Turma I</option>
                <option>Turma II</option>
                <option>Turma III</option>
            </select>

            <div id="total-turmas">
                Total de 5 turmas
            </div>
            <!--<div class="clear"></div>-->
        </section>
        <section id="secao-inferior">
            <table>
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Turma</td>
                        <td>Idade mínima</td>
                        <td>Idade máxima</td>
                        <td>Limite</td>
                        <td>Total</td>
                        <td>Status</td>
                        <td>Opções</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Classe I</td>
                        <td>1 ano</td>
                        <td>1 ano e 11 meses</td>
                        <td>25 alunos</td>
                        <td>22 alunos</td>
                        <td>Ativa</td>
                        <td>
                            <button class="botao-alunos">Alunos</button>
                            <button class="botao-editar">Editar</button>
                            <button class="botao-excluir">Excluir</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </section>
    </div>
    <div id="adicionar-aluno">
        teste
    </div>
</div>
<div class="clear"></div>

<div id="alunos-por-turma">
    <container>
        <div id="titulo">Alunos nesta turma<span title="Fechar" id="fechar-janela">X</span></div>
        <div id="lista-alunos">
            <table id="tabela-header">
                <thead>
                    <tr>
                        <td>Foto</td><td>Nome</td><td>Idade</td><td>Perfil</td>
                    </tr>
                </thead>
            </table>
            <div id="overflow-scroll">
                <table id="tabela-body">
                    <tbody>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                        <tr>
                            <td></td><td>Robson Flores</td><td>24</td><td><button>Visualizar</button></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        
    </div>
</container>
</div>
