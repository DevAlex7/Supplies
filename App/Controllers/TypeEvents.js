$(document).ready(function () {
    Get();
    callTypes();
});

var id=6;
//Set the information of types in cards 
function setTypes(types,role){
    let content='';
    if(types.length>0){
        types.forEach(function(type){
            if(role==0){
                content+=
                `
                <div class="col s12 m12">
                    <blockquote>
                        <div class="card-panel">
                            <div class="right">
                                <a onClick="showtoEdit(${type.id})" class="tooltipped modal-trigger" href="#ModalEditType" data-position="left" data-tooltip="Editar" id="editPart"> <i class="material-icons">edit</i> </a>
                                <a onClick="showtoDelete(${type.id})" class="red-text tooltipped modal-trigger" href="#ModalDeleteType" data-position="top" data-tooltip="Eliminar"> <i class="material-icons">delete</i> </a>
                            </div>
                            <p>${type.type}</p>
                        </div>
                    </blockquote>
                </div>
                `;
            }
            else{
                content+=
                `
                <div class="col s12 m12">
                    <blockquote>
                        <div class="card-panel">
                            <p>${type.type}</p>
                        </div>
                    </blockquote>
                </div>
                `;
            }
        })
    }
    else{

    }
    $('#TypesRead').html(content);
}

//Call all type of events
function callTypes(){
    $.ajax({
        url:requestGET('typeEvent','getAll'),
        type:'POST',
        data:null,
        datatype:'JSON'
    })
    .done(function(response){
        if(isJSONString(response)){
            const result = JSON.parse(response);
            if(!result.status){
            }
            setTypes(result.dataset,result.role);
            $('.tooltipped').tooltip(); 
        }
        else{
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });
}
function Get(){
    $.ajax(
        {
            url:requestGET('typeEvent','getbyId'),
            type:'POST',
            data: {
                id
            },
            datatype:'JSON'
        }
    )
    .done(function(response)
        {
            if(isJSONString(response)){
                const result = JSON.parse(response);
                if(result.status){
                        ToastSucces(result.dataset.type);
                }
                else{
                    M.toast({html:result.exception});
                }
            }
            else{
                console.log(response);
            }
        }
    )
    .fail(function(jqXHR){
        catchError(jqXHR);
    })
}

$('#FormAddType').submit(function(){
    alert(requestPOST('typeEvent','createType'),);
    event.preventDefault();
    $.ajax({
        url:requestPOST('typeEvent','createType'),
        type:'POST',
        data: $('#FormAddType').serialize(),
        datatype:'JSON'
    })
    .done(function(response){
        if(isJSONString(response)){
            const result = JSON.parse(response);
            if(result.status){
                M.toast({html:'¡Tipo de evento añadido!'});
                $('#FormAddType')[0].reset();
            }
            else{
                M.toast({html:result.exception});
            }
        }
        else{
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });
})