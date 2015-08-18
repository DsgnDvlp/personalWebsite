$(document).ready(function(){
    rotateText(".foo", 2, 2);
});


function rotateText(selector, duration, pause){
    var elements = jQuery(selector).length;
    var durationAnimation = duration + pause;
    var totalDuration = durationAnimation * elements;

    jQuery(selector).each(function(index, element){
    	jQuery(element).css({
    		"-webkit-animation-duration":  totalDuration + "s",
    		"-webkit-animation-name": "test",
    		"-webkit-animation-iteration-count": "infinite",
    		"-webkit-animation-timing-function": "ease",
    		"-webkit-animation-delay": (durationAnimation * index) +"s",
    		"animation-duration":  totalDuration + "s",
    		"animation-name": "test",
    		"animation-iteration-count": "infinite",
    		"animation-timing-function": "ease",
    		"animation-delay": (durationAnimation * index) +"s"
    	});
    });
    var endAnimation = durationAnimation/totalDuration * 100;
    var pauseAnimation = pause/totalDuration * 100;
    var middleAnimation = duration/totalDuration * 100 / 2;
    var cssAnimation = document.createElement('style');
    cssAnimation.type = 'text/css';
    var rules = document.createTextNode('@keyframes test {'+
    	'0% { opacity: 0; top: -10px; }'+
    	middleAnimation + '% { opacity: 1; top: 0px; }'+
    	(pauseAnimation + middleAnimation) + '% { opacity: 1; top: 0px; }'+
    	endAnimation + '% { opacity: 0; top: 10px; }'+
    	'}');
    var rules2 = document.createTextNode('@-webkit-keyframes test {'+
    	'0% { opacity: 0; top: -10px; }'+
    	middleAnimation + '% { opacity: 1; top: 0px; }'+
    	(pauseAnimation + middleAnimation) + '% { opacity: 1; top: 0px; }'+
    	endAnimation + '% { opacity: 0; top: 10px; }'+
    	'}');
    cssAnimation.appendChild(rules);
    cssAnimation.appendChild(rules2);
    document.getElementsByTagName("head")[0].appendChild(cssAnimation);
    }
