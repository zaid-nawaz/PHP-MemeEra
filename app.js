let nameicon = document.getElementById('nameicon');
let descicon = document.getElementById('descicon');
let editedname = document.getElementById('editedname');
let editeddesc = document.getElementById('editedDesc');
let alreadyname = document.getElementById('alreadyname');
let alreadydesc = document.getElementById('alreadydesc');
let submit = document.getElementById('submitbutton');
let picicon = document.getElementById('picicon');




nameicon.addEventListener('click',()=>{
    if (alreadyname.style.display == 'block') {
        alreadyname.style.display = 'none';
        editedname.style.display = 'block';
        submit.style.display = 'block';

    }else{
        alreadyname.style.display = 'block';
        editedname.style.display = 'none';
        submit.style.display = 'none';
    }

})


descicon.addEventListener('click',()=>{
    if (alreadydesc.style.display == 'block') {
        alreadydesc.style.display = 'none';
        editeddesc.style.display = 'block';
        submit.style.display = 'block';
    }else{
        alreadydesc.style.display = 'block';
        editeddesc.style.display = 'none';
        submit.style.display = 'none';
    }

})

picicon.addEventListener('click',()=>{
    // if (alreadydesc.style.display == 'block') {
    //     alreadydesc.style.display = 'none';
    //     editeddesc.style.display = 'block';
    //     submit.style.display = 'block';
    // }else{
    //     alreadydesc.style.display = 'block';
    //     editeddesc.style.display = 'none';
    //     submit.style.display = 'none';
    // }
    submit.style.display= 'block';
})

// setTimeout(() => {
//     alerting.style.display = 
// }, 3000);
console.log(alerting);
