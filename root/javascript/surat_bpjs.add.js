document.observe("dom:loaded", function(){

new Ajax.Autocompleter("nama", "autocomplete_nama", "index.php?form=B.05", {
	paramName:'keyword',
		afterUpdateElement : function (text, li) {
		var data = li.getElementsByClassName('data_hide');
		var record = data[0].innerHTML.evalJSON(true);;
		$('nama').value = record.nama;
		$('noKTP').value = record.no_ktp;
		$('tempatLahir').value = record.tempat_lahir;
		$('tglLahir').value = record.tgl_lahir;
		$('alamat').value = record.alamat;
		$('rt') .value = record.rt;
		$('rw') .value = record.rw;
		$('kelurahan') .value = record.kelurahan;
		$('kecamatan') .value = record.kecamatan;
		$('kelamin').value = M_GENDER[record.kelamin];
		$('pekerjaan') .value = record.pekerjaan;
		$('kAgama').selectedIndex  = record.k_agama -1;
		
		
		}
	}
);


var next = $('next');
var form = $('form1');
next.observe('click', function(){
	form.submit();
});
	
});