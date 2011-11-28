<<<<<<< HEAD
var lsImageDialog = {
	init : function() {
		
	},

	insert : function() {
		
	},
	
	ajaxUploadImg: function(form) {  
            if (typeof(form)=='string') {
                form=$(form);
            }
            var iFrame = new iFrameFormRequest(form.getProperty('id'),{
                url: tinyMCEPopup.getWindowArg('ajaxurl')+'upload/image/',
                dataType: 'json',
                params: {security_ls_key: tinyMCEPopup.getWindowArg('LIVESTREET_SECURITY_KEY')},
                onComplete: function(response){
                    if (response.bStateError) {
                        tinyMCEPopup.getWindowArg('msgErrorBox').alert(req.responseJS.sMsgTitle,response.sMsg);
                    } else {
                       tinyMCEPopup.editor.execCommand('mceInsertContent', false, response.sText); 
                        tinyMCEPopup.close();   	
                    }
                }
            });
            iFrame.send();
    }
};

tinyMCEPopup.onInit.add(lsImageDialog.init, lsImageDialog);

=======
var lsImageDialog = {
	init : function() {
		
	},

	insert : function() {
		
	},
	
	ajaxUploadImg: function(form) {  
            if (typeof(form)=='string') {
                form=$(form);
            }
            var iFrame = new iFrameFormRequest(form.getProperty('id'),{
                url: tinyMCEPopup.getWindowArg('ajaxurl')+'upload/image/',
                dataType: 'json',
                params: {security_ls_key: tinyMCEPopup.getWindowArg('LIVESTREET_SECURITY_KEY')},
                onComplete: function(response){
                    if (response.bStateError) {
                        tinyMCEPopup.getWindowArg('msgErrorBox').alert(req.responseJS.sMsgTitle,response.sMsg);
                    } else {
                       tinyMCEPopup.editor.execCommand('mceInsertContent', false, response.sText); 
                        tinyMCEPopup.close();   	
                    }
                }
            });
            iFrame.send();
    }
};

tinyMCEPopup.onInit.add(lsImageDialog.init, lsImageDialog);

>>>>>>> 2ccb00235253ce282d91021c0fbe9e10c7e5284a
