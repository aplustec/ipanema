$(document).ready(function() {
	createSwitch();
});

function createGrid () {
	$('body').append('<div id="less-grid"></div>');
	var pageWidth = $('.center').width();
	$('#less-grid').css({ 
		width: pageWidth,
		height: "100%",
		position: "fixed",
		margin: "0 auto",
		marginLeft: "-470px",
		top: "0",
		left: "50%",
		zIndex: 900,
	});
	var colWidth = 60;
	var colSep = 20;
	var colCount = 1;
	for(colLeft=0;colLeft<=pageWidth;colLeft=(colWidth+colSep)*(colCount-1)){
		$('#less-grid').append('<span class="col col-'+colCount+'">col:&nbsp;'
		+colCount+'<br/>'+(((colWidth+colSep)*colCount)-colSep)+'</span>'); 
		$('#less-grid .col-'+colCount).css({ 
			width: colWidth,
			position: "absolute",
			top: "0",
			left: colLeft,
			bottom: "0",
			background: "#3d5fa3",
			opacity: 0.5,
			color: "#fff",
			fontSize: "13px",
			paddingTop: "10px"
		});
		colCount++;
	};
}

function createSwitch () {
	$('body').append('<span id="less-grid-switch">show grid</span>');
	$('#less-grid-switch').css({ 
		position: "fixed",
		top: "0",
		right: "0",
		background: "#000",
		width: "60px",
		textAlign: "center",
		color: "#fff",
		fontSize: "13px",
		lineHeight: "13px",
		padding: "6px 8px",
		cursor: "pointer",
		zIndex: 1000							
	});
	$('#less-grid-switch').toggle(function() {
		$(this).text("close grid");
		$('#less-grid').show();
		$(this).attr('rel','on');
		$('#less-grid').remove();
		createGrid();	
	}, function() {
		$(this).text('show grid');
		$('#less-grid').hide();
		$(this).attr('rel','off');
	});
}

$(function(){
	$(window).resize(function(){
		if($('#less-grid-switch').attr('rel')=="on") {
			$('#less-grid').remove();
			createGrid();
		}
	 });
});