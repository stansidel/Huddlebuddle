<<<<<<< HEAD
var lsVideoDialog = {
	init : function() {
		
	},

	insert : function(value) {
		if (value!='') {
			tinyMCEPopup.editor.execCommand('mceInsertContent', false, value); 
		}
		tinyMCEPopup.close();
	}
};

tinyMCEPopup.onInit.add(lsVideoDialog.init, lsVideoDialog);

=======
var lsVideoDialog = {
	init : function() {
		
	},

	insert : function(value) {
		if (value!='') {
			tinyMCEPopup.editor.execCommand('mceInsertContent', false, value); 
		}
		tinyMCEPopup.close();
	}
};

tinyMCEPopup.onInit.add(lsVideoDialog.init, lsVideoDialog);

>>>>>>> 2ccb00235253ce282d91021c0fbe9e10c7e5284a
