//variables de tipo elemento
var eBrand = document.getElementById('brand');
var eReference = document.getElementById('reference');
var eModel = document.getElementById('model');
var eColor = document.getElementById('color');
var eCc = document.getElementById('cc');
var eType = document.getElementById('type');
var vsound =document.getElementById('sound');
//variables botones
var btnOn = document.getElementById('btnOn');
var btnOff = document.getElementById('btnOff');
var btnStop = document.getElementById('btnStop');
var btnForward = document.getElementById('btnForward');
var btnBackward = document.getElementById('btnBackward');
//objeto
var vehicle = {
	//atributos
	brand: 'mini',
	reference: 'cooper super s',
	model: 2019,
	color: 'azul',
	cc: 1.8,
	type: 'hachback',
	//metodos
	show: function() {
		eBrand.innerHTML 		= this.brand;
		eReference.innerHTML 	= this.reference;
		eModel.innerHTML 		= this.model;
		eColor.innerHTML		= this.color;
		eCc.innerHTML 			= this.cc;
		eType.innerHTML 		= this.type;

	},
	on: function () {
		alert('on');
	},
	off: function () {
		aleft('off');
	},
	stop: function () {
		alert('stop');
	},
	forward: function () {
		alert('forward');
	},
	backward: function () {
		alert('backward'); 
	}


}
vehicle.showInfo();
/*-------------------*/
btnOn.onClick = function() {
	vehicle.on();
}
btnOff.onClick = function() {
	vehicle.off();
}
btnStop.onClick = function() {
	vehicle.stop();
}
btnForward.onClick = function() {
	vehicle.forward();
}
btnBackward.onClick = function() {
	vehicle.backward();
}
