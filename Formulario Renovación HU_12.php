<!DOCTYPE html>
<html class="sapCpRuntime" lang="es">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="./sapContentPage.css">
    <script src="./sapContentPage.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>Formulario Renovación HU_12</title>
</head>

<body class="sapCpBody">
    <form id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage"
        action="integrationScript.php" method="POST"
        data-sap-cp-key="836DEEA19A6CA5374908EECBF7C0EC52C37573C9"
        class="sapCpContentPage sapCRLPage sapCpContentPageLoading Formulario" data-sap-cp-lpkey="" data-sap-cp-prefill-data="true"
        data-sap-cp-progres-enabled="true" data-sap-cp-progres-max="1" data-sap-cp-version="20.0.5">
        <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L"
            data-sap-cp-key="F0E7C2723950C6144B59C8A9C09A1DE1E66BA351"
            class="sapCpLayout sapCRLLayout sapCRLLayoutVertical">
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-0W"
                data-sap-cp-key="50858D431266F0FEACB518B3766E90F943A57FA7"
                class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetMandatory sapCpContactAttribute-TELNR_MOBILE"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    style="width: 20%;"><label id="__label44" class="sapCpLabel sapCpLabelRequired input-lbl"
                        for="__input21">Teléfono</label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <input id="__input21" class="sapCpInput txt-input" type="tel" value="+569" required="required" maxlength="12"
                        data-sap-cp-validationmessage="El número de teléfono debe tener un símbolo de suma (+) y 5 o más dígitos.">
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-1W"
                data-sap-cp-key="1A1A2F91E0B5E511E30F36256F0A3CC083EA3EE9"
                class="sapCpWidget sapCRLWidget sapCpTextWidget" data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContentNoIndent sapCRLWidgetContentNoIndent">
                    <p style="text-align: left"><span style="font-size: 12pt"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #000080">&nbsp;
                                    &nbsp; &nbsp; &nbsp; Selecciona solo una opción para renovar</span></strong></span>
                    </p>
                </div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-2W"
                data-sap-cp-key="D74E95E1F9EC30710711C4D2ECA81D35BFDF71B2"
                class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetHidden sapCpCInteractionAttribute-YY1_RENOVACION1_MIA sapCpContactAttribute-"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    style="width: 20%;"><label id="__label45" class="sapCpLabel" for="__down14">Renovación</label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <select id="__down14" class="sapCpDropDown">
                        <option label="Interesado" value="101" selected="selected">Interesado</option>
                        <option label=" " value=""> </option>
                    </select></div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-3W"
                data-sap-cp-key="FCE31ECF6825228F2A1987B1E58322C8E42639C7"
                class="sapCpWidget sapCRLWidget sapCpInputWidget sapCpWidgetHidden sapCpCInteractionAttribute-YY1_RENOVACION1_MIA sapCpContactAttribute-"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    style="width: 20%;"><label id="__label46" class="sapCpLabel" for="__down15">No quiero
                        renovación</label></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <select id="__down15" class="sapCpDropDown">
                        <option label="No Interesado" value="102" selected="selected">No Interesado</option>
                        <option label=" " value=""> </option>
                    </select></div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-4W"
                data-sap-cp-key="BD7DDD369D56438A992A1E2EC503A0C5940CF026"
                class="sapCpWidget sapCRLWidget sapCpInteractionWidget sapCpCheckBoxElementWidget"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    style="width: 20%;"></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <div id="__box14" class="sapCpCheckBox"><input type="checkbox"class="radio" name="fooby[1][]" value="1"></div><label id="__label47"
                        class="sapCpLabel sapCpLabelRequiredBefore">Me interesa renovar mi vehículo</label>
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-5W"
                data-sap-cp-key="65ADB1C153CCB72097446C54F01003A7EE016036"
                class="sapCpWidget sapCRLWidget sapCpInteractionWidget sapCpCheckBoxElementWidget"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    style="width: 20%;"></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <div id="__box15" class="sapCpCheckBox"><input type="checkbox"class="radio" name="fooby[1][]" value="1"></div><label id="__label48"
                        class="sapCpLabel sapCpLabelRequiredBefore">No quiero la Renovación</label>
                </div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
            <div id="application-MarketingContent-manage-component---ObjectView--DesignView--ContentPage-0L-6W"
                data-sap-cp-key="66B738736CC16FBAD97C529608256BC5ADED0A5E"
                class="sapCpWidget sapCRLWidget sapCpButtonWidget" data-sap-cp-follow-up-action="02"
                data-sap-cp-wprogres-enabled="false">
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft"
                    style="width: 20%;"></div>
                <div class="sapCpWidgetContent sapCpWidgetContentLeft sapCRLWidgetContent sapCRLWidgetContentLeft">
                    <button id="__button46" class="sapCpButton btn-principal" type="button">Enviar</button><span id="__text435"
                        class="sapCpText sapCpButtonWidgetExtraText sapCpMissingMandatoryFieldText sapCpMissingMandatoryFieldLabel">Rellene
                        todos los campos correctamente.</span><span id="__text436"
                        class="sapCpText sapCpButtonWidgetExtraText sapCpErrorMessageText">Se ha producido un error
                        técnico.</span><span id="__text437"
                        class="sapCpText sapCpButtonWidgetExtraText sapCpSuccessMessageText sapCpSuccessMessageLabel">Gracias
                        por confirmar</span></div>
                <div class="sapCpWidgetFixContent sapCRLWidgetFixContent"></div>
            </div>
        </div>
    </form>
</body>



<script>
    $("input:checkbox").on('click', function() {
      var $box = $(this);
      if ($box.is(":checked")) {
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        $(group).prop("checked", false);
        $box.prop("checked", true);
      } else {
        $box.prop("checked", false);
      }
    });
</script>



</html>