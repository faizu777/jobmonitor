document.addEventListener("DOMContentLoaded",function()
{
    var x=1;
const admin=document.getElementById('admin');
admin.addEventListener("click",function()
{
    if (x==3) {
        admin.setAttribute("href","/admin");
        admin.style.color="black";
    } else {
       x++; 
    }

});
const active=document.getElementsByClassName("nav-item mr-md-5");
active.addEventListener("click",function()
{
    active.setAttribute("class","nav-item active mr-md-5");
})
});