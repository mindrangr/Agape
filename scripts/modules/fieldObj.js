define([],function(){
	return{
		fieldObj:function(){
			var quesObject=
	{
		"fields":
			[
				{
					"col":"agape_profile_intentions",
					"additionalParams":"none",
					"quesLoc":"all","quesType":"select",
					"quesLabel":"Intentions",
					"quesParams":"Friendship$$Friendship**Marriage$$Marriage**Casual Dating$$Casual Dating**Business Contact$$Business Contact**Lets talk$$Lets talk**Other$$Other"},
				
				{
					"col":"agape_profile_memberID",
					"additionalParams":"none",
					"additionalParams":"none",
					"quesLoc":"none",
					"quesType":"none",
					"quesLabel":"none",
					"quesParams":"none"
					},
				
				{
					"col":"agape_profile_firstname",
					"additionalParams":"keyClear",
					"quesLoc":"all","quesType":"textBox",
					"quesLabel":"Firstname",
					"quesParams":"none"},	
				
				{"col":"agape_profile_lastname",
				"additionalParams":"keyClear",
				"quesLoc":"all","quesType":"textBox",
				"quesType":"textBox",
				"quesLabel":"Lastname",
				"quesParams":"none"},

				{"col":"agape_profile_username","additionalParams":"keyClear","quesLoc":"all","quesType":"textBox","quesLabel":"Username","quesParams":"none"},
				
				{"col":"agape_profile_password","additionalParams":"keyClear","quesLoc":"all","quesType":"textBox","quesLabel":"Password","quesParams":"none"},
				
				{"col":"agape_profile_gender","additionalParams":"keyClear","quesLoc":"all","quesType":"select","quesLabel":"Gender","quesParams":"Male$$Male**Female$$Female"},	

				{"col":"agape_profile_dateOfBirth","additionalParams":"keyClear","quesLoc":"all","quesType":"textBox","quesLabel":"Date of Birth","quesParams":"none"},
				
				{"col":"agape_profile_race","additionalParams":"none","quesLoc":"Casual Dating,Friendship,Marriage","quesType":"select","quesLabel":"Race","quesParams":"Not Answered$$Not Answered**Black$$Black**White$$White**Latino$$Latino**Asian$$Asian**Other$$Other"},
				
				//agape_profile_bodyType
				{"col":"agape_profile_bodyType","additionalParams":"none","quesLoc":"Casual Dating,Marriage","quesType":"select","quesLabel":"Body Type","quesParams":"Not Answered$$Not Answered**Slim$$Slim**Medium$$Medium**Healthy$$Healthy**Muscular$$Musular**Big$$Big**Overweight$$Overweight"},
				
				//agape_profile_height
				{
					"col":"agape_profile_height",
					"additionalParams":"none",
					"quesLoc":"Casual Dating,Marriage",
					"quesType":"select","quesLabel":"Height",
					"quesParams":"Not Answered$$Not Answered**5ft0$$5ft0**5ft1$$5ft1**5ft2$$5ft2**5ft3$$5ft3**5ft4$$5ft4**5ft5$$5ft5**5ft6$$5ft6**5ft7$$5ft7**5ft8$$5ft8**5ft9$$5ft9**5ft10$$5ft10**5ft11$$5ft11**6ft0$$6ft0**6ft1$$6ft1**6ft2$$6ft2**6ft3$$6ft3**6ft4$$6ft4**6ft5$$6ft5**6ft6$$6ft6**6ft7$$6ft7**6ft8$$6ft8"},
							
				{"col":"agape_profile_state","additionalParams":"keyClear","quesLoc":"all","quesType":"select","quesLabel":"State","quesParams":"Not Answered$$Not Answered"},

				//agape_profile_city
				{"col":"agape_profile_city","additionalParams":"keyClear","quesLoc":"all","quesType":"select","quesLabel":"City","quesParams":"Not Answered$$Not Answered"},
				
				{"col":"agape_profile_email","additionalParams":"keyClear","quesLoc":"all","quesType":"textBox","quesLabel":"Email","quesParams":"none"},

				
				{"col":"agape_profile_education","additionalParams":"keyClear","quesLoc":"all","quesType":"select","quesLabel":"Highest education completed","quesParams":"Not Answered$$Not Answered**High School$$High School**Some college$$Some college**AA Degree$$AA Degree**BA/BS$$BA/BS**Masters$$Masters**Doctorate$$Doctorate"},
				
				{"col":"agape_profile_children","additionalParams":"none","quesLoc":"Marriage","quesType":"select","quesLabel":"Do you have children","quesParams":"Not Answered$$Not Answered**Yes$$Yes**No$$No"},
				
				//agape_profile_children_future
				{"col":"agape_profile_children_future","additionalParams":"none","quesLoc":"Marriage","quesType":"select","quesLabel":"Would you like to have children?(more)","quesParams":"Not Answered$$Not Answered**Yes$$Yes**No$$No**Lets talk$$Lets talk"},
			
			
				{"col":"agape_profile_description","additionalParams":"keyClear","quesLoc":"all","quesType":"textarea","quesLabel":"Briefly talk about yourself(<span style='font-weight:normal;'><i>Discuss your goals for this contact. Discuss your own strengths and the strengths you'd like to see in a social or romantic partner. Talk about what you have and are willing to offer to the expected relationship to make it a success.</i></span>)","quesParams":"none"},
			
				//agape_profile_opts
				{"col":"agape_profile_opts","additionalParams":"none","quesLoc":"Casual Dating,Marriage","quesType":"options","quesLabel":"Check the options to your right that a romantic partner can expect from you:","quesParams":"Love$$Honesty$$Trust$$Emotional Support$$Financial Support$$Sex$$Respect$$Loyalty$$Commitment$$Friendship$$Spiritual Friend"},
				
				{"col":"agape_profile_firstDate","additionalParams":"none","quesLoc":"Casual Dating,Marriage","quesType":"textarea","quesLabel":"Describe your ideal first date","quesParams":"none"},
							
				{"col":"agape_profile_salary","additionalParams":"none","quesLoc":"Casual Dating,Marriage","quesType":"select","quesLabel":"Your annual salary","quesParams":"$0 - $32,000$$$0 - $32,000**$32,001 - $70,000$$$32,001 - $70,000**$70,001 - $105,000$$$70,001 - $105,000**$105,001 - $135,000$$$105,001 - $135,000**$135,001 - $150,000$$$135,001 - $150,000**$150,001 - $175,000+$$$150,001 - $175,000**$175,001 - $200,000+$$$175,001 - $200,000**$200,001+$$$200,001+"},

				{"col":"agape_profile_religion","additionalParams":"none","quesLoc":"Casual Dating,Friendship,Marriage","quesType":"select","quesLabel":"What is your religion?","quesParams":"Not Answered$$Not Answered**Christianity$$Christianity**Islam$$Islam**Hindu$$Hindu**Judaica$$Judaica**Other$$Other"},
				
				//agape_profile_opts_partner
				{"col":"agape_profile_opts_partner","additionalParams":"none","quesLoc":"Casual Dating,Marriage","quesType":"options","quesLabel":"Check the options to your right that you will expect from a romantic partner:","quesParams":"Love$$Honesty$$Trust$$Emotional Support$$Financial Support$$Sex$$Respect$$Loyalty$$Commitment$$Friendship$$Spiritual Friend"},
				
				
				{"col":"agape_profile_drugs","additionalParams":"none","quesLoc":"Casual Dating,Marriage","quesType":"select","quesLabel":"How often do you use drugs?","quesParams":"Not Answered$$Not Answered**Not Answered$$Not Answered**Never$$Never**Occasionally$$Occasionally**Socially$$Socially**Often$$Often"},
				
				{"col":"agape_profile_alcohol","additionalParams":"none","quesLoc":"Casual Dating,Marriage","quesType":"select","quesLabel":"How often do you drink alcohol","quesParams":"Not Answered$$Not Answered**Never$$Never**Occasionally$$Occasionally**Socially$$Socially**Often$$Often"},
				
				//Ideal race for partner
				{
					"col":"agape_partner_race",
					"additionalParams":"none",
					"quesLoc":"Casual Dating,Marriage",
					"quesType":"select",
					"quesLabel":"What is the ideal race for this contact?",
					"quesParams":"Not Answered$$Not Answered**Black$$Black**White$$White**Latino$$Latino**Asian$$Asian**Other$$Other**Not Important$$Not Important"
					},
				
				
				{"col":"agape_partner_age_range","additionalParams":"none","quesLoc":"Casual Dating,Friendship,Marriage","quesType":"select","quesLabel":"What is the ideal age range for this contact?","quesParams":"Not Answered$$Not Answered**18-25$$18-25**26-32$$26-32**33-38$$33-38**39-45$$39-45**45-51$$45-51**52-58$$52-58**59-65$$59-65**66-71$$66-71**72-85$$72-85**Not Important$$Not Important"},
							
				{"col":"agape_partner_religion","additionalParams":"none","quesLoc":"Casual Dating,Friendship,Marriage","quesType":"select","quesLabel":"What is the prefered religion of this contact?","quesParams":"Not Answered$$Not Answered**Christianity$$Christianity**Islam$$Islam**Hindu$$Hindu**Judaica$$Judaica**Other$$Other**Not Important$$Not Important"},
								
							
				{"col":"agape_partner_education","additionalParams":"none","quesLoc":"Casual Dating,Friendship,Marriage","quesType":"select","quesLabel":"What is your ideal partners education level?","quesParams":"Not Answered$$Not Answered**High School$$High School**Some college$$Some college**AA Degree$$AA Degree**BA/BS$$BA/BS**Masters$$Masters**Doctorate$$Doctorate"},
				
				//Partner alcohol use
				{
					"col":"agape_partner_alcohol",
					"additionalParams":"none",
					"quesLoc":"Casual Dating,Friendship,Marriage",
					"quesType":"select",
					"quesLabel":"Screen contact for alcohol use?",
					"quesParams":"Not Answered$$Not Answered**Never$$Never**Occasionally$$Occasionally**Socially$$Socially**Often$$Often**Not important$$Not important"
					},
				
				{"col":"agape_partner_drugs","additionalParams":"none","quesLoc":"Casual Dating,Friendship,Marriage","quesType":"select","quesLabel":"Screen contact for drug use?","quesParams":"Not Answered$$Not Answered**Never$$Never**Occasionally$$Occasionally**Socially$$Socially**Often$$Often**Not important$$Not important"},
					
				{"col":"agape_partner_children","additionalParams":"none","quesLoc":"Casual Dating,Marriage","quesType":"select","quesLabel":"Is it ok for this contact to have children?","quesParams":"Not Answered$$Not Answered**Yes$$Yes**No$$No**Not Important$$Not Important"},
				
				{"col":"agape_profile_amt2Invest","additionalParams":"none","quesLoc":"Business Contact","quesType":"select","quesLabel":"How much capital are you looking to invest?","quesParams":"Not Answered$$Not Answered**0 - 2,000$$0 - 2,000**2,001 - 5,000$$2,001 - 5000**5001-10,000$$5,001 - 10,000**10,001 - 15,000$$10,001 - 15,000**15,001 - 25,000$$15,000 - 25,000**25,001-1000000$$25,001 +**Lets discuss$$Lets discuss"}
				
			],
		"buildList" : function(list){TextBCreator(list)}
	};
	
		return quesObject;
		
		}
	
	
	
	}

})