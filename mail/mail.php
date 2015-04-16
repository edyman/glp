<body style="background-color: #EAECED; font-family:Arial, Helvetica, sans-serif;">
<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" bgcolor="#eaeced">
    <tr>
        <td align="center" valign="top" style="background-color: #ffff;">
            <table width="600">
                <tr style="background-color: white;">
                    <td><!-- <td align="center" >-->
                        <h3 style="background-color: #005596; color:#fff; padding:15px;">
                            <?= $title ?></h3>

                        <div style="padding: 15px;">
                            <?= $content ?></div>
                        <br/>
                        <code style="color:#7e8890; padding: 15px;"><?= Yii::$app->
                            formatter->asDatetime(date('Y-m-d'),'long') ?></code>

                        <p style="padding: 15px;">
                            <a href="<?= $url ?>" style="">Ver en sitio web</a>
                        </p>
                </tr>
                <tr style="background-color: white; ">
                    <td align="justify"
                        style="font-family:'Open Sans', arial, sans-serif !important;font-size:12px !important;font-weight:400 !important;color:#7e8890 !important; padding: 15px;">
                        ASOCAM es el Servicio de Gestión del Conocimiento para América Latina
                        que apoya procesos de construcción colectiva de conocimientos, que
                        permite compartir y avanzar en temas específicos, generando productos de
                        alta calidad y utilidad para los actores de desarrollo.
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
