<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="KoolReport is an intuitive and flexible Open Source PHP Reporting Framework for faster and easier data report delivery.">
    <meta name="author" content="KoolPHP Inc">
    <meta name="keywords" content="php reporting framework">
    <title>KoolReport Examples &amp; Demonstration</title>

    <link href="./assets/fontawesome/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/main.css" rel="stylesheet">

    <script type="text/javascript" src="./assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .fa-plus-square-o,
    .fa-minus-square-o {
        cursor: pointer;
    }
</style>
<script>
    function toggleExpandCollapse(i) {
        i.classList.toggle('fa-plus-square-o');
        i.classList.toggle('fa-minus-square-o');
    }

    function toggleExpandCollapseAll(i) {
        let div = i.parentElement.parentElement;
        let expandCollapseButtons = div.querySelectorAll('.expand-collapse');
        expandCollapseButtons.forEach(function(btn) {
            if (i.classList.contains('fa-plus-square-o')) {
                if (btn.classList.contains('fa-plus-square-o')) {
                    btn.click();
                }
            } else if (i.classList.contains('fa-minus-square-o')) {
                if (btn.classList.contains('fa-minus-square-o')) {
                    btn.click();
                }
            }
        })
        i.classList.toggle('fa-plus-square-o');
        i.classList.toggle('fa-minus-square-o');
    }
