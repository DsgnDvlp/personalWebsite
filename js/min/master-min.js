$(document).ready(function(){
//    $(".languageBar").hover(function(){
//        $("languageBar").toggleClass("opened");
//    },function(){
//        $("languageBar").toggleClass("opened");
//    });
//
//    $(".languageBar").click(function((){
//        if('ontouchstart' in document.documentElement){
//            alert("touch");
//        }
//    }));
	$("body").addClass("loaded");
});

function switchLanguage(language){
    $.ajax({
        url: "switchLanguage.php",
        type: "post",
        data:{
            language: language
        }
    }).done(function(){
        location.reload();
    });
}

function animateBorderDivThird(selector, duration, delay){
	var $element = $(selector);
	var width = $element.width();
	var height = $element.height();
	var borderWidth = parseInt($element.css("border-top-width"));

	$element.parent().append('<svg id="t" xmlns="http://www.w3.org/2000/svg"/>');
	var svg = $("#t");
	svg.attr("class", $element[0].className+ " svgElement");
	svg.css("stroke", $element.css("border-top-color"));
	svg.css("stroke-width", borderWidth + "px");
	svg.css("width", (width + (borderWidth * 2))+"px");
	svg.css("height", (height + (borderWidth * 2))+"px");
	var start = (borderWidth/2);

	var path = makeSVG('path', {d:
		"M"+((width+borderWidth + start)/2) +" "+start+
		" L"+((width+borderWidth + start)/2) +" "+start+
		" L"+ start+" "+start+
		" L"+ start +" "+(height + borderWidth + start) +
		" L"+((width+borderWidth + start)) + " " + (height + borderWidth + start)+
		" L"+((width+borderWidth + start)) + " " + start +
		" L"+((width+borderWidth + start)/2) + " " + start
	});
	svg.append(path);

	animateSvg("#t", duration, delay);
}

function animateBorderDiv(selector, duration, delay, id){
	var $element = $(selector);
	var width = $element.width();
	var height = $element.height();
	var borderWidth = parseInt($element.css("border-top-width"));

	$element.parent().append('<svg id="'+id+'" xmlns="http://www.w3.org/2000/svg"/>');
	var svg = $("#"+id);
	svg.attr("class", $element[0].className+ " svgElement");
	svg.css("stroke", $element.css("border-top-color"));
	svg.css("stroke-width", borderWidth + "px");
	svg.css("width", (width + (borderWidth * 2))+"px");
	svg.css("height", (height + (borderWidth * 2))+"px");
	var start = (borderWidth/2);

	var path = makeSVG('path', {d: "M"+((width+borderWidth + start)/2) +" "+start+" L"+((width+borderWidth + start)/2) +" "+start+" L"+(width+borderWidth + start)+" "+start+" L"+(width + borderWidth + start)+" "+(height + borderWidth + start) + " L"+((width+borderWidth + start)/2) + " " + (height + borderWidth + start)});
	svg.append(path);

	var path = makeSVG('path', {d: "M"+((width+borderWidth + start)/2) +" "+start+" L"+((width+borderWidth + start)/2) +" "+start+" L"+ start+" "+start+" L"+ start +" "+(height + borderWidth + start) + " L"+((width+borderWidth + start)/2) + " " + (height + borderWidth + start)});
	svg.append(path);

	animateSvg("#"+id, duration, delay);
}

// ANIMATION SVG UTILITY
function animateSvg(parentElementSelector, duration, delay, callBackFunction){
	$(parentElementSelector+" *").each(function(index, element){

		if(element.getTotalLength){
			var length = element.getTotalLength();
		}else{
			if(element.tagName == "rect")
				var length = iGenius_utility.getRectLength(element);
			else
				var length = iGenius_utility.convertPolyToPath(element);
		}

		$(element).attr("stroke-dasharray", length + " " + length);
		$(element).attr("stroke-dashoffset", length);
	});

	setTimeout(function(){
		$(parentElementSelector+" *").each(function(index, element){
			element.style.transition = element.style.WebkitTransition =
				'stroke-dashoffset '+duration+' ease-in-out '+ delay;
			$(element).attr("stroke-dashoffset", 0);
		});
		if(callBackFunction){
			callBackFunction();
		}
	}, 10);

	var interval = parseFloat(duration.substring(0, duration.indexOf("s")))*1000;
	var delayInt = delay != "" ? parseFloat(delay.substring(0, delay.indexOf("s")))*1000 : 0;

	setTimeout(function(){
		$(document).trigger("animationFinished");
	}, interval + delayInt);
}


function makeSVG(tag, attrs) {
    var el= document.createElementNS('http://www.w3.org/2000/svg', tag);
    for (var k in attrs)
        el.setAttribute(k, attrs[k]);
    return el;
}


