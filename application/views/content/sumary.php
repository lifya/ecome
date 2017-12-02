<!DOCTYPE html>
<html>
<head>
   <style>
input[type=judul] 
{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

</style>
<meta charset="UTF-8">

<title>TUGAS</title>
<link rel="stylesheet" href="<?php echo base_url() ?>element/css/style1.css" media="screen"/>
<h1 align="center" >  <strong>AUTOMATIC TEXT SUMMARIZER INDONESIA</strong></h1> 

</head>
 
<body background="image/1.png" align="center" background-size="100px 80px";>
    
    <form>
    <fieldset id="UserDataFields">
    <table align="center">

    <tr><br>
        <td><b>Judul</b></td>
        <td>:</td>
        <td><input cols=100 type="judul" name="judul" size=30/></td>
    </tr>
    <tr>
        <td valign="center"><b>Isi Ringkasan</b></td>
        <td valign="center">:</td>
        <td><textarea cols=90 rows=17 name="isiringkasan"> </textarea></td>
    </tr>
    <tr>
        <td valign="center"><b>Hasil Ringkasan Ringkasan</b></td>
        <td valign="center">:</td>
        <td><textarea cols=90 rows=17 name="isiringkasan"> </textarea></td>
    </tr>
    </table>

         <div align="center" class="row">
         <button role="button" type="Browse">Browse</botton>
         <button role="button" type="Register">Ringkas </botton> 
         <button role="button" type="Cancel" >Hapus </botton>
         <button role="button" type="Back" >Back </botton>
         </div>
     </fieldset>
  
</form>

 </body>
</html> 
