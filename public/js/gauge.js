var root5 = am5.Root.new("chartdiv4");

root5._logo.dispose();
// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root5.setThemes([
  am5themes_Animated.new(root5)
]);

// https://www.amcharts.com/docs/v5/charts/radar-chart/
var chart5 = root5.container.children.push(
  am5radar.RadarChart.new(root5, {
    panX: false,
    panY: false,
    startAngle: 180,
    endAngle: 360
  })
);

// Create axis and its renderer
// https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
var axisRenderer5 = am5radar.AxisRendererCircular.new(root5, {
  innerRadius: -20,
  strokeOpacity: 1,
  strokeWidth: 15,
  strokeGradient: am5.LinearGradient.new(root5, {
    rotation: 0,
    stops: [

      {
        color: am5.color(0xff0000)
      },
      {
        color: am5.color(0xff0000)
      },
      //{ color: am5.color(0xfb7116) },
      {
        color: am5.color(0xf6d32b)
      },
      {
        color: am5.color(0xf4fb16)
      },
      {
        color: am5.color(0x19d228)
      }
    ]
  })
});

var xAxis5 = chart5.xAxes.push(
  am5xy.ValueAxis.new(root5, {
    maxDeviation: 0,
    min: max5,
    max: min5,
    strictMinMax: true,
    renderer: axisRenderer5
  })
);

// Add clock hand
// https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
var axisDataItem5 = xAxis5.makeDataItem({});
axisDataItem5.set("value", 0);

var bullet5 = axisDataItem5.set("bullet", am5xy.AxisBullet.new(root5, {
  sprite: am5radar.ClockHand.new(root5, {
    radius: am5.percent(99)
  })
}));

xAxis5.createAxisRange(axisDataItem5);

axisDataItem5.get("grid").set("visible", false);

// Make stuff animate on load
chart5.appear(1000, 100);
