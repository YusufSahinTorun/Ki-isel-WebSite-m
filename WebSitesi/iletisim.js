document.getElementById('form');
document.addEventListener('submit',myfunction);


function myfunction(e) {

    var isim = document.getElementById('name1').value;
    var eposta = document.getElementById('e-posta').value;
    const cinsiyet = document.getElementById('floatingSelect');
    var cinsiyet1 = cinsiyet.options[cinsiyet.selectedIndex].value;
    const yas = document.getElementById('yas').value;
    const mesaj = document.getElementById('mesaj').value;
    var say = 0;
    
    if(isim == ""){
        alert("İsim boş bırakılamaz!");
         
        say++;
    };
    if(eposta == ""){
        alert("Mail adresi boş bırakılamaz!");
        
        say++;
    };
    if(yas == ""){
        alert("Yaş boş bırakılamaz!");
        
        say++;
    };
    if(mesaj == ""){
        alert("Mesaj boş bırakılamaz!");
        
        say++;
    };
    var forMail = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;			
    if (forMail.test(eposta) == false){
		alert("Geçersiz Mail Adresi!");
		
        say++;
	};
    if(say == 0){
        alert("Form Onaylandı.")
        document.getElementById("isim2").innerHTML = isim;
        document.getElementById("eposta1").innerHTML = eposta;
        document.getElementById("cinsiyet2").innerHTML = cinsiyet1;
        document.getElementById("yas1").innerHTML = yas;
        document.getElementById("mesaj1").innerHTML = mesaj;

        
    }
 


    console.log(isim,eposta,cinsiyet1,yas,mesaj);
    e.preventDefault();
};

