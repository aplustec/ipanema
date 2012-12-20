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
  <div id="title">Editar &aacute;lbum</div>
  <div id="albuns2">
      <form id="form1" name="form1" method="post" action="">
    <table width="1019" border="0">
      <tr>
        <td height="30" valign="bottom" class="label">T&iacute;tulo do &aacute;lbum</td>
      </tr>
      <tr>
        <td height="30" valign="bottom"><label for="titulo"></label>
          <input name="titulo" type="text" class="input" id="titulo" value="T&iacute;tulo da Galeria" /></td>
      </tr>
      <tr>
        <td height="30" valign="bottom" class="label">Descri&ccedil;&atilde;o do &aacute;lbum</td>
      </tr>
      <tr>
        <td height="30" valign="bottom"><label for="descricao"></label>
          <textarea name="descricao" cols="45" rows="5" class="area2" id="descricao">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
          </textarea> 
          <em><span class="info"><strong>M&aacute;x 400 caracteres</strong></span></em></td>
      </tr>
      <tr>
        <td height="30" valign="bottom"><span class="label">Adicionar imagens</span></td>
      </tr>
      <tr>
        <td><input name="image1" type="file" id="image1" />
        <label><em><span class="info">(600 x 400px Arquivo - JPG) <strong>M&aacute;ximo 24 imagens</strong></span></em></label></td>
      </tr>
      <tr>
        <td height="45"><input name="cadastrar" type="submit" class="bt" id="cadastrar" value="Atualizar" /></td>
      </tr>
    </table>
    <br />
    </form>
 <ul class="album">
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      <li>
        <div id="image-galeria"><a class="fancybox" href="../imagens/galeria/gal1/img01.jpg" data-fancybox-group="gallery"><img src="../imagens/galeria/gal1/img01.jpg" width="226" height="150" border="0" /></a></div>
        <div id="actions-galeria"><a href="#"><img src="imagens/del.png" width="25" height="20" border="0" title="Excluir" /></a></div>
      </li>
      
    </ul>

  </div>
</div>
<div id="footer">Desenvolvido por Aplus Tecnologia - (31) 3245-5764</div>
</body>
</html>