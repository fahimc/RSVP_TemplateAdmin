var DataLoader=
{
	event:
	{
		ON_SETTINGS_COMPLETE:"ON_SETTINGS_COMPLETE"
	},
	init:function()
	{
		var rand=Math.random();
		Utensil.URLLoader.load(Model.url.settings+"?rand="+rand,this.onSettingsLoaded);
	},
	onSettingsLoaded:function(t,x)
	{
		Model.data =  eval('(' + t + ')');
		DataLoader.loadData();
	},
	loadData:function()
	{
		var rand=Math.random();
		Utensil.URLLoader.load(Model.url.data+"?rand="+rand,this.onDataLoaded);
	},
	onDataLoaded:function(t,x)
	{
		var data =  eval('(' + t + ')');
		
		if(data.template)
		{
			Model.template.index=data.template.index;
			Model.template.colorIndex=data.template.colorIndex;
			
			console.log(Model.template);
		}
		if(data.content)
		{
			for(var obj in data.content)
		{
			var item = data.content[obj];
			Model.page.content[obj]=[];
			for(var prop in item)
			{
				var itemData={};
				itemData.value=item[prop].value;
				itemData.type=item[prop].type;
				itemData.id=prop;
				Model.page.content[obj][prop]=itemData;
			}
		}
		
		}
		Event.dispatch(DataLoader,DataLoader.event.ON_SETTINGS_COMPLETE);
	}
}
