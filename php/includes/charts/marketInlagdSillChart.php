<?php
    $chartAreaMargin = new \Kendo\Dataviz\UI\ChartAreaMargin();
    $chartAreaMargin->top(15);
    $chartAreaMargin->bottom(0);

    $chartArea = new \Kendo\Dataviz\UI\ChartArea();
    $chartArea->margin($chartAreaMargin);
    $chartArea->background('transparent');

    $seriesDefaults = new \Kendo\Dataviz\UI\ChartSeriesDefaults();
    $seriesDefaults->type('donut');

    $seriesItem2011 = new \Kendo\Dataviz\UI\ChartSeriesItem();
    $seriesItem2011->name("2011");
    $seriesItem2011->data(array(
        array('category' => 'Canterbury', 'value' => 30),
        array('category' => 'Manchester', 'value' => 21),
        array('category' => 'Rochester', 'value' => 49)
    ));
    $seriesItem2011->padding(0);

    $seriesItem2012 = new \Kendo\Dataviz\UI\ChartSeriesItem();
    $seriesItem2012->name("2012");
    $seriesItem2012->data(array(
        array('category' => 'Canterbury', 'value' => 32),
        array('category' => 'Manchester', 'value' => 25),
        array('category' => 'Rochester', 'value' => 43)
    ));

    $legend = new \Kendo\Dataviz\UI\ChartLegend();
    $legend->visible(false);

    $tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
    $tooltip->template('#= category # (#= series.name #): #= value #%');
    $tooltip->visible(true);

    $title = new \Kendo\Dataviz\UI\ChartTitle();
    $title->text('Inlagd Sill');
    $title->position('bottom');
    $title->padding(4);
    $title->margin(0);

    $chart = new \Kendo\Dataviz\UI\Chart("market-inlagd-sill");
    $chart->title($title);
    $chart->theme('bootstrap');
    $chart->chartArea($chartArea);
    $chart->seriesDefaults($seriesDefaults);
    $chart->addSeriesItem($seriesItem2011);
    $chart->addSeriesItem($seriesItem2012);
    $chart->transitions(false);
    $chart->legend($legend);
    $chart->tooltip($tooltip);

    echo $chart->render();
?>