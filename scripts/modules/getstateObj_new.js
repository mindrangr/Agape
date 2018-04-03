define(['modules/parseState'], function(parse) { 
	
	return {
		getstateObj:function(stateElem,retFunc)
		{	
			$.get("AjaxPage1.php", {job:'selectAtomic',param:'quickSelect',dbase:"state_cities"}, 
				function(data){
				
					var stateOb=data;
					var stateOb=stateOb.split("**");
					var stateObj=$.parseJSON(stateOb[1]);
					global.stateObj=stateObj;
					globalTools.save();
					_.each(stateObj.returnObj,function(val1){
						$("#"+stateElem).append("<option value='"+val1.state_name+"'>"+val1.state_name+"</option>")
					})
					var userState=sessionStorage.getItem("user");
					userState=$.parseJSON(userState)
					$("#agape_profile_state").val(userState.agape_profile_state);
					retFunc();
				}
			)
		},  
		
		
		//function creates event that changes cities every time state is changed
		changeCities:function(stateElem,cityElem){
			$("#"+stateElem).on("change",function(){
				var leng=global.stateObj.returnObj.length;
				var cities;
				for(var i=0;i<leng;i++){
					if($(this).val()==global.stateObj.returnObj[i].state_name){
						cities=global.stateObj.returnObj[i].state_cities;
					}
				}
				cities=cities.split("$$");
				$("#"+cityElem).empty().append("<option>Select one</option>")
				_.each(cities,function(index){
					$("#"+cityElem).append("<option>"+index+"</option>");
				})
				
			})
			
		},
		
		loadCities:function(elem,state){
			var idx2=0;
			leng2=global.stateObj.returnObj.length;
			for(c=0;c<leng2;c++){
				if(global.stateObj.returnObj[c].state_name==state){
					idx=c;
				}
			}

			var cityObj=global.stateObj.returnObj[idx].state_cities+"";
			cityObj=cityObj.split("$$");
			var leng3=cityObj.length;
			$("#"+elem).empty().append("<option>Select one</option>")
			for(c=0;c<leng3;c++){
				$("#"+elem).append("<option>"+cityObj[c]+"</option>");
			}
			$("#"+elem).val(global.userObj.agape_profile_city);
		},


		getstates:function(state){
			var sendObj={}
			sendObj.param=state;
			sendObj.job='quickSelect_atomic_state';
			func = function(data){
				var stateO=data.split("**");
				if($.trim(stateO[0])=='true'){
					sessionStorage.setItem("stateObj",stateO[1])
				}
			}
			ajaxCall(sendObj,func)

		}
	}
})