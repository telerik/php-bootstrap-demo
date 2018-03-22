<?php
    $chartAreaMargin = new \Kendo\Dataviz\UI\ChartAreaMargin();
    $chartAreaMargin->top(10);
    $chartAreaMargin->right(8);
    $chartAreaMargin->bottom(0);
    $chartAreaMargin->left(10);

    $chartArea = new \Kendo\Dataviz\UI\ChartArea();
    $chartArea->margin($chartAreaMargin);
    $chartArea->background('transparent');

    $seriesDefaults = new \Kendo\Dataviz\UI\ChartSeriesDefaults();
    $seriesDefaults->type('area');
    $seriesDefaults->area(array('line' => array('style' => 'smooth')));
    $seriesDefaults->stack(true);

    $seriesItemCanterbury = new \Kendo\Dataviz\UI\ChartSeriesItem();
    $seriesItemCanterbury->name("Canterbury");
    $seriesItemCanterbury->data(array(345, 823, 672, 1200, 3456, 2901, 800, 4562,
                                    6721, 2453, 4521, 6712, 2891, 2932, 6721,
                                    7812, 3742, 7812, 7892, 8912, 4525, 5682,
                                    2453, 7562, 2435, 6781, 7891, 8991, 200,
                                    2000, 1892, 4891, 4352, 1234, 7891, 3921,
                                    8912, 6781, 8787, 8991, 5782, 10982, 12634,
                                    6891, 1892, 14512, 4561, 2573, 9347, 7792,
                                    8826, 7935, 19234, 7724, 9001, 8764, 13562,
                                    15671, 18924, 10992, 3646));

    $seriesItemMachester = new \Kendo\Dataviz\UI\ChartSeriesItem();
    $seriesItemMachester->name("Machester");
    $seriesItemMachester->data(array(524, 782, 891, 901, 2123, 278, 892, 872, 2003,
                                    2010, 2831, 809, 1093, 2003, 3007, 5009, 4006,
                                    3005, 5002, 2032, 3094, 2893, 3456, 4213, 4567,
                                    6538, 4652, 1234, 234, 756, 234, 432, 678, 4567,
                                    2347, 4623, 6578, 4662, 1040, 1909, 3495, 2398,
                                    2654, 5842, 3556, 6233, 2613, 3452, 6772, 2553,
                                    4772, 7889, 2374, 7856, 2345, 4563, 3456, 1436,
                                    1123, 3445, 3456));

    $seriesItemRochester = new \Kendo\Dataviz\UI\ChartSeriesItem();
    $seriesItemRochester->name("Rochester");
    $seriesItemRochester->data(array(1034, 793, 330, 1351, 988, 2713, 662, 1804, 2850,
                                    1929, 1580, 1799, 3910, 4521, 3017, 3884, 12054,
                                    4259, 4998, 2039, 1415, 327, 1984, 2787, 3233,
                                    10582, 5349, 1757, 659, 1842, 1331, 769, 2862,
                                    8761, 2962, 7958, 3412, 5259, 1119, 1193, 10427,
                                    4523, 2604, 4050, 4397, 2159, 1760, 6958, 6757,
                                    10636, 8275, 9157, 2265, 2796, 10437, 2345, 2438,
                                    891, 1626, 3797, 19830));

    $categoryAxisItemLabels = new \Kendo\Dataviz\UI\ChartCategoryAxisItemLabels();
    $categoryAxisItemLabels->visible(false);                              

    $categoryAxisMajorGridLines = new \Kendo\Dataviz\UI\ChartCategoryAxisItemMajorGridLines();
    $categoryAxisMajorGridLines->visible(false);

    $categoryAxisItemLine = new \Kendo\Dataviz\UI\ChartCategoryAxisItemLine();
    $categoryAxisItemLine->visible(false);

    $categoryAxisItem = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
    $categoryAxisItem->labels($categoryAxisItemLabels);
    $categoryAxisItem->majorGridLines($categoryAxisMajorGridLines);
    $categoryAxisItem->line($categoryAxisItemLine);
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

    $valueAxisItemLabels = new \Kendo\Dataviz\UI\ChartValueAxisItemLabels();
    $valueAxisItemLabels->step(2);     

    $valueAxisItem = new \Kendo\Dataviz\UI\ChartValueAxisItem();
    $valueAxisItem->labels($valueAxisItemLabels);

    $legend = new \Kendo\Dataviz\UI\ChartLegend();
    $legend->visible(false);

    $tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
    $tooltip->template('#= series.name # <br /> #= category #: #= value #');
    $tooltip->visible(true);

    $chart = new \Kendo\Dataviz\UI\Chart("sales-per-region");
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