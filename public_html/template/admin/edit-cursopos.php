<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Faculdade Ipanema</title>
<link href="css/template.css" rel="stylesheet" type="text/css" />
<link href="menu/css/superfish.css" rel="stylesheet" type="text/css" media="screen" />
<link href="menu/css/style.css" rel="stylesheet" type="text/css" />
<link id="textContentCss" href="menu/css/menu-text-01-Default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="fancy/css/jquery.fancybox.css" media="screen" />
<link href="css/tabela.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" />

   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="fancy/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="fancy/js/control.js"></script>

<script src="menu/js/superfish.js" type="text/javascript"></script>
<script src="menu/js/scriptsInit.js" type="text/javascript"></script>
        
        

</head>

<body>
<div id="header">
<div id="topo">
  <h1>Faculdade Ipanema</h1>
</div>

<div id="menu">

 <ul class="sf-menu">
         <li><a href="principal.php">PRINCIPAL</a></li>

           
         <li>
           <a href="#">BANNER</a>
            <ul>
              <li><a href="banner.php">Ver banners</a></li>
              <li><a href="cad-banner.php">Novo banner</a></li>
            </ul>
      </li>
      
      <li>
           <a href="#">CURSOS</a>
            <ul>
              <li><a href="graduacao.php">Graduação</a></li>
              <li><a href="pos-graduacao.php">Pós-Graduação</a></li>
            </ul>
      </li>
      
      <li>
           <a href="#">VESTIBULAR</a>
            <ul>
              <li><a href="vestibular.php">Gerenciar vestibular</a></li>
              <li><a href="processo.php">Processo Seletivo</a></li>
           </ul>
      </li>
         
         <li>
            <a href="#">GALERIA</a>
            <ul>
               <li><a href="albuns.php">Ver álbuns</a></li>
               <li><a href="cad-album.php">Novo álbum</a></li>
            </ul>
         </li>
         
         <li>
            <a href="#">VÍDEOS</a>
            <ul>
               <li><a href="videos.php">Ver vídeos</a></li>
               <li><a href="cad-video.php">Novo vídeo</a></li>
            </ul>
         </li>
         
         <li>
            <a href="#">NOTÍCIAS</a>
            <ul>
               <li><a href="noticias.php">Ver notícias</a></li>
               <li><a href="cad-noticia.php">Nova notícia</a></li>
            </ul>
         </li>
         
       
         <li>
            <a href="#">CONFIGURAÇÃO</a>
            <ul>
               <li><a href="troca-senha.php">Alterar senha</a></li>
            </ul>
         </li>
         <li><a href="#">SAIR</a></li>
  </ul> 


  </div>
</div>
<div id="container2">
  <div id="title">Editar Curso P&oacute;s-Gradua&ccedil;&atilde;o</div>
  <div id="formulario">
    <br />
    <form id="form1" name="form1" method="post" action="">
    <table width="1005" border="0">
      <tr>
        <td height="30" colspan="3" valign="bottom"><span class="label">Nome do curso</span></td>
      </tr>
      <tr>
        <td colspan="3"><label for="titulo"></label><input name="titulo" type="text" class="input" id="titulo" value="MBA em Redes Sociais e Inova&ccedil;&atilde;o Digital" /></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">Objetivos</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom"><label for="texto"></label>
          <textarea name="texto" cols="45" rows="5" class="area2" id="texto">• Promover a compreensão do fenômeno das redes sociais e seu papel na comunicação, garantindo assim elementos que auxiliem aos profissionais a avaliar, planejar e desenvolver ações utilizando-as;
• Possibilitar o acesso a novos conceitos e procedimentos voltados à inovação digital, por meio da troca de experiências e convívio com profissionais altamente qualificados;
• Promover um ambiente de análise e reflexão crítica sobre práticas e estratégias utilizadas, incentivando o desenvolvimento de soluções criativas e resultados de sucesso;
• Oportunizar a ampliação de conhecimentos para o desenvolvimento e melhoria de procedimentos no trabalho cotidiano, por meio da pesquisa e do trabalho em equipe. </textarea></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">&Aacute;rea de atua&ccedil;&atilde;o</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom"><label for="area"></label>
          <textarea name="area" cols="45" rows="5" class="area2" id="area">Empresas e instituições públicas e privadas. </textarea></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">P&uacute;blico alvo</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom"><label for="texto3"></label>
          <textarea name="publico" cols="45" rows="5" class="area2" id="texto3">Profissionais graduados que atuam ou queiram atuar na área de marketing, publicidade e relações públicas, particularmente ocupando postos de liderança. Profissionais que atuam ou queiram atuar nas áreas de planejamento e inovação tecnológica em empresas e instituições públicas e privadas. Profissionais interessados em conhecer e desenvolver projetos e produtos neste segmento. </textarea></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">Metodologia</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom"><label for="texto6"></label>
          <textarea name="metodologia" cols="45" rows="5" class="area2" id="texto6">Trata-se de um curso presencial, cuja fundamentação está baseada numa visão interdisciplinar do processo de construção de conhecimento. A abordagem dos conteúdos terá como diretriz a estreita correlação teoria-prática, tendo como princípio a reflexão sobre práticas.

