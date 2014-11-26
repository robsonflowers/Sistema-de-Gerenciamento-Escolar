<script type="text/javascript">
    $(document).ready(function(){
        
        $('#botao-perfil').click(function(){
            $('#perfil').css('visibility','visible');
        });
        $('#fechar-janela').click(function(){
            $('#perfil').css('visibility','hidden');
            $('#opcoes-foto').hide();
        });
        $('#aba2').click(function(){
            $('#lista').css('visibility','hidden');
            $('#adicionar-aluno').css('visibility','visible');
        });
        $('#aba1').click(function(){
            $('#lista').css('visibility','visible');
            $('#adicionar-aluno').css('visibility','hidden');
        });
        
});
</script>
<div id="abas">
    <div id="aba1">Lista de alunos</div>
    <div id="aba2">Adicionar aluno</div>

    <div id="lista">
        <section id="secao-superior">
            <select>
                <option>Todos</option>
                <option>Turma I</option>
                <option>Turma II</option>
                <option>Turma III</option>
            </select>

            <div id="total-alunos">
                Total de 12 alunos
            </div>
            <div class="clear"></div>
        </section>
        <section id="secao-inferior">
            <table>
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Foto</td>
                        <td>Nome do aluno</td>
                        <td>Endereço</td>
                        <td>Nome do responsável</td>
                        <td>Perfil</td>
                        <td>Opções</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img class="foto" src="temp/users/alunos/aluno-1.PNG" alt=""/></td>
                        <td>Robson Flores</td>
                        <td>Av Bento Gonçalves, 1380</td>
                        <td>Robson Flores</td>
                        <td><button id="botao-perfil">Visualizar</button></td>
                        <td>
                            <button class="botao-editar">Editar</button>
                            <button class="botao-excluir">Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img class="foto" src="temp/users/alunos/aluno-2.PNG" alt=""/></td>
                        <td>Robson Flores</td>
                        <td>Av Bento Gonçalves, 1380</td>
                        <td>Robson Flores</td>
                        <td>visualizar</td>
                        <td>
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


<div id="mascara"></div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#opcoes-foto').hide();
        $('#foto-aluno').click(function(){
            var $this = $(this);
            $this.parent().find('#opcoes-foto').css('visibility','visible');
            $this.parent().find('#opcoes-foto').slideToggle();
        });
        
    });
</script>
<div id="perfil">
    <container>
        <div id="titulo">Perfil de estudante <span title="Fechar" id="fechar-janela">X</span></div>
        <div id="container-foto">
            <div id="foto-aluno"><img src="temp/users/alunos/aluno-1.PNG" alt=""/></div>
            <div id="opcoes-foto">
                <nav>
                    <ul>
                        <li><a href=""><span>Alterar foto</span></a></li>
                        <li><a href=""><span>Excluir foto</span></a></li>
                    </ul>
                </nav>
            </div>
            <!--<div class="clear"></div>-->
        </div>
        <div id="dados-aluno">
            <div id="nome-aluno">Robson Flores</div>
            <table>
                <tr>
                    <td>Turma</td>
                    <td>II</td>
                </tr>
                <tr>
                    <td>Data de nascimento</td>
                    <td>16 nov 1990</td>
                </tr>
                <tr>
                    <td>Sexo</td>
                    <td>Masculino</td>
                </tr>
                <tr>
                    <td>Nome da mãe</td>
                    <td>Marilea Flores</td>
                </tr>
                <tr>
                    <td>Nome da pai</td>
                    <td>Clovis Flores</td>
                </tr>
                <tr>
                    <td>Nome do responsável</td>
                    <td>Marilea Flores</td>
                </tr>
                <tr>
                    <td>Endereço</td>
                    <td>Av Bento Gonçalves, 1300</td>
                </tr>
                <tr>
                    <td>Telefone residencial</td>
                    <td>(51) 2126-0000</td>
                </tr>
                <tr>
                    <td>Celular</td>
                    <td>(51) 9999-1111</td>
                </tr>
                <tr>
                    <td>Observações</td>
                    <td><textarea>Rinite alérgica</textarea></td>
                </tr>
            </table>
        <button>Editar</button>
        <button>Excluir</button>
    </div>
</container>
</div>
