<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Ftps</title>
</head>
<body>
<?php
$xml = new SimpleXMLElement('sites.xml', 0, TRUE);
?>
    <table>
        <tr>
            <th>Host</th>
            <th>Porta</th>
            <th>Usuario</th>
            <th>Senha</th>
        </tr>
        <?php foreach ($xml->Servers->Folder->Server as $Ftp): ?>
        <tr>
            <td>
                <?php echo $Ftp->Host; ?>
            </td>
            <td>
                <?php echo $Ftp->Port; ?>
            </td>
            <td>
                <?php echo $Ftp->User; ?>
            </td>
            <td>
                <?php echo base64_decode($Ftp->Pass); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<!--
/*

Host: "ftp.500coresdevidaveg.com.br",
Port: "21",
Protocol: "0",
Type: "0",
User: "ftpweb@500coresdevidaveg.com.br",
Pass: "W3g1QTZlO3RrNH5n",
Logontype: "1",
TimezoneOffset: "0",
PasvMode: "MODE_DEFAULT",
MaximumMultipleConnections: "0",
EncodingType: "Auto",
BypassProxy: "0",
Name: "500 cores de Vida Veg",
Comments: { },
Colour: "0",
LocalDir: { },
RemoteDir: { },
SyncBrowsing: "0",
DirectoryComparison: "0"


*/-->
</body>
</html>