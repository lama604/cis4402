/*
@version 1.0: mod_S5_imagefader Javascript
Author: Shape 5 - Professional Template Community
Available for download at www.shape5.com
Copyright Shape 5 LLC
*/

var s5_thumbchangeon_if = 0;
var s5_rotate_if = 0;


function next_if_1() {
s5_thumbchangeon_if = 1;
picture1('picture1');
s5_rotate_if = 1;
window.setTimeout('next_thumb_sa()',display_time);
}

function next_if_2() {
s5_thumbchangeon_if = 1;
picture2('picture2');
s5_rotate_if = 2;
window.setTimeout('next_thumb_sa()',display_time);
}

function next_if_3() {
s5_thumbchangeon_if = 1;
picture3('picture3');
s5_rotate_if = 3;
window.setTimeout('next_thumb_sa()',display_time);
}

function next_if_4() {
s5_thumbchangeon_if = 1;
picture4('picture4');
s5_rotate_if = 4;
window.setTimeout('next_thumb_sa()',display_time);
}

function next_if_5() {
s5_thumbchangeon_if = 1;
picture5('picture5');
s5_rotate_if = 5;
window.setTimeout('next_thumb_sa()',display_time);
}

function next_if_6() {
s5_thumbchangeon_if = 1;
picture6('picture6');
s5_rotate_if = 6;
window.setTimeout('next_thumb_sa()',display_time);
}

function next_if_7() {
s5_thumbchangeon_if = 1;
picture7('picture7');
s5_rotate_if = 7;
window.setTimeout('next_thumb_sa()',display_time);
}

function next_if_8() {
s5_thumbchangeon_if = 1;
picture8('picture8');
s5_rotate_if = 8;
window.setTimeout('next_thumb_sa()',display_time);
}

function next_if_9() {
s5_thumbchangeon_if = 1;
picture9('picture9');
s5_rotate_if = 9;
window.setTimeout('next_thumb_sa()',display_time);
}

function next_if_10() {
s5_thumbchangeon_if = 1;
picture10('picture10');
s5_rotate_if = 10;
window.setTimeout('next_thumb_sa()',display_time);
}


function next_thumb_sa() {
	s5_thumbchangeon_if = 0;
	if (s5_rotate_if == 1) { picture1(picture1);}	
	if (s5_rotate_if == 2) { picture2(picture2);}
	if (s5_rotate_if == 3) { picture3(picture3);}
	if (s5_rotate_if == 4) { picture4(picture4);}
	if (s5_rotate_if == 5) { picture5(picture5);}
	if (s5_rotate_if == 6) { picture6(picture6);}
	if (s5_rotate_if == 7) { picture7(picture7);}
	if (s5_rotate_if == 8) { picture8(picture8);}
	if (s5_rotate_if == 9) { picture9(picture9);}
	if (s5_rotate_if == 10) { picture10(picture10);}}	



function picture1(id) {
	s5_rotate_if = 1;
	sa_picture1_if_display();
	blendimage('blenddiv','blendimage', s5_picture1_if, tween_time)
    window.setTimeout('if_picture1_display_yes()',display_time);}
	function if_picture1_display_yes() {
		if (s5_rotate_if == 1) {picture1_next();}}
		
		
function picture2(id) {
	s5_rotate_if = 2;
	sa_picture2_if_display();
	blendimage('blenddiv','blendimage', s5_picture2_if, tween_time)
    window.setTimeout('if_picture2_display_yes()',display_time);}
	function if_picture2_display_yes() {
		if (s5_rotate_if == 2) {picture2_next();}}

function picture3(id) {
	s5_rotate_if = 3;
	sa_picture3_if_display();
	blendimage('blenddiv','blendimage', s5_picture3_if, tween_time)
    window.setTimeout('if_picture3_display_yes()',display_time);}
	function if_picture3_display_yes() {
		if (s5_rotate_if == 3) {picture3_next();}}
		
