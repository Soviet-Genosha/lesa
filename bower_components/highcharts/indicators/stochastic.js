/*
 Highstock JS v9.0.1 (2021-02-15)

 Indicator series type for Highstock

 (c) 2010-2021 Pawe Fus

 License: www.highcharts.com/license
*/
(function(a){"object"===typeof module&&module.exports?(a["default"]=a,module.exports=a):"function"===typeof define&&define.amd?define("highcharts/indicators/stochastic",["highcharts","highcharts/modules/stock"],function(e){a(e);a.Highcharts=e;return a}):a("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(a){function e(a,c,g,b){a.hasOwnProperty(c)||(a[c]=b.apply(null,g))}a=a?a._modules:{};e(a,"Mixins/MultipleLines.js",[a["Core/Globals.js"],a["Core/Utilities.js"]],function(a,c){var g=c.defined,
b=c.error,v=c.merge,e=a.seriesTypes.sma;return{pointArrayMap:["top","bottom"],pointValKey:"top",linesApiNames:["bottomLine"],getTranslatedLinesNames:function(f){var a=[];(this.pointArrayMap||[]).forEach(function(b){b!==f&&a.push("plot"+b.charAt(0).toUpperCase()+b.slice(1))});return a},toYData:function(a){var f=[];(this.pointArrayMap||[]).forEach(function(b){f.push(a[b])});return f},translate:function(){var a=this,b=a.pointArrayMap,c=[],h;c=a.getTranslatedLinesNames();e.prototype.translate.apply(a,
arguments);a.points.forEach(function(f){b.forEach(function(b,w){h=f[b];null!==h&&(f[c[w]]=a.yAxis.toPixels(h,!0))})})},drawGraph:function(){var a=this,c=a.linesApiNames,k=a.points,h=k.length,m=a.options,d=a.graph,w={options:{gapSize:m.gapSize}},t=[],p;a.getTranslatedLinesNames(a.pointValKey).forEach(function(a,b){for(t[b]=[];h--;)p=k[h],t[b].push({x:p.x,plotX:p.plotX,plotY:p[a],isNull:!g(p[a])});h=k.length});c.forEach(function(d,c){t[c]?(a.points=t[c],m[d]?a.options=v(m[d].styles,w):b('Error: "There is no '+
d+' in DOCS options declared. Check if linesApiNames are consistent with your DOCS line names." at mixin/multiple-line.js:34'),a.graph=a["graph"+d],e.prototype.drawGraph.call(a),a["graph"+d]=a.graph):b('Error: "'+d+" doesn't have equivalent in pointArrayMap. To many elements in linesApiNames relative to pointArrayMap.\"")});a.points=k;a.options=m;a.graph=d;e.prototype.drawGraph.call(a)}}});e(a,"Mixins/ReduceArray.js",[],function(){return{minInArray:function(a,c){return a.reduce(function(a,b){return Math.min(a,
b[c])},Number.MAX_VALUE)},maxInArray:function(a,c){return a.reduce(function(a,b){return Math.max(a,b[c])},-Number.MAX_VALUE)},getArrayExtremes:function(a,c,e){return a.reduce(function(a,g){return[Math.min(a[0],g[c]),Math.max(a[1],g[e])]},[Number.MAX_VALUE,-Number.MAX_VALUE])}}});e(a,"Stock/Indicators/Stochastic/StochasticIndicator.js",[a["Mixins/MultipleLines.js"],a["Mixins/ReduceArray.js"],a["Core/Series/SeriesRegistry.js"],a["Core/Utilities.js"]],function(a,c,e,b){var g=this&&this.__extends||function(){var a=
function(b,d){a=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(a,b){a.__proto__=b}||function(a,b){for(var d in b)b.hasOwnProperty(d)&&(a[d]=b[d])};return a(b,d)};return function(b,d){function c(){this.constructor=b}a(b,d);b.prototype=null===d?Object.create(d):(c.prototype=d.prototype,new c)}}(),x=e.seriesTypes.sma,f=b.extend,v=b.isArray,k=b.merge;b=function(a){function b(){var b=null!==a&&a.apply(this,arguments)||this;b.data=void 0;b.options=void 0;b.points=void 0;return b}g(b,a);
b.prototype.init=function(){e.seriesTypes.sma.prototype.init.apply(this,arguments);this.options=k({smoothedLine:{styles:{lineColor:this.color}}},this.options)};b.prototype.getValues=function(a,b){var d=b.periods[0];b=b.periods[1];var f=a.xData,g=(a=a.yData)?a.length:0,k=[],h=[],q=[],r=null,l;if(!(g<d)&&v(a[0])&&4===a[0].length){for(l=d-1;l<g;l++){var n=a.slice(l-d+1,l+1);var m=c.getArrayExtremes(n,2,1);var u=m[0];n=a[l][3]-u;u=m[1]-u;n=n/u*100;h.push(f[l]);q.push([n,null]);l>=d-1+(b-1)&&(r=e.seriesTypes.sma.prototype.getValues.call(this,
{xData:h.slice(-b),yData:q.slice(-b)},{period:b}),r=r.yData[0]);k.push([f[l],n,r]);q[q.length-1][1]=r}return{values:k,xData:h,yData:q}}};b.defaultOptions=k(x.defaultOptions,{params:{periods:[14,3]},marker:{enabled:!1},tooltip:{pointFormat:'<span style="color:{point.color}">\u25cf</span><b> {series.name}</b><br/>%K: {point.y}<br/>%D: {point.smoothed}<br/>'},smoothedLine:{styles:{lineWidth:1,lineColor:void 0}},dataGrouping:{approximation:"averages"}});return b}(x);f(b.prototype,{nameComponents:["periods"],
nameBase:"Stochastic",pointArrayMap:["y","smoothed"],parallelArrays:["x","y","smoothed"],pointValKey:"y",linesApiNames:["smoothedLine"],drawGraph:a.drawGraph,getTranslatedLinesNames:a.getTranslatedLinesNames,translate:a.translate,toYData:a.toYData});e.registerSeriesType("stochastic",b);"";return b});e(a,"masters/indicators/stochastic.src.js",[],function(){})});
//# sourceMappingURL=stochastic.js.map