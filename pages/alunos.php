<script type="text/javascript">
    $(document).ready(function(){
        $('.botao-perfil').click(function(){
            $('.janelaModal').css('opacity','1');
        });
        $('.fechar').click(function(){
            alert();
            $('.janelaModal').css('opacity','0');
            $('#opcoes-foto').hide();
        });
        
        
});
</script>

<div class="area-total-abas">
    <div class="lista-abas amimacao-flip">
        <input type="radio" name="lista-abas" checked id="aba-1" class="aba-1">
        <label for="aba-1"><span><span>Lista de alunos</span></span></label>
        <input type="radio" name="lista-abas" id="aba-2" class="aba-2">
        <label for="aba-2"><span><span>Adicionar aluno</span></span></label>
        <input type="radio" name="lista-abas" id="aba-3" class="aba-3">
        <label for="aba-3"><span><span>Perfil</span></span></label>

        <ul>
            <li class="aba-1">
                    <div class="conteudo">
                        <div class="lista">
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
                                <table id="tabela-alunos">
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
                                            <td><button class="botao-perfil">Visualizar</button></td>
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
                                            <td><button class="botao-perfil">Visualizar</button></td>
                                            <td>
                                                <button class="botao-editar">Editar</button>
                                                <button class="botao-excluir">Excluir</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                        </div>    
                    </div>
            </li>
            <li class="aba-2">
                    <div class="conteudo">
                            <h1>Adicionar novo aluno</h1>
                            
                            <form>
                                <label>Nome</label>
                                <input type="text">
                                <label>Sobrenome</label>
                                <input type="text">
                                <br/>
                                <label>Sexo</label>
                                <input type="text">
                                <input type="radio" name="sexo" id="sexo">
                                <label for="sexo"><span>Masculino</span></label>
                                <input type="radio" name="sexo" id="sexo">
                                <label for="sexo"><span>Feminino</span></label>
                                
                                <label>Data de nascimento</label>
                                <input type="date">
                                <br/>
                                <label>Rua</label>
                                <input type="text">
                                
                                <label>Número</label>
                                <input type="text">
                                <br/>
                                <label>Bairro</label>
                                <input type="text">
                                <br/>
                                <label>Cidade</label>
                                <input type="text">
                                
                            </form>
                    </div>
            </li>
            <li class="aba-3">
                <div id="perfil">
                    <container>
            <div id="titulo">Perfil de estudante </div>
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
            </li>
        </ul>
    </div>
</div>
<div class="clear"></div>

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


