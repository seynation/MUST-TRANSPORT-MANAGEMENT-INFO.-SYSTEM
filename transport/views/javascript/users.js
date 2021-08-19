$(document).on("click", ".edituser", function(){
var userid = $(this).attr("userid");
var datas = new FormData();
 datas.append("userid",userid);
$.ajax({
	url:"ajax/users.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){

		var departii = new FormData();
         departii.append("dprtid",answer["departid"]);
         $.ajax({
            url:"ajax/depart.ajax.php",
            method: "POST",
            data: departii,
            cache: false,
            contentType: false,
            processData: false,
            dataType:"json",
            success:function(answer){

                $("#editdeparti").val(answer["id"]);
				$("#editdeparti").html(answer["name"]);
            }
        })

		$("#editother").val(answer["othername"]);
		$("#editname").val(answer["name"]);
		$("#editrole").val(answer["role"]);
		$("#editrole").html(answer["role"]);
		$("#editrank").val(answer["rank"]);
		$("#editrank").html(answer["rank"]);
		$("#idi").val(answer["id"]);
	}
});
})



$(document).on("click", ".deleteuser", function(){
	var dpid = $(this).attr("dpid");
	Swal.fire({
		title: 'Do you want delete this User',
		text: "if you're not sure you can cancel",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  cancelButtonText: 'Cancel',
		  confirmButtonText: 'Yes, delete User!'
		}).then(function(result){
		if(result.value){
		 window.location = "index.php?route=manageusers&dpid="+dpid;

		}

	})

});

$(document).on("click", ".deletevehicle", function(){
	var dpid = $(this).attr("dpid");
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
		 window.location = "index.php?route=managevehicles&dpid="+dpid;

		}

	})

});





$(document).on("click", ".editpricelist", function(){
var prrid = $(this).attr("prrid");
var datas = new FormData();
 datas.append("prrid",prrid);
$.ajax({
	url:"ajax/depart.ajax.php",
	method:"POST",
	data: datas,
	cache: false,
	contentType: false,
	processData: false,
	dataType:"json",
	success:function(answer){
		
		$("#idi").val(answer["id"]);
		$("#idipt").val(answer["ipt"]);
		$("#idstdnt").val(answer["stdnt"]);
		$("#idprjtbks").val(answer["prjtbks"]);
		$("#idprjcor").val(answer["prjcor"]);
		$("#idhod").val(answer["hod"]);
		$("#idodexamset").val(answer["odexamset"]);
		$("#idbengexamset").val(answer["bengexamset"]);
		$("#idscripmark").val(answer["scripmark"]);
		$("#idxtrhrs").val(answer["xtrhrs"]);

	}
});
})




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

