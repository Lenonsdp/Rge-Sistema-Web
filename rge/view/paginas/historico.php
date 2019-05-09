<?php require '/var/www/html/rge/model/DB.class.php' ?>
<?php require '/var/www/html/rge/model/cliente.class.php'?>

<!DOCTYPE html>
<html>
<head>
    <title>Historico</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' href='../css/css.css'>
</head>
<body>
    <?php require 'header.php' ?>
        <form id='forma_tabela'>
             <div>
                  <h3>Hístórico</h3>
             </div> 
             <hr>
             <table id='tabela_resultados' class='table'>
                <thead>
                    <tr class='filters'>
                        <th><input type='text'  placeholder='id' disabled='disabled' ></th>
                        <th><input type='text'  placeholder='Codigo cliente' id='codigo_busca'></th>
                        <th><input type='text'  placeholder='Nome do Cliente' id='nome_busca'></th>
                        <th><input type='text'  placeholder='Kwh' id='kwh_busca'></th>
                        <th><input type='text'  placeholder='Tipo' id='tipo_busca'></th>
                        <th><input type='text'  placeholder='Mes' id='mes_busca'></th>
                        <th><input type='text'  placeholder='Valor' disabled='disabled' ></th>
                     </tr>
                </thead>
                <tbody></tbody>
            </table>
        </form>
    <?php require 'footer.php' ?>
</body> 
</html>