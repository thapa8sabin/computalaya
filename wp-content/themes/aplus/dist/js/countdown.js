// Set the websites launch day - also the display format is set here
$(function () {
  var austDay = new Date(year,month-1,day,hours,minutes,seconds,milliseconds);
	$('#countdown').countdown({until: austDay, format: 'DHMS'});
  });

// note that month is 0-based, like in the Date object. Adjust if necessary.
function isLeap(year, month) {
    var isLeap = ((year % 4) == 0 && ((year % 100) != 0 || (year % 400) == 0));
    return [31, (isLeap ? 29 : 28), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][month];
}
            
(function(window) {
    // Grab the canvas and it's context
    var canvas = window.document.getElementById("sec"); 
    var a=($(window).width()<767)?{width:156,height:156}:{width:156,height:156};
    $("#counter canvas").attr(a);
        context = canvas.getContext("2d"),
        requestAnimationFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame;
    // Clear the canvas
    function clearCanvas() {
        context.clearRect(0, 0, canvas.clientWidth, canvas.clientHeight);
    }
    // Draw a ring with a specified radius, width, and fill
    function drawRing(x, y, outsideRadius, ringWidth, percentFilled, rotationAngle) {
        context.beginPath();
        context.arc(x, y, outsideRadius - ringWidth / 2, (rotationAngle + 2 * Math.PI) - 2 * Math.PI * percentFilled, rotationAngle, true);
        context.lineWidth = ringWidth;
        context.stroke();
    }
    // Draw the clock
    var startValue = 0; 
    function redrawClock() {
        // time      
        var currentdate = new Date(); 
            millisec = currentdate.getMilliseconds(),
            sec = currentdate.getSeconds(),
            min = currentdate.getMinutes(),
            hr = currentdate.getHours(),
            animatedSeconds = (sec + millisec / 1000) + Math.PI / 30;
        
        // Gimme a transparent canvas to work with
        clearCanvas();      
     
	    // Draw the second ring   
        context.strokeStyle = strokeColor;
        drawRing(78, 78, 74, 2, 0, 2 * Math.PI, false);       
        // Translucency
        context.strokeStyle = animationColor;
        context.lineCap = "square"; 
        drawRing(78, 78, 75, 4, (animatedSeconds) / 60, 3 / 2 * Math.PI, false);       
                  
        requestAnimationFrame(redrawClock);
    }
    requestAnimationFrame(redrawClock);
}(window));

/*=================================================================================================================================================*/

(function(window) {
    // Grab the canvas and it's context
    var canvas = window.document.getElementById("min"),
        context = canvas.getContext("2d"),
        requestAnimationFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame;
    // Clear the canvas
    function clearCanvas() {
        context.clearRect(0, 0, canvas.clientWidth, canvas.clientHeight);
    }
    // Draw a ring with a specified radius, width, and fill
    function drawRing(x, y, outsideRadius, ringWidth, percentFilled, rotationAngle) {
        context.beginPath();
        context.arc(x, y, outsideRadius - ringWidth / 2, (rotationAngle - 2 * Math.PI) + 2 * Math.PI * percentFilled, rotationAngle, true);
        context.lineWidth = ringWidth;
        context.stroke();
    }
    // Draw the clock
    var startValue = 0;
    function redrawClock() {
        // time
        var currentdate = new Date();
        var timestamp = new Date(year,month-1,day,hours,minutes,seconds,milliseconds), 
            diffMs = (timestamp - currentdate), // milliseconds between currentdate and countdown
            diffDays = Math.floor(diffMs / 86400000), // days
            diffHrs = Math.floor((diffMs % 86400000) / 3600000), // hours
            diffMins = Math.floor(((diffMs % 86400000) % 3600000) / 60000); // minutes
            diffSecs = Math.floor(((diffMs % 86400000) % 3600000 % 60000) / 1000 ); // seconds
        // Gimme a transparent canvas to work with
        clearCanvas();
    
        context.strokeStyle = strokeColor;
        drawRing(78, 78, 74, 2, 0, 2 * Math.PI, false); 
        // Translucency
        context.strokeStyle = animationColor;
        drawRing(78, 78, 75, 4, (diffMins) / 60,  3 / 2 * Math.PI, false);
        
        requestAnimationFrame(redrawClock);
    }
    requestAnimationFrame(redrawClock);
}(window));

