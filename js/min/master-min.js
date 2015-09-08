$(document).ready(function(){
	$(".animsition").animsition({
		inClass: 'fade-in',
		outClass: 'fade-out-right-sm',
		inDuration: 1500,
		outDuration: 600,
		linkElement: "a:not([target='_blank']):not([href^=#])",
		loading: true,
		loadingParentElement: "body",
		loadingClass: 'animsition-loading',
		unSupportCss:[
			'animation-duration',
			'-webkit-animation-duration',
			'-o-animation-duration'
		],
		overlay: false
	}).one('animsition.end', function(){
	});

// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
|| /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))
)
{
	$(".mobileBlocker").css("display", "flex");
	$(".mobileBlocker .countdown").countdown("2015/09/20", function(event) {
        $(this).text(
        event.strftime('%D:%H:%M:%S')
        );
    });


}

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
	svg.attr("class", $element[0].className+ " svgElement");
	svg.css("stroke", $element.css("border-top-color"));
	svg.css("stroke-width", borderWidth + "px");
	svg.css("width", (width + (borderWidth * 2))+"px");
	svg.css("height", (height + (borderWidth * 2))+"px");
	svg.css("position", "absolute");
	svg.css("top", 0);
	svg.css("right", 0);
	svg.css("left", 0);
	svg.css("z-index", 9);
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
	svg.css("position", "absolute");
	svg.css("top", 0);
	svg.css("right", 0);
	svg.css("left", 0);
	svg.css("z-index", 9);
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


