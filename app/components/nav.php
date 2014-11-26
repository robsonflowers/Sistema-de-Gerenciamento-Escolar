<script>
    $(document).ready(function(){
        var $tamJanela;
        if($(window).width()<900){
            $("#menu-principal").hide();
            $("#botao-menu-principal").show();
        }
        if($(window).width()>899){
            $("#botao-menu-principal").hide();
        }
        $(window).resize(function(){
            $tamJanela = $(window).width();
            if($tamJanela<900){
                $("#menu-principal").slideUp(300);
                $("#botao-menu-principal").slideDown();
                
                $("main").find("#conteudo-pagina").animate({
                    marginLeft: 0
                },50);

            }
            else{
                $("#menu-principal").slideDown(600);
                $("#botao-menu-principal").slideUp();
                
                $("main").find("#conteudo-pagina").animate({
                    marginLeft: 250
                },50);
//                $("main").css("margin-left","190px");
            }
            
        });
        $("#botao-menu-principal").click(function(){
            $("#menu-principal").slideToggle(300);
            
        });
        
        
        
        
    });
</script>
<aside id="menu-principal">
    <nav>
        <ul>
            <li><a href="?page=home"><span>Home</span></a></li>
            <li><a href="?page=alunos"><span>Alunos</span></a></li>
            <li><a href="?page=turmas"><span>Turmas</span></a></li>
            <li><a href="?page=colaboradores"><span>Colaboradores</span></a></li>
            <li><a href="?page=usuarios-do-sistema"><span>Usuários do sistema</span></a></li>
            <li><a href="?page=financeiro"><span>Financeiro</span></a></li>
            <li><a href="?page=mensagens-aos-pais"><span>Mensagens aos pais</span></a></li>
            <li><a href=""><span>Sistema</span></a></li>
        </ul>
    </nav>
    
</aside>
<div id="botao-menu-principal">Menu</div>