/*=================================================================================================================================================*/

(function(window) {
    // Grab the canvas and it's context
    var canvas = window.document.getElementById("hour"),
        context = canvas.getContext("2d"),
        requestAnimationFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame;
    // Clear the canvas
    function clearCanvas() {
        context.clearRect(0, 0, canvas.clientWidth, canvas.clientHeight);
    }
    // Draw a ring with a specified radius, width, and fill
    function drawRing(x, y, outsideRadius, ringWidth, percentFilled, rotationAngle) {
        context.beginPath();
        context.arc(x, y, outsideRadius - ringWidth / 2, (rotationAngle - 2 * Math.PI) + 2 * Math.PI * percentFilled, rotationAngle, true);
        context.lineWidth = ringWidth;
        context.stroke();
    }
    // Draw the clock
    var startValue = 0;
    function redrawClock() {
        // time
        var currentdate = new Date();
        var timestamp = new Date(year,month-1,day,hours,minutes,seconds,milliseconds), 
            diffMs = (timestamp - currentdate), // milliseconds between currentdate and countdown
            diffDays = Math.floor(diffMs / 86400000), // days
            diffHrs = Math.floor((diffMs % 86400000) / 3600000), // hours
            diffMins = Math.floor(((diffMs % 86400000) % 3600000) / 60000); // minutes
            diffSecs = Math.floor(((diffMs % 86400000) % 3600000 % 60000) / 1000 ); // seconds

        // Gimme a transparent canvas to work with
        clearCanvas();
       
        context.strokeStyle = strokeColor;
        drawRing(78, 78, 74, 2, 0, 2 * Math.PI, false);
        // Translucency
        context.strokeStyle = animationColor;
        drawRing(78, 78, 75, 4, (diffHrs) / 24,  3 / 2 * Math.PI, false); 	
     
        requestAnimationFrame(redrawClock);
    }
    requestAnimationFrame(redrawClock);
}(window));

/*=================================================================================================================================================*/

(function(window) {
    // Grab the canvas and it's context
    var canvas = window.document.getElementById("days"),
        context = canvas.getContext("2d"),
        requestAnimationFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame;
    // Clear the canvas
    function clearCanvas() {
        context.clearRect(0, 0, canvas.clientWidth, canvas.clientHeight);
    }
    // Draw a ring with a specified radius, width, and fill
    function drawRing(x, y, outsideRadius, ringWidth, percentFilled, rotationAngle) {
        context.beginPath();
        context.arc(x, y, outsideRadius - ringWidth / 2, (rotationAngle - 2 * Math.PI) + 2 * Math.PI * percentFilled, rotationAngle, true);
        context.lineWidth = ringWidth;
        context.stroke();
    }
    // Draw the clock
    var startValue = 0;
    function redrawClock() {
        // time
        var currentdate = new Date();
        var timestamp = new Date(year,month-1,day,hours,minutes,seconds,milliseconds), 
            diffMs = (timestamp - currentdate), // milliseconds between currentdate and countdown
            diffDays = Math.floor(diffMs / 86400000), // days
            diffHrs = Math.floor((diffMs % 86400000) / 3600000), // hours
            diffMins = Math.floor(((diffMs % 86400000) % 3600000) / 60000), // minutes
            diffSecs = Math.floor(((diffMs % 86400000) % 3600000 % 60000) / 1000 ), // seconds
            diffYears = (year - currentdate.getFullYear());
        // Gimme a transparent canvas to work with
        clearCanvas();
     
        context.strokeStyle = strokeColor;
        drawRing(78, 78, 74, 2, 0, 2 * Math.PI, false);
        // Translucency
        context.strokeStyle = animationColor;
        if ((diffDays <= 365) && (diffYears = 0)) {
        drawRing(78, 78, 75, 4, (diffDays) / (365.25),  3 / 2 * Math.PI, false);    	
        }    
        else {
        drawRing(78, 78, 75, 4, (diffDays) / ((diffYears + 1) * 365.25),  3 / 2 * Math.PI, false);	
        }
        
        requestAnimationFrame(redrawClock);
    }
    requestAnimationFrame(redrawClock);
}(window));