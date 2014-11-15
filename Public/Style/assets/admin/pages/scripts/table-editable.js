var TableEditable = function () {
	//var userid = 0;
    var handleTable = function () {

        function restoreRow(oTable, nRow) {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);

            for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                oTable.fnUpdate(aData[i], nRow, i, false);
            }
            oTable.fnDraw();
        }

        function editRow(oTable, nRow, userid) {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);
            //jqTds[0].innerHTML = '<input type="text" id="username_edit" style="width:200px" class="form-control input-small" value="' + aData[0] + '">';
            //jqTds[0].innerHTML = '<input type="hidden" id="username_edit" class="form-control input-small" value="' + aData[0] + '">';
            jqTds[1].innerHTML = '<input type="text" id="password_edit" class="form-control input-small" value="' + '' + '">';
            //jqTds[2].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[2] + '">';
            //jqTds[3].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[3] + '">';
            //jqTds[4].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[4] + '">';
            jqTds[5].innerHTML = '<a class="edit" data="'+userid+'" href="">保存</a>';
            jqTds[6].innerHTML = '<a class="cancel" href="">取消</a>';
        }
        
        function editRowForAdd(oTable, nRow) {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);
            //jqTds[0].innerHTML = '<input type="text" id="username_edit" style="width:200px" class="form-control input-small" value="' + aData[0] + '">';
            jqTds[0].innerHTML = '<input type="text" id="username_add" class="form-control input-small" value="' + '' + '">';
            jqTds[1].innerHTML = '<input type="text" id="password_add" class="form-control input-small" value="' + '' + '">';
            //jqTds[2].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[2] + '">';
            //jqTds[3].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[3] + '">';
            //jqTds[4].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[4] + '">';
            jqTds[5].innerHTML = '<a class="edit" href="">保存</a>';
            jqTds[6].innerHTML = '<a class="cancel" href="">取消</a>';
        }

        function saveRow(oTable, nRow, userid) {
            var jqInputs = $('input', nRow);
            //oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
            oTable.fnUpdate('******', nRow, 1, false);
            //oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
            //oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
            //oTable.fnUpdate(jqInputs[4].value, nRow, 4, false);
            oTable.fnUpdate('<a class="edit" data="'+userid+'" href="">编辑</a>', nRow, 5, false);
            oTable.fnUpdate('<a class="delete" data="'+userid+'" href="">删除</a>', nRow, 6, false);
            oTable.fnDraw();
        }
        
        
        function saveRowForAdd(oTable, nRow, userid) {
        
            var jqInputs = $('input', nRow);
            oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
            oTable.fnUpdate('******', nRow, 1, false);
            oTable.fnUpdate('', nRow, 2, false);
            oTable.fnUpdate('', nRow, 3, false);
            oTable.fnUpdate('off', nRow, 4, false);
            oTable.fnUpdate('<a class="edit" data="'+userid+'" href="">编辑</a>', nRow, 5, false);
            oTable.fnUpdate('<a class="delete" data="'+userid+'"  href="">删除</a>', nRow, 6, false);
            oTable.fnDraw();
        }

        function cancelEditRow(oTable, nRow) {
            var jqInputs = $('input', nRow);
            oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
            oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
            oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
            oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
            oTable.fnUpdate(jqInputs[4].value, nRow, 4, false);
            oTable.fnUpdate('<a class="edit" href="">编辑</a>', nRow, 5, false);
            oTable.fnDraw();
        }

        var table = $('#sample_editable_1');

        var oTable = table.dataTable({
            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 10,

            "language": {
                "lengthMenu": " _MENU_ records"
            },
            "columnDefs": [{ // set default column settings
                'orderable': true,
                'targets': [0]
            }, {
                "searchable": true,
                "targets": [0]
            }],
            "order": [
                [0, "asc"]
            ] // set first column as a default sort by asc
        });

        var tableWrapper = $("#sample_editable_1_wrapper");

        tableWrapper.find(".dataTables_length select").select2({
            showSearchInput: false //hide search box with special css class
        }); // initialize select2 dropdown

        var nEditing = null;
        var nNew = false;

        $('#sample_editable_1_new').click(function (e) {
            e.preventDefault();

            if (nNew && nEditing) {
                if (confirm("Previose row not saved. Do you want to save it ?")) {
                    saveRow(oTable, nEditing); // save
                    $(nEditing).find("td:first").html("Untitled");
                    nEditing = null;
                    nNew = false;

                } else {
                    oTable.fnDeleteRow(nEditing); // cancel
                    nEditing = null;
                    nNew = false;
                    
                    return;
                }
            }

            var aiNew = oTable.fnAddData(['', '', '', '', '', '','']);
            var nRow = oTable.fnGetNodes(aiNew[0]);
            editRowForAdd(oTable, nRow);
            nEditing = nRow;
            nNew = true;
        });

        table.on('click', '.delete', function (e) {
            e.preventDefault();

            if (confirm("确定删除该用户 ?") == false) {
                return;
            }

            var nRow = $(this).parents('tr')[0];
            $.ajax({
    			url : "/index.php/admin/user/delete_user",
    			type : "POST",
    			cache : false,
    			async : true,
    			dataType : "json",
    			data :{"id":$(this).attr('data')},//"userName":$('#username_edit').val(),
    			success : function(data, textStatus) {
    				if(parseInt(data) == 1){
    					oTable.fnDeleteRow(nRow);
    				}else{
    					alert("更新失败，请重试");
    				}
    			}
    		});
            
            //alert("Deleted! Do not forget to do some ajax to sync with backend :)");
        });

        table.on('click', '.cancel', function (e) {
            e.preventDefault();

            if (nNew) {
                oTable.fnDeleteRow(nEditing);
                nNew = false;
            } else {
                restoreRow(oTable, nEditing);
                nEditing = null;
            }
        });

        table.on('click', '.edit', function (e) {
            e.preventDefault();
            /* Get the row as a parent of the link that was clicked on */
            var nRow = $(this).parents('tr')[0];
            if (nEditing !== null && nEditing != nRow) {
            	//alert(1);
                /* Currently editing - but not this row - restore the old before continuing to edit mode */
                restoreRow(oTable, nEditing);
                editRow(oTable, nRow);
                nEditing = nRow;
            } else if (nEditing == nRow && this.innerHTML == "保存") {
            	
            	if($(this).attr('data')){
            	
	            	$.ajax({
	        			url : "/index.php/admin/user/update_passwd",
	        			type : "POST",
	        			cache : false,
	        			async : true,
	        			dataType : "json",
	        			data :{"id":$(this).attr('data'),"password":$('#password_edit').val()},//"userName":$('#username_edit').val(),
	        			success : function(data, textStatus) {
	        				if(parseInt(data) == 1){
	        					alert("更新成功");
	        					/* Editing this row and want to save it */
	        	                saveRow(oTable, nEditing, $(this).attr('data'));
	        	                nEditing = null;
	        				}else{
	        					alert("更新失败，请重试");
	        				}
	        			}
	        		});
            	
            	}else{
            		$.ajax({
	        			url : "/index.php/admin/user/add_user",
	        			type : "POST",
	        			cache : false,
	        			async : true,
	        			dataType : "json",
	        			data :{"userName":$('#username_add').val(),"password":$('#password_add').val()},//"userName":$('#username_edit').val(),
	        			success : function(data, textStatus) {
	        				if(parseInt(data) > 0){
	        					alert("添加成功");
	        					saveRowForAdd(oTable, nEditing)
	        				}else{
	        					alert("添加失败，请重试");
	        					return false;
	        				}
	        			}
	        		});
            	
            	}
            	
            } else {
            	//alert(3);
                /* No edit in progress - let's start one */
                editRow(oTable, nRow,$(this).attr('data'));
                nEditing = nRow;
            }
        });
    }

    return {

        //main function to initiate the module
        init: function () {
            handleTable();
        }

    };

}();