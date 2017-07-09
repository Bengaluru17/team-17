<?php
//cghange databse name
$db = mysqli_connect("localhost","root","admin","tempbase");
$query = "select sum(deAMT) as y, sum(pAMT) as x from donor , paid  where donor.dmonyr = paid.pmonyr group by (pmonyr)" ;
$result = mysqli_query($db,$query);
$num = mysqli_num_rows($result) ;

$x  ;
$y  ;
$count = 0;


while($row = mysqli_fetch_array($result) ){

    $x[$count] = $row['x'] ;
    $y[$count] = $row['y'] ;

    $count = $count +1 ;

 }
 echo '
 <!DOCTYPE html>
 <html>
   <head>
     <meta http-equiv="Content-type" content="text/html; charset=utf-8">
     <title>Testing Pie Chart</title>
     <script type="text/javascript" src="http://mbostock.github.com/d3/d3.js?2.1.3"></script>
     <script type="text/javascript" src="http://mbostock.github.com/d3/d3.geom.js?2.1.3"></script>
     <script type="text/javascript" src="http://mbostock.github.com/d3/d3.layout.js?2.1.3"></script>

     <style type="text/css">
         .slice text {
             font-size: 16pt;
             font-family: Arial;
         }
     </style>
   </head>
   <body>
     <script type="text/javascript">

     var w = 700,                        //width
     h = 300,                            //height
     r = 100,                            //radius
     color = d3.scale.category20c();     //builtin range of colors

     data = [{"label":"one", "value":20},
             {"label":"two", "value":50}];

     var vis = d3.select("body")
         .append("svg:svg")              //create the SVG element inside the <body>
         .data([data])                   //associate our data with the document
             .attr("width", w)           //set the width and height of our visualization (these will be attributes of the <svg> tag
             .attr("height", h)
         .append("svg:g")                //make a group to hold our pie chart
             .attr("transform", "translate(" + r + "," + r + ")")    //move the center of the pie chart from 0, 0 to radius, radius

     var arc = d3.svg.arc()              //this will create <path> elements for us using arc data
         .outerRadius(r);

     var pie = d3.layout.pie()           //this will create arc data for us given a list of values
         .value(function(d) { return d.value; });    //we must tell it out to access the value of each element in our data array

     var arcs = vis.selectAll("g.slice")     //this selects all <g> elements with class slice (there arent any yet)
         .data(pie)                          //associate the generated pie data (an array of arcs, each having startAngle, endAngle and value properties)
         .enter()                            //this will create <g> elements for every "extra" data element that should be associated with a selection. The result is creating a <g> for every object in the data array
             .append("svg:g")                //create a group to hold each slice (we will have a <path> and a <text> element associated with each slice)
                 .attr("class", "slice");    //allow us to style things in the slices (like text)

         arcs.append("svg:path")
                 .attr("fill", function(d, i) { return color(i); } ) //set the color for each slice to be chosen from the color function defined above
                 .attr("d", arc);                                    //this creates the actual SVG path using the associated data (pie) with the arc drawing function

         arcs.append("svg:text")                                     //add a label to each slice
                 .attr("transform", function(d) {                    //set the labels origin to the center of the arc
                 //we have to make sure to set these before calling arc.centroid
                 d.innerRadius = 0;
                 d.outerRadius = r;
                 return "translate(" + arc.centroid(d) + ")";        //this gives us a pair of coordinates like [50, 50]
             })
             .attr("text-anchor", "middle")                          //center the text on its origin
             .text(function(d, i) { return data[i].label; });        //get the label from our original data array

     </script>
   </body>
 </html>

 ';

 ?>