Também fará parte do curso a oferta de oportunidades para que os participantes possam estar aprofundando seus estudos por meio da pesquisa, outro princípio norteador do curso. A carga horária de cada componente curricular está constituída por uma parte volta ao estudo dos conteúdos próprios da área ou temas a serem desenvolvidos, bem como uma parte destinada a atividades de pesquisa e investigação da prática docente.

Ao longo do curso também haverá momentos específicos de orientação para a elaboração e desenvolvimento de projeto de pesquisa que resultará em Trabalho de Conclusão de Curso. </textarea></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">Avalia&ccedil;&atilde;o</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom"><label for="texto4"></label>
          <textarea name="avaliacao" cols="45" rows="5" class="area2" id="texto4">Será considerado aprovado no curso os alunos que tiverem freqüência igual ou superior a 75% do curso, de acordo com o que prevê Resolução CNE/CES nº 1 de 8/6/2007; realizar de forma satisfatória as atividades e tarefas exigidas em cada componente curricular; elaborar e desenvolver projeto de pesquisa sobre tema próprio à área de Redes Sociais e Inovação Digital; elaborar Trabalho de Conclusão de Curso, de acordo com as regras e padrões estabelecidos no curso.</textarea></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom">&nbsp;</td>
      </tr>
      <tr>
        <td width="476" height="30" class="label">Componentes Curriculares</td>
        <td width="159" class="label">&nbsp;</td>
        <td width="265" class="label">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><label for="comp"></label>
          <input name="comp" type="text" class="input" id="comp" value="Redes Sociais" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp2" type="text" class="input" id="comp2" value="Mundo Digital e Web 2.0" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp3" type="text" class="input" id="comp3" value="Inova&ccedil;&atilde;o Digital, Criatividade Coletiva e Colabora&ccedil;&atilde;o" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp4" type="text" class="input" id="comp4" value="Tend&ecirc;ncias, Perspectivas e Futuro" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp5" type="text" class="input" id="comp5" value="Experi&ecirc;ncia Digital e Usabilidade" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp6" type="text" class="input" id="comp6" value="Mensura&ccedil;&atilde;o de Resultados em Meios Digitais" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp7" type="text" class="input" id="comp7" value="Marketing Digital, Gamification e Mobile Marketing" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp9" type="text" class="input" id="comp9" value="Metodologia do Trabalho Cient&iacute;fico" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp8" type="text" class="input" id="comp8" value="Empreendedorismo e Novos Neg&oacute;cios" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp10" value="Planejamento Estrat&eacute;gico" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp11" type="text" class="input" id="comp11" value="Gerenciamento de Projetos" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp12" type="text" class="input" id="comp12" value="Finan&ccedil;as Corporativas e Contabilidade Gerencial" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp13" type="text" class="input" id="comp13" value="Tecnologia da Informa&ccedil;&atilde;o" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp14" type="text" class="input" id="comp14" value="Lideran&ccedil;a, Gest&atilde;o de Pessoas e Alto Desempenho" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp15" type="text" class="input" id="comp15" value="Gest&atilde;o Estrat&eacute;gica da Inova&ccedil;&atilde;o" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp16" type="text" class="input" id="comp16" value="&Eacute;tica, Responsabilidade Social e Sustentabilidade" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp17" type="text" class="input" id="comp17" value="Trabalho final &ndash; TCC" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp18" type="text" class="input" id="comp18" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp19" type="text" class="input" id="comp19" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="right" class="label">&nbsp;</td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><span class="label">Total carga hor&aacute;ria</span></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><label for="carga"></label>
          <input name="carga" type="text" class="input2" id="carga" value="432 h/a" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="45" colspan="3"><input name="cadastrar" type="submit" class="bt" id="cadastrar" value="Atualizar" /></td>
      </tr>
    </table>
    <br />
    </form>  
  
    
</div>
</div>
<div id="footer">Desenvolvido por Aplus Tecnologia - (31) 3245-5764</div>
</body>
</html>