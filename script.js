function Onload(){
    let sidebar = document.getElementById('sidebar');
    sidebar.addEventListener('mouseover',slide_open_sidebar);


}


function log(item){
    console.log(item);
}
function slide_open_sidebar(){
    let sidebar = document.getElementById('sidebar');
    let Rotate = 0;
    let icon = document.getElementById('sidebar_icon');
    

    sidebar.removeEventListener('mouseover',slide_open_sidebar);
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
            sidebar.addEventListener('mouseout',slide_close_sidebar)
            document.getElementById('list_sidebar').classList.remove('hide');
        
        }
        
        
    },1);

    
}
function slide_close_sidebar(){
    let sidebar = document.getElementById('sidebar');
    let Rotate = 0;
    let icon = document.getElementById('sidebar_icon');

    sidebar.removeEventListener('mouseout',slide_close_sidebar);

    var slide = setInterval(()=>{
        if( sidebar.clientWidth> 50){
            let width = sidebar.clientWidth - 1;
            sidebar.style.width = `${width}px`;
            icon.style.transform = `Rotate(${Rotate--}deg)`;
        }
        else{
            clearInterval(slide);
            sidebar.addEventListener('mouseover',slide_open_sidebar);
            document.getElementById('list_sidebar').classList.add('hide');
        }

    },10);

}

Onload();