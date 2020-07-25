import Highcharts from "highcharts/highcharts.js";

$(document).ready(function () {
    var order = $("#lion-order-char").data("order");
    if(order)
    {
        var listOfValue = [];
        var listOfYear = [];
        order.forEach(function (element) {
            listOfYear.push(element.date);
            listOfValue.push(element.id);
        });
        var chart = Highcharts.chart("lion-order-char", {
            title: {
                text: "Orders by years"
            },

            subtitle: {
                text: "Plain"
            },

            xAxis: {
                categories: listOfYear
            },

            series: [
                {
                    type: "column",
                    colorByPoint: true,
                    data: listOfValue,
                    showInLegend: false
                }
            ]
        });
    }


    $("#plain").click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: false
            },
            subtitle: {
                text: "Plain"
            }
        });
    });

    $("#inverted").click(function () {
        chart.update({
            chart: {
                inverted: true,
                polar: false
            },
            subtitle: {
                text: "Inverted"
            }
        });
    });

    $("#polar").click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: true
            },
            subtitle: {
                text: "Polar"
            }
        });
    });
});

$(document).ready(function () {

    var productBuy = $("#dailyorder").data("dailyorder");
    var chartData = [];
    if(productBuy)
    {
        productBuy.forEach(function (element) {
            var ele = { name: element.type, y: parseFloat(element.y) };
            chartData.push(ele);
        });

        Highcharts.chart("dailyorder", {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: "pie"
            },
            title: {
                text: "Daily order"
            },
            tooltip: {
                pointFormat: "{series.type}: <b>{point.percentage:.1f}%</b>"
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: "pointer",
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [
                {
                    name: "Brands",
                    colorByPoint: true,
                    data: chartData
                }
            ]
        });
    }

});
