


$(document).on("click", ".editiptbooks", function(){
var iptid = $(this).attr("iptid");
var datas = new FormData();
 datas.append("iptid",iptid);
$.ajax({
	url:"ajax/modules.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){
	var datas = new FormData();
 datas.append("userid",answer["teacherid"]);
$.ajax({
	url:"ajax/users.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){

		$("#neimu").val(answer["othername"]);
	}
});
	
		$("#editnrberstdnt").val(answer["nostudents"]);
		$("#idmber").val(answer["id"]);
	}
});
})

$(document).on("click", ".editbooks", function(){
var bkstchid = $(this).attr("bkstchid");
var datas = new FormData();
 datas.append("bkstchid",bkstchid);
$.ajax({
	url:"ajax/modules.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){
	var datas = new FormData();
 datas.append("userid",answer["teacherid"]);
$.ajax({
	url:"ajax/users.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){

		$("#usernameim").val(answer["othername"]);
	}
});
	
		$("#editnrber").val(answer["nostudents"]);
		$("#idid").val(answer["id"]);
	}
});
})


$(document).on("click", ".editproject", function(){
var tchid = $(this).attr("tchid");
var datas = new FormData();
 datas.append("tchid",tchid);
$.ajax({
	url:"ajax/modules.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){
	var datas = new FormData();
 datas.append("userid",answer["teacherid"]);
$.ajax({
	url:"ajax/users.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){

		$("#username").val(answer["othername"]);
	}
});
	
		$("#editnumber").val(answer["nostudents"]);
		$("#idi").val(answer["id"]);
	}
});
})

$(document).on("click", ".editmodules", function(){
var idmdl = $(this).attr("idmdl");
var datas = new FormData();
 datas.append("mdlid",idmdl);
$.ajax({
	url:"ajax/modules.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){
		$("#idname").val(answer["name"]);
		$("#idcode").val(answer["code"]);
		$("#edhrs").val(answer["hrstght"]);
		$("#idsemstr").val(answer["smster"]);
		$("#idsemstr").html(answer["smster"]);
		$("#idi").val(answer["id"]);
	}
});
})

$(document).on("click", ".editdepart", function(){
var dprtid = $(this).attr("dprtid");
console.log("dprtid",dprtid);
var datas = new FormData();
 datas.append("dprtid",dprtid);
$.ajax({
	url:"ajax/depart.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){

		$("#editname").val(answer["name"]);
		$("#editshortform").val(answer["shortform"]);
		$("#idi").val(answer["id"]);
	}
});
})



$(document).on("click", ".deletedepart", function(){
	var dpid = $(this).attr("dpid");
	Swal.fire({
		title: 'Do you want delete this department',
		text: "if you're not sure you can cancel",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  cancelButtonText: 'Cancel',
		  confirmButtonText: 'Yes, delete department!'
		}).then(function(result){
		if(result.value){
		 window.location = "index.php?route=departments&dpid="+dpid;

		}

	})

});

$(document).on("click", ".deletemodule", function(){
	var mdlid = $(this).attr("mdlid");
	Swal.fire({
		title: 'Do you want delete this Module',
		text: "if you're not sure you can cancel",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  cancelButtonText: 'Cancel',
		  confirmButtonText: 'Yes, delete Module!'
		}).then(function(result){
		if(result.value){
		 window.location = "index.php?route=viewmodules&mdlid="+mdlid;

		}

	})

});




$(document).on("click", ".editcoarse", function(){
var crseid = $(this).attr("crseid");
var datas = new FormData();
 datas.append("crseid",crseid);
$.ajax({
	url:"ajax/modules.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){

		$("#idocrse").val(answer["crsename"]);
		$("#idshort").val(answer["crsshrstfrm"]);
		$("#idi").val(answer["id"]);
	}
});
})





$(document).on("click", ".deletecoarse", function(){
	var crseid = $(this).attr("crseid");
	Swal.fire({
		title: 'Do you want delete this Coarse',
		text: "if you're not sure you can cancel",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  cancelButtonText: 'Cancel',
		  confirmButtonText: 'Yes, delete Coarse!'
		}).then(function(result){
		if(result.value){
		 window.location = "index.php?route=viewcoarse&crseid="+crseid;

		}

	})

});




$(document).on("click", ".editclassdtls", function(){
var idclass = $(this).attr("idclass");
var datas = new FormData();
 datas.append("idclass",idclass);
$.ajax({
	url:"ajax/modules.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){

 var datas = new FormData();
 datas.append("crseid",answer["coarse"]);
$.ajax({
	url:"ajax/modules.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){

		$("#idcrse").val(answer["id"]);
		$("#idcrse").html(answer["crsename"]);
	}
});
		console.log("answer",answer);
		$("#idyearof").val(answer["yearof"]);
		$("#idyearof").html(answer["yearof"]);
		$("#idclasstype").val(answer["classtype"]);
		$("#idclasstype").html(answer["classtype"]);
		$("#idstdnts").val(answer["totalsdnts"]);
		
		$("#idstream").val(answer["stream"]);
		$("#idstream").html(answer["stream"]);
		$("#idi").val(answer["id"]);
		
	}
});
})




$(document).on("click", ".editsettngs", function(){
var setsid = $(this).attr("setsid");
var datas = new FormData();
 datas.append("setsid",setsid);
$.ajax({
	url:"ajax/settings.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){

		
		$("#idyear").val(answer["yearinit"]);
		$("#idyear").html(answer["yearinit"]);
		$("#edsemter").val(answer["smster"]);
		$("#edsemter").html(answer["smster"]);
		$("#eddatantry").val(answer["dataentryaccess"]);
		$("#eddatantry").html(answer["dataentryaccess"]);
		$("#idi").val(answer["id"]);
	}
});
})


