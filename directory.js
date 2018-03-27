angular.module('directoryApp', [])
	.controller('directoryController', function() {

		var dirList = this;

		dirList.toggle = true;

		dirList.list = [
			{name:'Leixlip United FC', no: ' 2 - 1 ', ad: 'Corduff FC'},
			{name:'Corduff FC', no: ' 1 - 0 ', ad: 'Leixlip United FC'},
			{name:'St Itas FC', no: ' 1 - 3 ', ad: 'Portrane Athletic FC'},
			{name:'Portrane Athletic FC', no: ' 6 - 1 ', ad: 'St Itas FC'},
			{name:'Rush AFC', no: ' 2 - 0 ', ad: 'Corduff FC'},
			{name:'Corduff FC', no: ' 1 - 0 ', ad: 'Donnycarney FC'},
			{name:'Donnycarney FC', no: ' 1 - 2 ', ad: 'Rush AFC'},
			{name:'Rush AFC', no: ' 1 - 0 ', ad: 'Donnycarney FC'}
		];


	});