<?php
    $chartAreaMargin = new \Kendo\Dataviz\UI\ChartAreaMargin();
    $chartAreaMargin->top(10);
    $chartAreaMargin->right(5);
    $chartAreaMargin->bottom(0);
    $chartAreaMargin->left(10);

    $chartArea = new \Kendo\Dataviz\UI\ChartArea();
    $chartArea->margin($chartAreaMargin);
    $chartArea->background('transparent');

    $seriesDefaults = new \Kendo\Dataviz\UI\ChartSeriesDefaults();
    $seriesDefaults->type('column');
    $seriesDefaults->stack(true);

    $seriesItemCanterbury = new \Kendo\Dataviz\UI\ChartSeriesItem();
    $seriesItemCanterbury->name("Canterbury");
    $seriesItemCanterbury->data(array(686.55, 1637.77, 1337.28, 2388, 6877.44, 5772.99, 1592, 9078.38,
                                13374.79, 4881.47, 8996.79, 13356.88, 5753.09, 5834.68, 13374.79,
                                15545.88, 7446.58, 15545.88, 15705.08, 17734.88, 9004.75, 11307.18,
                                4881.47, 15048.38, 4845.65, 13494.19, 15703.09, 17892.09, 398, 3980,
                                3765.08, 9733.09, 8660.48, 2455.66, 15703.09, 7802.79, 17734.88,
                                13494.19, 17486.13, 17892.09, 11506.18, 21854.18, 25141.66, 13713.09,
                                3765.08, 28878.88, 9076.39, 5120.27, 18600.53, 15506.08, 17563.74,
                                15790.65, 38275.66, 15370.76, 17911.99, 17440.36, 26988.38, 31185.29,
                                37658.76, 21874.08, 7255.54));

    $seriesItemMachester = new \Kendo\Dataviz\UI\ChartSeriesItem();
    $seriesItemMachester->name("Machester");
    $seriesItemMachester->data(array(1199.96, 1790.78, 2040.39, 2063.29, 4861.67, 636.62, 2042.68, 1996.88,
                                    4586.87, 4602.9, 6482.99, 1852.61, 2502.97, 4586.87, 6886.03, 11470.61,
                                    9173.74, 6881.45, 11454.58, 4653.28, 7085.26, 6624.97, 7914.24, 9647.77,
                                    10458.43, 14972.02, 10653.08, 2825.86, 535.86, 1731.24, 535.86, 989.28,
                                    1552.62, 10458.43, 5374.63, 10586.67, 15063.62, 10675.98, 2381.6, 4371.61,
                                    8003.55, 5491.42, 6077.66, 13378.18, 8143.24, 14273.57, 5983.77, 7905.08,
                                    15507.88, 5846.37, 10927.88, 18065.81, 5436.46, 17990.24, 5370.05,
                                    10449.27, 7914.24, 3288.44, 2571.67, 7889.05, 7914.24));

    $seriesItemRochester = new \Kendo\Dataviz\UI\ChartSeriesItem();
    $seriesItemRochester->name("Rochester");
    $seriesItemRochester->data(array(1540.66, 1181.57, 491.7, 2012.99, 1472.12, 4042.37, 986.38, 2687.96, 4246.5,
                                    2874.21, 2354.2, 2680.51, 5825.9, 6736.29, 4495.33, 5787.16, 17960.46,
                                    6345.91, 7447.02, 3038.11, 2108.35, 487.23, 2956.16, 4152.63, 4817.17,
                                    15767.18, 7970.01, 2617.93, 981.91, 2744.58, 1983.19, 1145.81, 4264.38,
                                    13053.89, 4413.38, 11857.42, 5083.88, 7835.91, 1667.31, 1777.57, 15536.23,
                                    6739.27, 3879.96, 6034.5, 6551.53, 3216.91, 2622.4, 10367.42, 10067.93,
                                    15847.64, 12329.75, 13643.93, 3374.85, 4166.04, 15551.13, 3494.05, 3632.62,
                                    1327.59, 2422.74, 5657.53, 29546.7));

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
    $valueAxisItemPlotBand->from(30000);
    $valueAxisItemPlotBand->to(50000);
    $valueAxisItemPlotBand->color("#a7c9e6");
    $valueAxisItemPlotBand->opacity(0.3);
    
    $valueAxisItemLabels = new \Kendo\Dataviz\UI\ChartValueAxisItemLabels();
    $valueAxisItemLabels->step(2);   
    $valueAxisItemLabels->template("$#= value #");  

    $valueAxisItem = new \Kendo\Dataviz\UI\ChartValueAxisItem();
    $valueAxisItem->labels($valueAxisItemLabels);
    $valueAxisItem->addPlotBand($valueAxisItemPlotBand);

    $legend = new \Kendo\Dataviz\UI\ChartLegend();
    $legend->visible(false);

    $tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
    $tooltip->template('#= series.name # <br /> #= category #: #= value #');
    $tooltip->visible(true);

    $chart = new \Kendo\Dataviz\UI\Chart("revenue");
    $chart->chartArea($chartArea);
    $chart->theme('bootstrap');
    $chart->seriesDefaults($seriesDefaults);
    $chart->addSeriesItem($seriesItemCanterbury);
    $chart->addSeriesItem($seriesItemMachester);
    $chart->addSeriesItem($seriesItemRochester);
    $chart->addCategoryAxisItem($categoryAxisItem);
    $chart->addValueAxisItem($valueAxisItem);
    $chart->transitions(false);
    $chart->legend($legend);
    $chart->tooltip($tooltip);

    echo $chart->render();
?>