function picture4(id) {
	s5_rotate_if = 4;
	sa_picture4_if_display();
	blendimage('blenddiv','blendimage', s5_picture4_if, tween_time)
    window.setTimeout('if_picture4_display_yes()',display_time);}
	function if_picture4_display_yes() {
		if (s5_rotate_if == 4) {picture4_next();}}		
		
function picture5(id) {
	s5_rotate_if = 5;
	sa_picture5_if_display();
	blendimage('blenddiv','blendimage', s5_picture5_if, tween_time)
    window.setTimeout('if_picture5_display_yes()',display_time);}
	function if_picture5_display_yes() {
		if (s5_rotate_if == 5) {picture5_next();}}		
	
function picture6(id) {
	s5_rotate_if = 6;
	sa_picture6_if_display();
	blendimage('blenddiv','blendimage', s5_picture6_if, tween_time)
    window.setTimeout('if_picture6_display_yes()',display_time);}
	function if_picture6_display_yes() {
		if (s5_rotate_if == 6) {picture6_next();}}
		
function picture7(id) {
	s5_rotate_if = 7;
	sa_picture7_if_display();
	blendimage('blenddiv','blendimage', s5_picture7_if, tween_time)
    window.setTimeout('if_picture7_display_yes()',display_time);}
	function if_picture7_display_yes() {
		if (s5_rotate_if == 7) {picture7_next();}}

function picture8(id) {
	s5_rotate_if = 8;
	sa_picture8_if_display();
	blendimage('blenddiv','blendimage', s5_picture8_if, tween_time)
    window.setTimeout('if_picture8_display_yes()',display_time);}
	function if_picture8_display_yes() {
	if (s5_rotate_if == 8) {picture8_next();}}
	
function picture9(id) {
	s5_rotate_if = 9;
	sa_picture9_if_display();
	blendimage('blenddiv','blendimage', s5_picture9_if, tween_time)
    window.setTimeout('if_picture9_display_yes()',display_time);}
	function if_picture9_display_yes() {
	if (s5_rotate_if == 9) {picture9_next();}}

function picture10(id) {
	s5_rotate_if = 10;
	sa_picture10_if_display();
	blendimage('blenddiv','blendimage', s5_picture10_if, tween_time)
    window.setTimeout('if_picture10_display_yes()',display_time);}
	function if_picture10_display_yes() {
	if (s5_rotate_if == 10) {picture10_next();}}
	
function picture10_next(id) {
if (s5_thumbchangeon_if == 0) {
picture1('picture1');}}	
	
var is_ie/*@cc_on = {
  // quirksmode : (document.compatMode=="BackCompat"),
  version : parseFloat(navigator.appVersion.match(/MSIE (.+?);/)[1])
}@*/;

function opacity(id, opacStart, opacEnd, millisec) {
	//speed for each frame
	var speed = Math.round(millisec / 100);
	var timer = 0;
	//determine the direction for the blending, if start and end are the same nothing happens
	if(opacStart > opacEnd) {
		for(i = opacStart; i >= opacEnd; i--) {
			setTimeout("changeOpac(" + i + ",'" + id + "')",(timer * speed));
			timer++;
		}
	} else if(opacStart < opacEnd) {
		for(i = opacStart; i <= opacEnd; i++)
			{
			setTimeout("changeOpac(" + i + ",'" + id + "')",(timer * speed));
			timer++;
		}
	}
}

//change the opacity for different browsers
function changeOpac(opacity, id) {
	var object = document.getElementById(id).style; 
	object.opacity = (opacity / 100);
	object.MozOpacity = (opacity / 100);
	object.KhtmlOpacity = (opacity / 100);
	object.filter = "alpha(opacity=" + opacity + ")";
}

function blendimage(divid, imageid, imagefile, millisec) {
	var speed = Math.round(millisec / 100);
	var timer = 0;
	
	//set the current image as background
	document.getElementById(divid).style.backgroundImage = "url(" + document.getElementById(imageid).src + ")";
	
	//make image transparent
	changeOpac(0, imageid);
	
	//make new image
	document.getElementById(imageid).src = imagefile;

	//fade in image
	for(i = 0; i <= 100; i++) {
		setTimeout("changeOpac(" + i + ",'" + imageid + "')",(timer * speed));
		timer++;
	}
}

