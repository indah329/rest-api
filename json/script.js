//let pelajar ={
//  nama: "nurindah",
//  nrp: "089567",
//  email: "nurindah@gmail.com"
// }

//console.log(JSON.stringify(pelajar));

//let xhr = new XMLHttpRequest();
//xhr.onreadystatechange = function() {
    //if(xhr.readyState == 4 && xhr.status == 200) {
    //   let pelajar = JSON.parse(this.responseText);
     //   console.log(pelajar);
   // }
//}
//xhr.open('GET', 'coba.json', true);
//xhr.send();

$.getJSON('coba.json', function (data){
    console.log(data);
});

