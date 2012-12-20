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
  <div id="title">Cadastrar Curso P&oacute;s-Gradua&ccedil;&atilde;o</div>
  <div id="formulario">
    <br />
    <form id="form1" name="form1" method="post" action="">
    <table width="1005" border="0">
      <tr>
        <td height="30" colspan="3" valign="bottom"><span class="label">Nome do curso</span></td>
      </tr>
      <tr>
        <td colspan="3"><label for="titulo"></label><input name="titulo" type="text" class="input" id="titulo" /></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">Objetivos</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom"><label for="texto"></label>
          <textarea name="texto" cols="45" rows="5" class="area2" id="texto"></textarea></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">&Aacute;rea de atua&ccedil;&atilde;o</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom"><label for="area"></label>
          <textarea name="area" cols="45" rows="5" class="area2" id="area"></textarea></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">P&uacute;blico alvo</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom"><label for="texto3"></label>
          <textarea name="publico" cols="45" rows="5" class="area2" id="texto3"></textarea></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">Metodologia</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom"><label for="texto6"></label>
          <textarea name="metodologia" cols="45" rows="5" class="area2" id="texto6"></textarea></td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom" class="label">Avalia&ccedil;&atilde;o</td>
      </tr>
      <tr>
        <td height="30" colspan="3" valign="bottom"><label for="texto4"></label>
          <textarea name="avaliacao" cols="45" rows="5" class="area2" id="texto4"></textarea></td>
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
          <input name="comp" type="text" class="input" id="comp" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp2" type="text" class="input" id="comp2" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp3" type="text" class="input" id="comp3" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp4" type="text" class="input" id="comp4" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp5" type="text" class="input" id="comp5" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp6" type="text" class="input" id="comp6" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp7" type="text" class="input" id="comp7" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp9" type="text" class="input" id="comp9" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp8" type="text" class="input" id="comp8" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp10" type="text" class="input" id="comp10" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp11" type="text" class="input" id="comp11" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp12" type="text" class="input" id="comp12" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp13" type="text" class="input" id="comp13" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp14" type="text" class="input" id="comp14" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp15" type="text" class="input" id="comp15" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp16" type="text" class="input" id="comp16" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30"><input name="comp17" type="text" class="input" id="comp17" /></td>
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
          <input name="carga" type="text" class="input2" id="carga" /></td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td height="45" colspan="3"><input name="cadastrar" type="submit" class="bt" id="cadastrar" value="Cadastrar" /></td>
      </tr>
    </table>
    <br />
    </form>  
  
    
</div>
</div>
<div id="footer">Desenvolvido por Aplus Tecnologia - (31) 3245-5764</div>
</body>
</html>