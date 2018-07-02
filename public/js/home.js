$(document).ready(function(){
    var formCounter = 0;

    // Simple ajax form handler
    function ajaxForm(id,callable, method = "POST"){
        console.log("FORM ID: "+id);
        $.ajaxq('form-submit'+"-"+(formCounter++),{
            url: $(id).attr('action'),
            type: method,                          
            data: new FormData(id),               
            contentType: false,                     
            cache: false,                           
            processData:false,
            success: function(data){
                callable(data);
            },complete: function(){
                $.ajaxq.clear('form-submit'+"-"+formCounter);
                $(id)[0].reset();
            }
        });
    }

    function getTask(){
        var id = $("#task-container");
        $.getq('getBookings',$(id).attr("action"),null,function(data){
            $(id).html(data);
        });
        $.ajaxq.clear('getBookings');
    }

    $("#form-create-task").on("submit",function(e){
        e.preventDefault();
        var action = $(this).attr("action");
        ajaxForm(this,function(data){
            toastr_generate("Successfully created a new task.","Successful","s");
            getTask();
        });
    });


    
    getTask();

});
