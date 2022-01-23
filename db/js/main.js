const openFormBtnWraper=document.getElementById('openFormBtnWraper')
const formWraper=document.getElementById('form-wraper')
const form=document.getElementById('form')
let isFormDisplayd=formWraper.classList.contains('display-flex')

openFormBtnWraper.addEventListener('click',()=>{
    formWraper.classList.remove( isFormDisplayd?'display-flex':'display-none')
    formWraper.classList.add( isFormDisplayd?'display-none':'display-flex')
    form.classList.remove( isFormDisplayd?'display-flex':'display-none')
    form.classList.add( isFormDisplayd?'display-none':'display-flex')
  
    window.scrollTo(0,document.body.scrollHeight);

     isFormDisplayd=formWraper.classList.contains('display-flex')

})