function Onload(){
    let sidebar = document.getElementById('sidebar');
    sidebar.addEventListener('click',slide_open_sidebar);


}


function log(item){
    console.log(item);
}
function slide_open_sidebar(){
    let sidebar = document.getElementById('sidebar');
    let Rotate = 0;
    let icon = document.getElementById('sidebar_icon');
    

    sidebar.removeEventListener('click',slide_open_sidebar);
    var slide = setInterval(()=>{
        Rotate++;
        if(sidebar.clientWidth < 200){
            let width = sidebar.clientWidth + 4;
            log(width);
            sidebar.style.width = `${width}px`;
            icon.style.transform =`rotate(${Rotate}deg)`;
        }
        else{
            clearInterval(slide);
            sidebar.addEventListener('click',slide_close_sidebar)
            document.getElementById('list_sidebar').classList.remove('hide');
        
        }
        
        
    },1);

    
}
function slide_close_sidebar(){
    let sidebar = document.getElementById('sidebar');
    let Rotate = 0;
    let icon = document.getElementById('sidebar_icon');

    sidebar.removeEventListener('click',slide_close_sidebar);

    var slide = setInterval(()=>{
        if( sidebar.clientWidth> 50){
            let width = sidebar.clientWidth - 1;
            sidebar.style.width = `${width}px`;
            icon.style.transform = `Rotate(${Rotate--}deg)`;
        }
        else{
            
            document.getElementById('list_sidebar').classList.add('hide');
            clearInterval(slide);
            sidebar.addEventListener('click',slide_open_sidebar);
        }

    },10);

}

Onload();