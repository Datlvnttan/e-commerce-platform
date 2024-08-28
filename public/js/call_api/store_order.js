var GetDataStoreOrderWithStatus = (status = 0,func_success)=>{    
    $.ajax({
        url: BASE_URL_API+PREFIX_STORE+PREFIX_ORDER+PREFIX_ORDER_ALL+"/"+status,
        type: "GET",           
        contentType: 'application/json', 
        success: function (res) {               
            console.log(res)
            if(res.success)  
            {
                if(typeof func_success === "function")
                    func_success(res.data);
            }   
            else            
                handleCreateToast("error",res.message,'err');            
        },
        error: function (xhr, statuss, error) {            
            handleCreateToast("error", xhr.responseJSON ? (xhr.responseJSON.error ?? xhr.responseJSON.errors ?? xhr.responseJSON.message):"Đã xảy ra lỗi");  
            GetDataStoreOrderWithStatus(status,func_success)                         
        }
    });
}

var GetStoreOrderDetails = (id,func_success)=>{
    $.ajax({
        url: BASE_URL_API+PREFIX_STORE+PREFIX_ORDER+id,
        type: "GET",           
        contentType: 'application/json', 
        success: function (res) { 
            console.log(res)                          
            if(res.success)  
            {
                if(typeof func_success === "function")
                    func_success(res.data);
            }   
            else            
                handleCreateToast("error",res.message,'err');            
        },
        error: function (xhr, status, error) {             
            handleCreateToast("error",xhr.responseJSON.error ?? xhr.responseJSON.errors ?? xhr.responseJSON.message);   
            GetStoreOrderDetails(id,func_success)                             
        }
    });
}

var RefuseOrder = (id,formData,func_success)=>{
    $.ajax({
        url: BASE_URL_API+PREFIX_STORE+PREFIX_ORDER+id,
        type: "PUT",    
        data:formData,               
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content') 
            },
        success: function (res) {               
            console.log(res)
            if(res.success)  
            {
                if(typeof func_success === "function")
                    func_success();
            }   
            else            
                handleCreateToast("error",res.message,'err');            
        },
        error: function (xhr, status, error) {                   
            handleCreateToast("error",xhr.responseJSON.error ?? xhr.responseJSON.errors ?? xhr.responseJSON.message);                                 
        }
    });
}
var UpdateOrderStatus = (id,func_success)=>{
    $.ajax({
        url: BASE_URL_API+PREFIX_STORE+PREFIX_ORDER+id,
        type: "PATCH",                          
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content') 
            },
        success: function (res) {  
            console.log(res)                         
            if(res.success)  
            {
                if(typeof func_success === "function")
                    func_success(res.data);
            }   
            else            
                handleCreateToast("error",res.message,'err');            
        },
        error: function (xhr, status, error) { 
            alert(12) 
            console.log(xhr)                     
            handleCreateToast("error",xhr.responseJSON.error ?? xhr.responseJSON.errors ?? xhr.responseJSON.message);                                 
        }
    });
}