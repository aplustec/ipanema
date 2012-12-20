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
<link href="css/form.css" rel="stylesheet" type="text/css" />


   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="fancy/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="fancy/js/control.js"></script>

<script src="menu/js/superfish.js" type="text/javascript"></script>
<script src="menu/js/scriptsInit.js" type="text/javascript"></script>



        
        
<link href="css/tabela.css" rel="stylesheet" type="text/css" />
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
<div id="container">
  <div id="title">Banners</div>
  <div id="vitrine">
     <ul class="tabela3">
      <li>
        <div id="image-banner"><a class="fancybox" href="../imagens/banner/banner1.jpg" data-fancybox-group="gallery"><img src="../imagens/banner/banner1.jpg" width="340" height="119" border="0" /></a></div>
        <div id="actions-banner"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
     <li>
        <div id="image-banner"><a class="fancybox" href="../imagens/banner/banner2.jpg" data-fancybox-group="gallery"><img src="../imagens/banner/banner2.jpg" width="340" height="119" border="0" /></a></div>
        <div id="actions-banner"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
          
    </ul>
  </div>
  <div id="title">&Uacute;ltimas not&iacute;cias</div>
  <div id="vitrine2">
   <table width="1056" border="0" cellpadding="7" cellspacing="4">
    <tr>
      <td width="96" class="label">Imagem</td>
      <td width="538"><span class="label">Not&iacute;cia</span></td>
      <td width="65"><span class="label">Data</span></td>
      <td width="75"><span class="label">A&ccedil;&otilde;es</span></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><img src="../imagens/noticias/thumb_01.png" width="90" height="90" /></td>
      <td height="90" bgcolor="#FFFFFF"><h3 class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry<br />
        <br />
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
...</h3></td>
      <td bgcolor="#FFFFFF" class="info">03/01/12</td>
      <td bgcolor="#FFFFFF"><a href="edit-noticia.php"><img src="imagens/edit-icon.png" width="20" height="20" border="0" title="Editar" /></a> <a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></td>
    </tr>
    <tr>
      <td><img src="../imagens/noticias/thumb_01.png" alt="" width="90" height="90" /></td>
      <td height="90"><h3 class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry<br />
          <br />
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
...</h3></td>
      <td class="info">03/01/12</td>
      <td><a href="edit-noticia.php"><img src="imagens/edit-icon.png" width="20" height="20" border="0" title="Editar" /></a> <a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><img src="../imagens/noticias/thumb_01.png" alt="" width="90" height="90" /></td>
      <td height="90" bgcolor="#FFFFFF"><h3 class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry<br />
          <br />
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
...</h3></td>
      <td bgcolor="#FFFFFF" class="info">03/01/12</td>
      <td bgcolor="#FFFFFF"><a href="edit-noticia.php"><img src="imagens/edit-icon.png" width="20" height="20" border="0" title="Editar" /></a> <a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></td>
    </tr>
        <tr>
          <td><img src="../imagens/noticias/thumb_01.png" alt="" width="90" height="90" /></td>
      <td height="90"><h3 class="info">Lorem Ipsum is simply dummy text of the printing and typesetting industry<br />
          <br />
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
...</h3></td>
      <td class="info">03/01/12</td>
      <td><a href="edit-noticia.php"><img src="imagens/edit-icon.png" width="20" height="20" border="0" title="Editar" /></a> <a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></td>
    </tr>
  </table>
  </div>
</div>
<div id="footer">Desenvolvido por Aplus Tecnologia - (31) 3245-5764</div>
</body>
</html>