
function hideImage(){

    let image = document.getElementById("image1");

    image.style.display="none";

}

function body(){

    let body = document.body;

    body.style.backgroundColor="yellow";

}


setTimeout( body , 2000 );

setTimeout( hideImage , 4000 );







