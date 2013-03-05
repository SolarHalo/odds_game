var userOpt = function(){
	//缓存
	var docObject = null;
	var userKey = null;
	var method = null;
	
	return{
		updatePhoto:function(elementid){
			var tagsInput ="" ;
			//alert(tagsInput);
			$.ajaxFileUpload({
				type:'post',
				url:'ajaxuseropt.php?method='+method+"&userKey="+userKey,//用于文件上传的服务器端请求地址
		      	secureuri:false,//一般设置为false
		      	fileElementId:'tagsInput',//文件上传空间的id属性 
		     	dataType:'json',//返回值类型 一般设置为json
		     	data:{'method': method,'userKey':userKey},
		     	success:function (data, status){
		     		if("yes" == data.result){
		     			$("#"+elementid +" img:first").attr('src',data.path);
		     		}
		     		$("span").remove('#updateValue');
					$("span").remove('#updateButton');
		      	},
		      	error:function (data, status, e){
		      		alert("error");
		        }
		    });
		},
		updateName:function(elementid){
			var tagsInput = $("#tagsInput").val();
			$.ajax({
				'url': "ajaxuseropt.php",
				'data': {'method': method, 'updateValue': tagsInput,'userKey':userKey},
				'success': function( data ){
					if(data == "no"){
						alert("修改失败！");
					}else{
						//卸载变更
						$("#"+elementid +" span:first").text(tagsInput);
					}
					$("span").remove('#updateValue');
					$("span").remove('#updateButton');
				}
			});
		},
		updatePassword:function(elementid){
			var tagsInput = $("#tagsInput").val();
			$.ajax({
				'url': "ajaxuseropt.php",
				'data': {'method': method, 'updateValue': tagsInput,'userKey':userKey},
				'success': function( data ){
					//卸载变更
					if(data == "no"){
						alert("修改失败！");
					}
					
					$("span").remove('#updateValue');
					$("span").remove('#updateButton');
				}
			});
		},
		modifyName:function(elementid,userid){
			userKey = userid;
			//卸载变更
			$("span").remove('#updateValue');
			$("span").remove('#updateButton');
			//添加新输入框和按钮
			docObject =  $("#"+elementid);
			
			if(docObject != null){
				originHtml = docObject.html();
				method = "updateUsername";
				var tagsInput = $("#"+elementid +" span:first").text();
				$("<span id='updateValue'><input id='tagsInput' type='text' name='tagsInput' value='"+tagsInput+"' size='20' /></span>").appendTo("#"+elementid +" span:last");
				$("<span id='updateButton'><input type='button' value='保存' onclick='userOpt.updateName(\""+elementid+"\")'/></span>").appendTo("#"+elementid +" span:last");
			}
			
		},
		modifyPassword:function(elementid,userid){
			userKey = userid;
			//卸载变更
			$("span").remove('#updateValue');
			$("span").remove('#updateButton');
			//添加新输入框和按钮
			docObject =  $("#"+elementid);
			
			if(docObject != null){
				method = "updatePassword";
				$("<span id='updateValue'><input id='tagsInput' type='password' name='tagsInput' size='20' /></span>").appendTo("#"+elementid +" span:last");
				$("<span id='updateButton'><input type='button' value='保存' onclick='userOpt.updatePassword(\""+elementid+"\")'/></span>").appendTo("#"+elementid +" span:last");
			}
		},
		modifyPhoto:function(elementid,userid){
			userKey = userid;
			//卸载变更
			$("span").remove('#updateValue');
			$("span").remove('#updateButton');
			//添加新输入框和按钮
			docObject =  $("#"+elementid);
			if(docObject != null){
				method = "updatePhoto";
				$("<span id='updateValue' style='float: left;'><input id='tagsInput' type='file' name='tagsInput' size='20' /></span>").appendTo("#"+elementid +" a:last");
				$("<span id='updateButton' style='float: left;'><input type='button' value='上传' onclick='userOpt.updatePhoto(\""+elementid+"\")'/></span>").appendTo("#"+elementid +" span:last");
			}
		}
	}
}();