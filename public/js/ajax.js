
    //master data detail modal window
    function getDetail(id) {
       
        $.get('masterdata/'+id+'/detail/', function (data) {
             
            console.log(data);
             $('#submit').val("Edit company");
             $('#modal-id').modal('show');
             $('#id').val(data.data.id);
             $('#external_id').val(data.data.external_id);
             $('#name').val(data.data.name);
             if(data.data.is_active==1)
             {
               
                $("#active").prop("checked", true);
             }
             else {
                $("#inactive").prop("checked", true);
             }
             
             $('#list_order').val(data.data.list_order);
             
         })
    }
    
