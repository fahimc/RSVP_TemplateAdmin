var UploadData = {
	formData : {},
	init : function() {
		 var fd = new FormData();
		this.formData = {
			template : {
				index : Model.template.index,
				colorIndex : Model.template.colorIndex
			},
			content:
			{
				
			}

		};
		
		for(var obj in Model.page.content)
		{
			var item = Model.page.content[obj];
			this.formData.content[obj]={};
			for(var prop in item)
			{
				this.formData.content[obj][prop]={};
				this.formData.content[obj][prop].value=item[prop].value;
				this.formData.content[obj][prop].type=item[prop].type;
			}
		}
		
		fd.append("data",JSON.stringify(this.formData));
		
		
		var page = Model.data.page[Model.page.index];
		for (var a = 0; a < page.form.length; a++) {
			var item = document.getElementById(Model.id.formItem + a);
			if (item && item.getAttribute("type") && item.getAttribute("type") == "file") {
				
				fd.append(item.getAttribute("name") ,item.files[0]);
			}
		}
		
		 var xhr = new XMLHttpRequest();
        // xhr.upload.addEventListener("progress", uploadProgress, false);
        xhr.addEventListener("load", this.uploadComplete, false);
        // xhr.addEventListener("error", uploadFailed, false);
        // xhr.addEventListener("abort", uploadCanceled, false);
        xhr.open("POST", "lib/php/saveData.php");
        xhr.send(fd);
		
		View.showMessage("Saving");
	},
	uploadComplete:function(evt)
	{
		
		View.hideMessage();
		console.log(evt.target.responseText);
	}
	
}
