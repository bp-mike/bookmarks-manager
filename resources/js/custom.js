const axios = require('axios')

$('body').on('click', (e)=>{
    let id = $(e.target).attr('data-id');
    axios.delete('/bookmarks/'+id).then(()=>{
        window.location.reload();
    }).catch((error)=>{
        console.log(error);
    });
})