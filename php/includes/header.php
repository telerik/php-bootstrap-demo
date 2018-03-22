<header>
    <div class="container" class="row">
        <h1 class="col-sm-4 hidden-sm">Telerik® UI for PHP &hearts; Bootstrap</h1>
        <h1 class="col-sm-4 visible-sm">Telerik® UI for PHP &hearts;<br/> Bootstrap</h1>

        <div id="configurator-wrap" class="col-sm-8 hidden-xs">
            <div id="configurator" class="row">
                <label class="col-sm-4">
                    <div class="description">Dimensions</div>
                    <?php
                    $dimensions = new \Kendo\UI\DropDownList('dimensions');

                    $dimensions->value("common-bootstrap");
                    $dimensions->change('changeDimensions');
                    $dimensions->dataTextField('text');
                    $dimensions->dataValueField('value');
                    $dimensions->dataSource(array(
                            array('text' => 'Default', 'value' => "common"),
                            array('text' => 'Bootstrap', 'value' => "common-bootstrap")
                    ));
                    $dimensions->attr('style', 'width: 100%');

                    echo $dimensions->render();
                    ?>
                </label>

                <label class="col-sm-4">
                    <div class="description">Theme</div>
                    <?php
                    $theme = new \Kendo\UI\DropDownList('theme');

                    $theme->value("bootstrap");
                    $theme->change('changeTheme');
                    $theme->dataTextField('text');
                    $theme->dataValueField('value');
                    $theme->dataSource(array(
                            array('text' => 'Default', 'value' => 'default'),
                            array('text' => 'Blue Opal', 'value' => 'blueopal'),
                            array('text' => 'Bootstrap', 'value' => 'bootstrap'),
                            array('text' => 'Silver', 'value' => 'silver'),
                            array('text' => 'Uniform', 'value' => 'uniform'),
                            array('text' => 'Metro', 'value' => 'metro'),
                            array('text' => 'Black', 'value' => 'black'),
                            array('text' => 'Metro Black', 'value' => 'metroblack'),
                            array('text' => 'High Contrast', 'value' => 'highcontrast'),
                            array('text' => 'Moonlight', 'value' => 'moonlight'),
                            array('text' => 'Flat', 'value' => 'flat')
                    ));
                    $theme->attr('style', 'width: 100%');

                    echo $theme->render();
                    ?>
                </label>

                <label class="col-sm-4">
                    <div class="description">Font-size</div>
                    <?php
                    $fontSize = new \Kendo\UI\DropDownList('font-size');

                    $fontSize->value(14);
                    $fontSize->change('changeFontSize');
                    $fontSize->dataTextField('text');
                    $fontSize->dataValueField('value');
                    $fontSize->dataSource(array(
                            array('text' => '10px', 'value' => 10),
                            array('text' => '12px', 'value' => 12),
                            array('text' => '14px', 'value' => 14),
                            array('text' => '16px', 'value' => 16),
                            array('text' => '18px', 'value' => 18),
                            array('text' => '20px', 'value' => 20)
                    ));
                    $fontSize->attr('style', 'width: 100%');

                    echo $fontSize->render();
                    ?>
                </label>
            </div>
        </div>
    </div>
</header>
<script>
    function changeFontSize(e) {
        var value = $("#font-size").kendoDropDownList("value");

        $("body").css("font-size", value + "px");
    };
    function changeDimensions(e) {
        window.kendoThemeChooser.changeCommon(this.value(), true);
    };
    function changeTheme(e) {
        theme = this.value();
        window.kendoThemeChooser.changeTheme(theme, true);
        initCharts(theme);
    };
    function initCharts(theme) {
        var charts = $(".k-chart");
        charts.each(function(e){
            var chart = $(this).data("kendoChart");
            chart.setOptions({
                theme: theme
            })
        });
    }
    window.kendoThemeChooser.changeTheme('bootstrap', false);
</script>