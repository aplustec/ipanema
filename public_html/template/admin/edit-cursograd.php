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
  <div id="title">Editar Curso Gradua&ccedil;&atilde;o</div>
  <div id="formulario">
    <br />
    <form id="form1" name="form1" method="post" action="">
    <table width="1005" border="0">
      <tr>
        <td height="30" colspan="3" valign="bottom"><span class="label">Nome do curso</span></td>
      </tr>
      <tr>
        <td colspan="3"><label for="titulo"></label><input name="titulo" type="text" class="input" id="titulo" value="Gest&atilde;o Financeira" /></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">Descri&ccedil;&atilde;o do curso</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom"><label for="texto"></label>
          <textarea name="texto" cols="45" rows="5" class="area2" id="texto">O curso de Gestão Financeira tem como objetivo formar profissionais capazes de analisar os movimentos do mercado financeiro e de tomar decisões que potencializem o desempenho da empresa.

O profissional formado pela Faculdade Ipanema poderá atuar na área financeira, controladoria e auditoria de empresas, bancos, corretoras de valores, instituições de crédito, organizações do Terceiro Setor ou abrir o seu próprio negócio.

Seu dia a dia será envolvido por produção e análise de demonstrativos contábeis e relatórios financeiros, e de indicadores presentes nestes relatórios. </textarea></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom"><span class="label">M&Eacute;DIA DE REMUNERA&Ccedil;&Atilde;O PARA PROFISSIONAL REC&Eacute;M-FORMADO</span></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">Empresa de grande porte</td>
      </tr>
      <tr>
        <td colspan="3"><label for="grande-porte"></label>
          <input name="grande-porte" type="text" class="input2" id="grande-porte" value="R$ 3.000,00 " /></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">Empresa de pequeno porte</td>
      </tr>
      <tr>
        <td colspan="3"><label for="pequeno-porte"></label>
          <input name="pequeno-porte" type="text" class="input2" id="pequeno-porte" value="R$ 2.000,00 " /></td>
      </tr>
      <tr>
        <td height="30" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">Per&iacute;odo</td>
      </tr>
      <tr>
        <td height="30" colspan="3"><label for="periodo"></label>
          <input name="periodo" type="text" class="input2" id="periodo" value="Manh&atilde; e Noite" /></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">Dura&ccedil;&atilde;o do curso</td>
      </tr>
      <tr>
        <td height="30" colspan="3"><label for="duracao"></label>
          <input name="duracao" type="text" class="input2" id="duracao" value="4 semestres " /></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">Vagas</td>
      </tr>
      <tr>
        <td height="30" colspan="3"><label for="vagas"></label>
          <input name="vagas" type="text" class="input2" id="vagas" value="100 " /></td>
      </tr>
      <tr>
        <td height="30" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="45" colspan="3" class="label">GRADE CURRICULAR</td>
      </tr>
      <tr>
        <td height="30" colspan="3" class="label">M&oacute;dulo I</td>
      </tr>
      <tr>
        <td height="30" colspan="3" class="label">Nome</td>
      </tr>
      <tr>
        <td height="30" colspan="3"><label for="nomemod"></label>
          <input name="nomemod" type="text" class="input" id="nomemod" value="Empresa Moderna e Desenvolvimento Profissional" /></td>
      </tr>
      <tr>
        <td width="476" height="30" class="label">Componentes</td>
        <td width="159" class="label">Carga Hor. Semanal</td>
        <td width="265" class="label">Carga Hor Semestral</td>
      </tr>
      <tr>
        <td height="30"><label for="comp"></label>
          <input name="comp" type="text" class="input" id="comp" value="Gest&atilde;o da Empresa Moderna" /></td>
        <td height="30"><label for="cargasn"></label>
          <input name="cargasn" type="text" class="input2" id="cargasn" value="4 h/a" /></td>
        <td height="30"><input name="cargasn10" type="text" class="input2" id="cargasn10" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp2" type="text" class="input" id="comp2" value="Gest&atilde;o de Pessoas e Lideran&ccedil;a" /></td>
        <td height="30"><input name="cargasn2" type="text" class="input2" id="cargasn2" value="4 h/a" /></td>
        <td height="30"><input name="cargasn11" type="text" class="input2" id="cargasn11" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp3" type="text" class="input" id="comp3" value="Comunica&ccedil;&atilde;o Empresarial" /></td>
        <td height="30"><input name="cargasn3" type="text" class="input2" id="cargasn3" value="4 h/a" /></td>
        <td height="30"><input name="cargasn12" type="text" class="input2" id="cargasn12" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp4" type="text" class="input" id="comp4" value="Gest&atilde;o da Informa&ccedil;&atilde;o e do Conhecimento" /></td>
        <td height="30"><input name="cargasn4" type="text" class="input2" id="cargasn4" value="4 h/a" /></td>
        <td height="30"><input name="cargasn13" type="text" class="input2" id="cargasn13" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp5" type="text" class="input" id="comp5" value="Cen&aacute;rios Econ&ocirc;micos e Sociais" /></td>
        <td height="30"><input name="cargasn5" type="text" class="input2" id="cargasn5" value="4 h/a" /></td>
        <td height="30"><input name="cargasn14" type="text" class="input2" id="cargasn14" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp6" type="text" class="input" id="comp6" value="Contabilidade Gerencial" /></td>
        <td height="30"><input name="cargasn6" type="text" class="input2" id="cargasn6" value="4 h/a" /></td>
        <td height="30"><input name="cargasn15" type="text" class="input2" id="cargasn15" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp7" type="text" class="input" id="comp7" value="Pr&aacute;tica Profissional e Gest&atilde;o (Ativ. Compl. I)" /></td>
        <td height="30"><input name="cargasn7" type="text" class="input2" id="cargasn7" value="4 h/a" /></td>
        <td height="30"><input name="cargasn16" type="text" class="input2" id="cargasn16" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp9" type="text" class="input" id="comp9" /></td>
        <td height="30"><input name="cargasn8" type="text" class="input2" id="cargasn8" /></td>
        <td height="30"><input name="cargasn17" type="text" class="input2" id="cargasn17" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp8" type="text" class="input" id="comp8" /></td>
        <td height="30"><input name="cargasn9" type="text" class="input2" id="cargasn9" /></td>
        <td height="30"><input name="cargasn18" type="text" class="input2" id="cargasn18" /></td>
      </tr>
      <tr>
        <td height="30" align="right" class="label">Total</td>
        <td height="30"><input name="cargasn19" type="text" class="input2" id="cargasn19" value="20 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn20" value="440 h/a" /></td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" colspan="3" class="label">M&oacute;dulo II</td>
      </tr>
      <tr>
        <td height="30" colspan="3" class="label">Nome</td>
      </tr>
      <tr>
        <td height="30" colspan="3"><label for="nomemod"></label>
          <input name="nomemod2" type="text" class="input" id="nomemod" value="Compet&ecirc;ncia, Responsabilidade Social e Sustentabilidade" /></td>
      </tr>
      <tr>
        <td height="30" class="label">Componentes</td>
        <td class="label">Carga Hor. Semanal</td>
        <td class="label">Carga Hor Semestral</td>
      </tr>
      <tr>
        <td height="30"><label for="comp"></label>
          <input name="comp10" type="text" class="input" id="comp" value="Coaching Profissional" /></td>
        <td height="30"><label for="cargasn"></label>
          <input name="cargasn20" type="text" class="input2" id="cargasn" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn39" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp17" value="&Eacute;tica, Responsabilidade Social e sustentabilidade" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn37" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn38" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp16" value="Direito Empresarial" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn35" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn36" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp15" value="Empreendedorismo e Novos Neg&oacute;cios" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn33" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn34" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp14" value="Gest&atilde;o da Copet&ecirc;ncia e Inova&ccedil;&atilde;o" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn31" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn32" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp13" value="Planejamento Estrat&eacute;gico e Gest&atilde;o de Projetos)" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn29" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn30" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp12" value="Pr&aacute;tica Profissional e Gest&atilde;o (Ativ. Compl. II)" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn27" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn28" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp11" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn25" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn26" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp10" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn23" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn24" /></td>
      </tr>
      <tr>
        <td height="30" align="right" class="label">Total</td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn21" value="20 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn22" value="440 h/a" /></td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" colspan="3" class="label">M&oacute;dulo III</td>
      </tr>
      <tr>
        <td height="30" colspan="3" class="label">Nome</td>
      </tr>
      <tr>
        <td height="30" colspan="3"><label for="nomemod"></label>
          <input name="nomemod2" type="text" class="input" id="nomemod" value="An&aacute;lise Econ&ocirc;mica-financeira e Investimentos" /></td>
      </tr>
      <tr>
        <td height="30" class="label">Componentes</td>
        <td class="label">Carga Hor. Semanal</td>
        <td class="label">Carga Hor Semestral</td>
      </tr>
      <tr>
        <td height="30"><label for="comp"></label>
          <input name="comp10" type="text" class="input" id="comp" value="Finan&ccedil;as e An&aacute;lise de Inverstimentos" /></td>
        <td height="30"><label for="cargasn"></label>
          <input name="cargasn20" type="text" class="input2" id="cargasn" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn58" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp25" value="An&aacute;lise Econ&ocirc;mica-financeira de empresas" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn56" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn57" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp24" value="Mercado de Capitais" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn54" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn55" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp23" value="Governa&ccedil;a Corporativa" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn52" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn53" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp22" value="Matem&aacute;tica Financeira" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn50" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn51" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp21" value=" 	Estat&iacute;stica B&aacute;sica" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn48" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn49" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp20" value="Pr&aacute;tica Profissional e Gest&atilde;o (Ativ. Compl. III)" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn46" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn47" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp19" value="Est&aacute;gio Supervisionado" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn44" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn45" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp18" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn42" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn43" /></td>
      </tr>
      <tr>
        <td height="30" align="right" class="label">Total</td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn40" value="20 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn41" value="520 h/a" /></td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" colspan="3" class="label">M&oacute;dulo IV</td>
      </tr>
      <tr>
        <td height="30" colspan="3" class="label">Nome</td>
      </tr>
      <tr>
        <td height="30" colspan="3"><label for="nomemod"></label>
          <input name="nomemod2" type="text" class="input" id="nomemod" value="Processos Financeiros e Gest&atilde;o Empresarial" /></td>
      </tr>
      <tr>
        <td height="30" class="label">Componentes</td>
        <td class="label">Carga Hor. Semanal</td>
        <td class="label">Carga Hor Semestral</td>
      </tr>
      <tr>
        <td height="30"><label for="comp"></label>
          <input name="comp10" type="text" class="input" id="comp" value="Intermedia&ccedil;&atilde;o Financeira" /></td>
        <td height="30"><label for="cargasn"></label>
          <input name="cargasn20" type="text" class="input2" id="cargasn" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn77" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp33" value="Contabilidade Custos" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn75" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn76" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp32" value="T&oacute;picos Ava&ccedil;ados em Contabilidade" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn73" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn74" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp31" value="Direito Tribut&aacute;rio" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn71" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn72" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp30" value="Processos de Tesouraria e Projetos Financeiros" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn69" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn70" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp29" value=" 	Pr&aacute;tica Profissional e Gest&atilde;o (Ativ. Compl. IV)" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn67" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn68" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp28" value="Trabalho de Conclus&atilde;o de Curso" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn65" value="4 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn66" value="80 h/a" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp27" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn63" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn64" /></td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp26" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn61" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn62" /></td>
      </tr>
      <tr>
        <td height="30" align="right" class="label">Total</td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn59" value="20 h/a" /></td>
        <td height="30"><input name="cargasn20" type="text" class="input2" id="cargasn60" /></td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
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