</script>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a id="baseUrl" class="navbar-brand" href="https://www.koolreport.com/examples">KoolReport Examples</a>
        <a id="repoUrl" class="navbar-brand" href="https://github.com/koolreport/examples-datasources">GitHub</a>
        <ul id="topMenu" class="navbar-nav mr-auto">

        </ul>
        <div class="my-2 my-lg-0">
            <a href="https://www.koolreport.com/get-koolreport-pro" class="btn-get-koolreort-pro btn btn-outline-success my-2 my-sm-0">Get KoolReport Pro</a>
        </div>
    </nav>
    <main class="container">
        <?php
        $root_url = ".";
        $reportJson = <<<EOD
            {
                "Core": {
                    "<i class='fa fa-pie-chart'></i>Google Charts": {
            "Collection": "/reports/google_charts/collection/",
            "Types": {
                "Column Chart": "/reports/google_charts/column_chart/",
                "Bar Chart": "/reports/google_charts/bar_chart/",
                "Pie Chart": "/reports/google_charts/pie_chart/",
                "Donut Chart": "/reports/google_charts/donut_chart/",
                "Area Chart": "/reports/google_charts/area_chart/",
                "Stepped Area Chart": "/reports/google_charts/stepped_area_chart/",
                "Line Chart": "/reports/google_charts/line_chart/",
                "Geo Chart": "/reports/google_charts/geo_chart/",
                "Gauge Chart": "/reports/google_charts/gauge_chart/",
                "Histogram Chart": "/reports/google_charts/histogram_chart/",
                "Timeline Chart": "/reports/google_charts/timeline_chart/",
                "Combo Chart": "/reports/google_charts/combo_chart/",
                "Pareto Chart": "/reports/google_charts/pareto_chart/",
                "Sankey": "/reports/google_charts/sankey/",
                "Scatter Chart": "/reports/google_charts/scatter_chart/",
                "TreeMap": "/reports/google_charts/treemap/",
                "Color Scheme": "/reports/google_charts/color_scheme/"
            },
            "Column Chart": {
                "Basic": "/reports/google_charts/column_chart/basic",
                "Custom Colors": "/reports/google_charts/column_chart/custom_colors",
                "Custom Axis": "/reports/google_charts/column_chart/custom_axis",
                "Stacked Columns": "/reports/google_charts/column_chart/stacked_columns",
                "Trendlines": "/reports/google_charts/column_chart/trendlines"
            },
            "Bar Chart": {
                "Basic": "/reports/google_charts/bar_chart/basic",
                "Custom Colors": "/reports/google_charts/bar_chart/custom_colors",
                "Custom Axis": "/reports/google_charts/bar_chart/custom_axis",
                "Stacked Bars": "/reports/google_charts/bar_chart/stacked_bars"
            },
            "Pie Chart": {
                "Basic": "/reports/google_charts/pie_chart/basic",
                "Making a 3D": "/reports/google_charts/pie_chart/making_a_3d",
                "Rotating": "/reports/google_charts/pie_chart/rotating",
                "Exploding a Slice": "/reports/google_charts/pie_chart/exploding_a_slice",
                "Slice Visibility Threshold": "/reports/google_charts/pie_chart/slice_visibility_threshold"
            },
            "Donut Chart": {
                "Basic": "/reports/google_charts/donut_chart/basic"
            },
            "Area Chart": {
                "Basic": "/reports/google_charts/area_chart/basic",
                "Stacked Areas": "/reports/google_charts/area_chart/stacked_areas"
            },
            "Stepped Area Chart": {
                "Basic": "/reports/google_charts/stepped_area_chart/basic",
                "Stacked": "/reports/google_charts/stepped_area_chart/stacked",
                "Some Common Options": "/reports/google_charts/stepped_area_chart/some_common_options"
            },
            "Line Chart": {
                "Basic": "/reports/google_charts/line_chart/basic",
                "Curving": "/reports/google_charts/line_chart/curving",
                "Custom Background Colors": "/reports/google_charts/line_chart/custom_background_colors",
                "Custom Axis": "/reports/google_charts/line_chart/custom_axis",
                "Crosshairs": "/reports/google_charts/line_chart/crosshairs",
                "Trendlines": "/reports/google_charts/line_chart/trendlines",
                "Custom Line Styles": "/reports/google_charts/line_chart/custom_line_styles"
            },
            "Geo Chart": {
                "Region": "/reports/google_charts/geo_chart/region"
            },
            "Histogram Chart": {
                "Basic": "/reports/google_charts/histogram_chart/basic"
            },
            "Timeline Chart": {
                "Basic": "/reports/google_charts/timeline_chart/basic",
                "Labeling the bars": "/reports/google_charts/timeline_chart/labeling_the_bars"
            },
            "Sankey": {
                "Basic": "/reports/google_charts/sankey/basic",
                "Multilevel": "/reports/google_charts/sankey/multilevel",
                "Controlling Colors": "/reports/google_charts/sankey/controlling_colors",
                "Custom Labels": "/reports/google_charts/sankey/custom_labels",
                "Adjusting Nodes": "/reports/google_charts/sankey/adjusting_nodes"
            },
            "Scatter Chart": {
                "Basic": "/reports/google_charts/scatter_chart/basic",
                "Custom Points": "/reports/google_charts/scatter_chart/custom_points",
                "Linear Trendlines": "/reports/google_charts/scatter_chart/linear_trendlines"
            },
            "Bubble Chart": {
                "Basic": "/reports/google_charts/bubble_chart/basic",
                "Color By Number": "/reports/google_charts/bubble_chart/color_by_numbers",
                "Custom Labels": "/reports/google_charts/bubble_chart/custom_labels"
            },
            "Advanced": {
                "Multi Annotation": "/reports/google_charts/multi_annotation/"
            }
        }
                }
            }        
        EOD;

        $menu = json_decode($reportJson, true);
        foreach ($menu as $section_name => $section) {
        ?>
            <h4 class="section-header"><?php echo $section_name; ?></h4>
            <div class="row">
                <?php
                foreach ($section as $group_name => $group) {
                    $hasChildArray = false;
                    foreach($group as $sname=>$surl) {
                        if(is_array($surl)) {
                            $hasChildArray = true;
                            break;
                        }
                    }
                ?>
                    <div class="col-md-3 example-group col-sm-6">
                        <h5>
                            <?php if ($hasChildArray) { ?>
                                <i class='fa fa-minus-square-o' data-toggle="collapse" onclick="toggleExpandCollapseAll(this);"></i>
                            <?php } ?>
                            <?php echo (strpos($group_name, "</i>") > 0) ? $group_name : "<i class='icon-layers'></i>$group_name"; ?></h5>
                        <ul class="list-unstyled">
                            <?php
                            foreach ($group as $sname => $surl) {
                                if (is_string($surl)) {
                            ?>
                                    <li><a href="<?php echo $root_url . $surl; ?>"><?php echo $sname; ?></a></li>
                                <?php
                                } else {
                                    $idName = $sname;
                                    $idName = str_replace(" ", "", $idName);
                                    $idName = str_replace("/", "", $idName);
                                    $idName = str_replace("&", "", $idName);
                                ?>
                                    <li>
                                        <strong><i class='fa fa-minus-square-o expand-collapse' data-toggle="collapse" data-target="#<?php echo $idName; ?>" onclick="toggleExpandCollapse(this);"></i> <?php echo $sname; ?></strong>
                                        <ul class="list-unstyled collapse show" id="<?php echo $idName; ?>">
                                            <?php
                                            foreach ($surl as $tname => $turl) {
                                            ?>
                                                <li><a href="<?php echo $root_url . $turl; ?>"><?php echo $tname; ?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
    </main>
</body>

</html>