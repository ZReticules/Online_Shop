document.getElementById("U_Age").value = 1;
function CloseWin(){
    window.close();
}
function NoSubmit(){
    if (document.getElementById("Pas1").value !== document.getElementById("Pas2").value){
        event.preventDefault();
        window.alert("Пароли не совпадают!");
    };
}
function ChangeAge(ChangeVal){
    event.preventDefault();
    a = Number(document.getElementById("U_Age").value) + ChangeVal;
    if (a < 200 && a > 0){
        document.getElementById("U_Age").value = a;
    }
    else{
        window.alert("Недопустимый возраст!");
    }
}
function Show_Hide_Pas(){
    if(document.getElementById("Pas1").getAttribute('type') === 'password'){
        document.getElementById("Pas1").setAttribute('type', 'text');
        document.getElementById("Pas2").setAttribute('type', 'text');
    }
    else {
        document.getElementById("Pas1").setAttribute('type', 'password');
        document.getElementById("Pas2").setAttribute('type', 'password');
    }
}