function checkvalue() {
    
    if(document.getElementById("#productType").value = "Book"){
        document.getElementById('DVD').addClass("d-none");
        document.getElementById('Book').removeClass('d-none');
        document.getElementById('Furniture').addClass('d-none');
    }
    else if(document.getElementById("#productType").value = "Furniture"){
        document.getElementById('#Furniture').removeClass('d-none');
        document.getElementById('#DVD').addClass('d-none');
        document.getElementById('#Book').addClass('d-none');
        
    }else if (document.getElementById("#productType").value = "DVD"){
        document.getElementById('#DVD').removeClass('d-none');
        document.getElementById('#Book').addClass('d-none');;
        document.getElementById('#Furniture').addClass('d-none');
    }
    }
