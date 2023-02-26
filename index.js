function clock(){

    let today=new Date;
    let date=today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    let hour=today.getHours()+':'+today.getMinutes()+':'+today.getSeconds();
    
    
    let displayDate=document.getElementById("date");
    displayDate.innerHTML=date;
    
    let displayHour=document.getElementById("hour");
    displayHour.innerHTML=hour;

    let inputHour=document.getElementById("inputTime");
    inputHour.value=hour;

    let inputDate=document.getElementById("inputDate");
    inputDate.value=date;

    let refresh= setTimeout(function(){clock()}, 1000);

}

clock();