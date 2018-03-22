<?php
    $chartAreaMargin = new \Kendo\Dataviz\UI\ChartAreaMargin();
    $chartAreaMargin->right(10);

    $chartArea = new \Kendo\Dataviz\UI\ChartArea();
    $chartArea->margin($chartAreaMargin);
    $chartArea->background('transparent');

    $seriesDefaults = new \Kendo\Dataviz\UI\ChartSeriesDefaults();
    $seriesDefaults->type('verticalBullet');
    $seriesDefaults->stack(true);

    $seriesItemAllProducts = new \Kendo\Dataviz\UI\ChartSeriesItem();
    $seriesItemAllProducts->name("All Products");
    $seriesItemAllProducts->data(array([1903, 5000], [2398, 5250], [1893, 5500], [3452, 5750], [6567, 6000], [5892, 6250], [2354, 6500],
                                    [7238, 6750], [11574, 7000], [6392, 7250], [8932, 7500], [9320, 7750], [7894, 8000],
                                    [9456, 8250], [12745, 8500], [16705, 8750], [19802, 9000], [15076, 9250], [17892, 9500],
                                    [12983, 9750], [9034, 10000], [8902, 10250], [7893, 10500], [14562, 10750], [10235, 11000],
                                    [23901, 11250], [17892, 11500], [11982, 11750], [1093, 12000], [4598, 12250], [3457, 12500],
                                    [6092, 12750], [7892, 13000], [14562, 13250], [13200, 13500], [16502, 13750], [18902, 14000],
                                    [16702, 14250], [10946, 14500], [12093, 14750], [19704, 15000], [17903, 15250], [17892, 15500],
                                    [16783, 15750], [9845, 16000], [22904, 16250], [8934, 16500], [12983, 16750], [22876, 17000],
                                    [20981, 17250], [21873, 17500], [24981, 17750], [23873, 18000], [18376, 18000], [21783, 18000],
                                    [15672, 18000], [19456, 18000], [17998, 18000], [21673, 18000], [18234, 18000],[26932, 18000]));

    $categoryAxisItemLabels = new \Kendo\Dataviz\UI\ChartCategoryAxisItemLabels();
    $categoryAxisItemLabels->visible(false);                              

    $categoryAxisMajorGridLines = new \Kendo\Dataviz\UI\ChartCategoryAxisItemMajorGridLines();
    $categoryAxisMajorGridLines->visible(false);

    $categoryAxisItem = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
    $categoryAxisItem->labels($categoryAxisItemLabels);
    $categoryAxisItem->majorGridLines($categoryAxisMajorGridLines);
    $categoryAxisItem->categories(array("Oct 1", "Oct 2", "Oct 3", "Oct 4", "Oct 5", "Oct 6",
                                        "Oct 7", "Oct 8", "Oct 9", "Oct 10", "Oct 11", "Oct 12",
                                        "Oct 13", "Oct 14", "Oct 15", "Oct 16", "Oct 17", "Oct 18",
                                        "Oct 19", "Oct 20", "Oct 21", "Oct 22", "Oct 23", "Oct 24",
                                        "Oct 25", "Oct 26", "Oct 27", "Oct 28", "Oct 29", "Oct 30", "Oct 31",
                                        "Nov 1", "Nov 2", "Nov 3", "Nov 4", "Nov 5", "Nov 6",
                                        "Nov 7", "Nov 8", "Nov 9", "Nov 10", "Nov 11", "Nov 12",
                                        "Nov 13", "Nov 14", "Nov 15", "Nov 16", "Nov 17", "Nov 18",
                                        "Nov 19", "Nov 20", "Nov 21", "Nov 22", "Nov 23", "Nov 24",
                                        "Nov 25", "Nov 26", "Nov 27", "Nov 28", "Nov 29", "Nov 30"));

    $valueAxisItemPlotBand = new \Kendo\Dataviz\UI\ChartValueAxisItemPlotBand();
    $valueAxisItemPlotBand->from(10000);
    $valueAxisItemPlotBand->to(20000);
    $valueAxisItemPlotBand->color("#ff0000");
    $valueAxisItemPlotBand->opacity(0.05);
    
    $valueAxisItemLabels = new \Kendo\Dataviz\UI\ChartValueAxisItemLabels();
    $valueAxisItemLabels->step(2);   
    $valueAxisItemLabels->template("$#= value #");  

    $valueAxisItem = new \Kendo\Dataviz\UI\ChartValueAxisItem();
    $valueAxisItem->labels($valueAxisItemLabels);
    $valueAxisItem->addPlotBand($valueAxisItemPlotBand);

    $legend = new \Kendo\Dataviz\UI\ChartLegend();
    $legend->visible(false);

    $tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
    $tooltip->visible(true);

    $chart = new \Kendo\Dataviz\UI\Chart("sales-per-day");
    $chart->chartArea($chartArea);
    $chart->theme('bootstrap');
    $chart->seriesDefaults($seriesDefaults);
    $chart->addSeriesItem($seriesItemAllProducts);
    $chart->addCategoryAxisItem($categoryAxisItem);
    $chart->addValueAxisItem($valueAxisItem);
    $chart->transitions(false);
    $chart->legend($legend);
    $chart->tooltip($tooltip);

    echo $chart->render();
?>