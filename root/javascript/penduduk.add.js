document.observe("dom:loaded", function(){
	var kKerja = $('kKerja');
	var dPekerjaan = $('dPekerjaan');
	var kPendidikan = $('kPendidikan');
	var dPendidikan = $('dPendidikan');
	
	//init
	kKerja_change();
	kPendidikan_change();
	
	
	kKerja.observe('change', kKerja_change);
	function kKerja_change(){
		if(kKerja.value == 0){
			dPekerjaan.show();
		}else{
			dPekerjaan.hide();
		}
	}
	
	kPendidikan.observe('change', kPendidikan_change);
	function kPendidikan_change(){
		if(kPendidikan.value == 0){
			dPendidikan.show();
		}else{
			dPendidikan.hide();
		}
	}
	
var next = $('next');
var batal = $('batal');
var form = $('form1');
next.observe('click', function(){
	form.submit();
});

batal.observe('click', function(){
	window.location = 'index.php?form=B.01';
});	

});