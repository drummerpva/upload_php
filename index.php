<h2>Envio de apenas um arquivo</h2>
<form method="POST" enctype="multipart/form-data" action="recebedor.php">
    Arquivo: <input type="file" name="arquivo"><br><br>
    <input type="submit" value="Enviar">
</form>

<h2>Envio de Multiplos arquivos</h2>
<form method="POST" enctype="multipart/form-data" action="recebedor.php">
    Arquivos: <input type="file" name="arquivos[]" multiple required><br><br>
    <input type="submit" value="Enviar">
</form>