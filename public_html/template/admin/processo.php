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
<link href="css/nav.css" rel="stylesheet" type="text/css" />

   
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
              <li><a href="graduacao.php">Gradua��o</a></li>
              <li><a href="pos-graduacao.php">P�s-Gradua��o</a></li>
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
               <li><a href="albuns.php">Ver �lbuns</a></li>
               <li><a href="cad-album.php">Novo �lbum</a></li>
            </ul>
         </li>
         
         <li>
            <a href="#">V�DEOS</a>
            <ul>
               <li><a href="videos.php">Ver v�deos</a></li>
               <li><a href="cad-video.php">Novo v�deo</a></li>
            </ul>
         </li>
         
         <li>
            <a href="#">NOT�CIAS</a>
            <ul>
               <li><a href="noticias.php">Ver not�cias</a></li>
               <li><a href="cad-noticia.php">Nova not�cia</a></li>
            </ul>
         </li>
         
       
         <li>
            <a href="#">CONFIGURA��O</a>
            <ul>
               <li><a href="troca-senha.php">Alterar senha</a></li>
            </ul>
         </li>
         <li><a href="#">SAIR</a></li>
  </ul> 

  </div>
</div>
<div id="container2">
  <div id="title">Processo seletivo</div>
  <div id="formulario">
      <form id="form1" name="form1" method="post" action="">
    <table width="1019" border="0">
      <tr>
        <td height="30" valign="bottom" class="label">C&oacute;digo</td>
      </tr>
      <tr>
        <td height="30" valign="bottom"><label for="codigo"></label>
          <input name="codigo" type="text" class="input" id="codigo" /></td>
      </tr>
      <tr>
        <td height="30" valign="bottom" class="label">R&oacute;tulo</td>
      </tr>
      <tr>
        <td height="30" valign="bottom"><input name="rotulo" type="text" class="input" id="rotulo" /></td>
      </tr>
      <tr>
        <td height="45"><input name="cadastrar" type="submit" class="bt" id="cadastrar" value="Atualizar" /></td>
      </tr>
    </table>
    <br />
    </form>


  </div>
</div>
<div id="footer">Desenvolvido por Aplus Tecnologia - (31) 3245-5764</div>
</body>
</html>