$(document).on("click", ".editvehicle", function(){
var vid = $(this).attr("vid");
var datas = new FormData();
 datas.append("vid",vid);
$.ajax({
	url:"ajax/vehicles.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){
		
		$("#editmake").val(answer["make"]);
		$("#editmodel").val(answer["model"]);
		$("#editseats").val(answer["seats"]);
		$("#editplate").val(answer["plate"]);

	}
});
})

$(document).on("click", ".editavailability", function(){
var vid1 = $(this).attr("vid");
var datas = new FormData();
 datas.append("vid",vid1);
$.ajax({
	url:"ajax/vehicles.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){
		
		$("#editid").val(answer["editid"]);
		$("#editavailability").val(answer["editavailability"]);

	}
});
})

$(document).on("click", ".deletevehicle", function(){
	var vid = $(this).attr("vid");
	Swal.fire({
		title: 'Do you want delete this Vehicle entry',
		text: "If you're not sure you can cancel",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  cancelButtonText: 'Cancel',
		  confirmButtonText: 'Yes, delete entry!'
		}).then(function(result){
		if(result.value){
		 window.location = "index.php?route=managevehicles&id="+id;

		}

	})

});










$(document).on("click", ".deleteassigned", function(){
	var mdlid = $(this).attr("mdlid");
	Swal.fire({
		title: 'Do you want delete this Module Assigned',
		text: "if you're not sure you can cancel",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  cancelButtonText: 'Cancel',
		  confirmButtonText: 'Yes, delete Module!'
		}).then(function(result){
		if(result.value){
		 window.location = "index.php?route=viewassignmodules&mdlid="+mdlid;

		}

	})

});

$(document).on("click", ".dltpjctspr", function(){
	var dpid = $(this).attr("dpid");
	Swal.fire({
		title: 'Do you want delete this Record',
		text: "if you're not sure you can cancel",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  cancelButtonText: 'Cancel',
		  confirmButtonText: 'Yes, delete Record!'
		}).then(function(result){
		if(result.value){
		 window.location = "index.php?route=stdntsupervsion&dpid="+dpid;

		}

	})

});





$(document).on("click", ".dlbksmrk", function(){
	var dpid = $(this).attr("dpid");
	Swal.fire({
		title: 'Do you want delete this Record',
		text: "if you're not sure you can cancel",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  cancelButtonText: 'Cancel',
		  confirmButtonText: 'Yes, delete Record!'
		}).then(function(result){
		if(result.value){
		 window.location = "index.php?route=booksmarking&dpid="+dpid;

		}

	})

});