function currentOpac(id, opacEnd, millisec) {
	//standard opacity is 100
	var currentOpac = 100;
	
	//if the element has an opacity set, get it
	if(document.getElementById(id).style.opacity < 100) {
		currentOpac = document.getElementById(id).style.opacity * 100;
	}

	//call for the function that changes the opacity
	opacity(id, currentOpac, opacEnd, millisec)
}



/* Hide and Show Descriptions */
	
		function sa_picture1_click() {
		if (picture1target == "_top") {
				window.location.href=picture1link;
				}
			else {
				window.open(picture1link);
			}
		}

		function sa_picture1_if_display() {
		s5_currentslide_if = 1;
		if (picture1link == "") {
			document.getElementById("blendimage").style.cursor = "default";
			document.getElementById("blendimage").onclick = "";
		}
		if (picture1link != "") {
			document.getElementById("blendimage").style.cursor = "pointer";
			document.getElementById("blendimage").onclick = sa_picture1_click;
		}

		if (s5_ifvisible_if >= 1) {
		document.getElementById("picture1_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 2) {
		document.getElementById("picture2_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 3) {
		document.getElementById("picture3_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 4) {
		document.getElementById("picture4_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 5) {
		document.getElementById("picture5_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 6) {
		document.getElementById("picture6_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 7) {
		document.getElementById("picture7_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 8) {
		document.getElementById("picture8_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 9) {
		document.getElementById("picture9_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		
		document.getElementById("picture").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/active.gif)';

		}

		function sa_picture2_click() {
		if (picture2target == "_top") {
				window.location.href=picture2link;
				}
			else {
				window.open(picture2link);
			}
		}

		function sa_picture2_if_display() {
		s5_currentslide_if = 2;
		if (picture2link == "") {
			document.getElementById("blendimage").style.cursor = "default";
			document.getElementById("blendimage").onclick = "";
		}
		if (picture2link != "") {
			document.getElementById("blendimage").style.cursor = "pointer";
			document.getElementById("blendimage").onclick = sa_picture2_click;
		}
		s5_currentslide_if = 2;
		if (s5_ifvisible_if >= 0) {
		document.getElementById("picture").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 2) {
		document.getElementById("picture2_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 3) {
		document.getElementById("picture3_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 4) {
		document.getElementById("picture4_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 5) {
		document.getElementById("picture5_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 6) {
		document.getElementById("picture6_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 7) {
		document.getElementById("picture7_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 8) {
		document.getElementById("picture8_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 9) {
		document.getElementById("picture9_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}

		document.getElementById("picture1_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/active.gif)';

		}
		
		function sa_picture3_click() {
		if (picture3target == "_top") {
				window.location.href=picture3link;
				}
			else {
				window.open(picture3link);
			}
		}
		
		function sa_picture3_if_display() {
		s5_currentslide_if = 3;
		if (picture3link == "") {
			document.getElementById("blendimage").style.cursor = "default";
			document.getElementById("blendimage").onclick = "";
		}
		if (picture3link != "") {
			document.getElementById("blendimage").style.cursor = "pointer";
			document.getElementById("blendimage").onclick = sa_picture3_click;
		}
		s5_currentslide_if = 3;
		if (s5_ifvisible_if >= 0) {
		document.getElementById("picture").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 1) {
		document.getElementById("picture1_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 3) {
		document.getElementById("picture3_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 4) {
		document.getElementById("picture4_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 5) {
		document.getElementById("picture5_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 6) {
		document.getElementById("picture6_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 7) {
		document.getElementById("picture7_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 8) {
		document.getElementById("picture8_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 9) {
		document.getElementById("picture9_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		
		document.getElementById("picture2_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/active.gif)';

		}
		
		function sa_picture4_click() {
		if (picture4target == "_top") {
				window.location.href=picture4link;
				}
			else {
				window.open(picture4link);
			}
		}
		
		function sa_picture4_if_display() {
		s5_currentslide_if = 4;
		if (picture4link == "") {
			document.getElementById("blendimage").style.cursor = "default";
			document.getElementById("blendimage").onclick = "";
		}
		if (picture4link != "") {
			document.getElementById("blendimage").style.cursor = "pointer";
			document.getElementById("blendimage").onclick = sa_picture4_click;
		}
		s5_currentslide_if = 4;
		if (s5_ifvisible_if >= 1) {
		document.getElementById("picture1_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 2) {
		document.getElementById("picture2_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 0) {
		document.getElementById("picture").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 4) {
		document.getElementById("picture4_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 5) {
		document.getElementById("picture5_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 6) {
		document.getElementById("picture6_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 7) {
		document.getElementById("picture7_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 8) {
		document.getElementById("picture8_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 9) {
		document.getElementById("picture9_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}

		document.getElementById("picture3_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/active.gif)';

		}
		
			
		function sa_picture5_click() {
		if (picture5target == "_top") {
				window.location.href=picture5link;
				}
			else {
				window.open(picture5link);
			}
		}
		
			
		function sa_picture5_if_display() {
		s5_currentslide_if = 5;
		if (picture5link == "") {
			document.getElementById("blendimage").style.cursor = "default";
			document.getElementById("blendimage").onclick = "";
		}
		if (picture5link != "") {
			document.getElementById("blendimage").style.cursor = "pointer";
			document.getElementById("blendimage").onclick = sa_picture5_click;
		}
		s5_currentslide_if = 5;
		if (s5_ifvisible_if >= 1) {
		document.getElementById("picture1_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 2) {
		document.getElementById("picture2_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 3) {
		document.getElementById("picture3_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 0) {
		document.getElementById("picture").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 5) {
		document.getElementById("picture5_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 6) {
		document.getElementById("picture6_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 7) {
		document.getElementById("picture7_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 8) {
		document.getElementById("picture8_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 9) {
		document.getElementById("picture9_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}

		document.getElementById("picture4_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/active.gif)';

		}
		
		function sa_picture6_click() {
		if (picture6target == "_top") {
				window.location.href=picture6link;
				}
			else {
				window.open(picture6link);
			}
		}
		
		function sa_picture6_if_display() {
		s5_currentslide_if = 6;
		if (picture6link == "") {
			document.getElementById("blendimage").style.cursor = "default";
			document.getElementById("blendimage").onclick = "";
		}
		if (picture6link != "") {
			document.getElementById("blendimage").style.cursor = "pointer";
			document.getElementById("blendimage").onclick = sa_picture6_click;
		}
		s5_currentslide_if = 6;
		if (s5_ifvisible_if >= 1) {
		document.getElementById("picture1_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 2) {
		document.getElementById("picture2_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 3) {
		document.getElementById("picture3_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 4) {
		document.getElementById("picture4_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 0) {
		document.getElementById("picture").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 6) {
		document.getElementById("picture6_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 7) {
		document.getElementById("picture7_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 8) {
		document.getElementById("picture8_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 9) {
		document.getElementById("picture9_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}

		document.getElementById("picture5_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/active.gif)';

		}
		
		function sa_picture7_click() {
		if (picture7target == "_top") {
				window.location.href=picture7link;
				}
			else {
				window.open(picture7link);
			}
		}
		
		function sa_picture7_if_display() {
		s5_currentslide_if = 7;
		if (picture7link == "") {
			document.getElementById("blendimage").style.cursor = "default";
			document.getElementById("blendimage").onclick = "";
		}
		if (picture7link != "") {
			document.getElementById("blendimage").style.cursor = "pointer";
			document.getElementById("blendimage").onclick = sa_picture7_click;
		}
		s5_currentslide_if = 7;
		if (s5_ifvisible_if >= 1) {
		document.getElementById("picture1_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 2) {
		document.getElementById("picture2_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 3) {
		document.getElementById("picture3_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 4) {
		document.getElementById("picture4_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 5) {
		document.getElementById("picture5_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 0) {
		document.getElementById("picture").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 7) {
		document.getElementById("picture7_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 8) {
		document.getElementById("picture8_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 9) {
		document.getElementById("picture9_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}

		document.getElementById("picture6_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/active.gif)';

		}
		
		function sa_picture8_click() {
		if (picture8target == "_top") {
				window.location.href=picture8link;
				}
			else {
				window.open(picture8link);
			}
		}
		
		function sa_picture8_if_display() {
		s5_currentslide_if = 8;
		if (picture8link == "") {
			document.getElementById("blendimage").style.cursor = "default";
			document.getElementById("blendimage").onclick = "";
		}
		if (picture8link != "") {
			document.getElementById("blendimage").style.cursor = "pointer";
			document.getElementById("blendimage").onclick = sa_picture8_click;
		}
		s5_currentslide_if = 8;
		if (s5_ifvisible_if >= 1) {
		document.getElementById("picture1_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 2) {
		document.getElementById("picture2_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 3) {
		document.getElementById("picture3_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 4) {
		document.getElementById("picture4_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 5) {
		document.getElementById("picture5_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 6) {
		document.getElementById("picture6_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 0) {
		document.getElementById("picture").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 8) {
		document.getElementById("picture8_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 9) {
		document.getElementById("picture9_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		
		document.getElementById("picture7_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/active.gif)';

		}
		
		function sa_picture9_click() {
		if (picture9target == "_top") {
				window.location.href=picture9link;
				}
			else {
				window.open(picture9link);
			}
		}
		
		function sa_picture9_if_display() {
		s5_currentslide_if = 9;
		if (picture9link == "") {
			document.getElementById("blendimage").style.cursor = "default";
			document.getElementById("blendimage").onclick = "";
		}
		if (picture9link != "") {
			document.getElementById("blendimage").style.cursor = "pointer";
			document.getElementById("blendimage").onclick = sa_picture9_click;
		}
		s5_currentslide_if = 9;
		if (s5_ifvisible_if >= 1) {
		document.getElementById("picture1_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 2) {
		document.getElementById("picture2_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 3) {
		document.getElementById("picture3_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 4) {
		document.getElementById("picture4_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 5) {
		document.getElementById("picture5_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 6) {
		document.getElementById("picture6_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 7) {
		document.getElementById("picture7_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 0) {
		document.getElementById("picture").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 9) {
		document.getElementById("picture9_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}

		document.getElementById("picture8_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/active.gif)';

		}
		
		function sa_picture10_click() {
		if (picture10target == "_top") {
				window.location.href=picture10link;
				}
			else {
				window.open(picture10link);
			}
		}
		
		function sa_picture10_if_display() {
		s5_currentslide_if = 10;
		if (picture10link == "") {
			document.getElementById("blendimage").style.cursor = "default";
			document.getElementById("blendimage").onclick = "";
		}
		if (picture10link != "") {
			document.getElementById("blendimage").style.cursor = "pointer";
			document.getElementById("blendimage").onclick = sa_picture10_click;
		}
		s5_currentslide_if = 10;
		if (s5_ifvisible_if >= 1) {
		document.getElementById("picture1_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 2) {
		document.getElementById("picture2_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 3) {
		document.getElementById("picture3_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 4) {
		document.getElementById("picture4_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 5) {
		document.getElementById("picture5_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 6) {
		document.getElementById("picture6_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 7) {
		document.getElementById("picture7_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 8) {
		document.getElementById("picture8_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}
		if (s5_ifvisible_if >= 0) {
		document.getElementById("picture").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/nonactive.gif)';}

		document.getElementById("picture9_if").style.backgroundImage = 'url(modules/mod_s5_imagefader/s5_imagefader/active.gif)';

		}
