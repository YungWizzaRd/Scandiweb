function select(val) {
    
    if(val==="DVD"){
      document.getElementById('DVD').style.display='block';
        document.getElementById('DVD').classList.remove("d-none");
        document.getElementById('Book').classList.add("d-none");
        document.getElementById('Furniture').classList.add("d-none");
    }
   else if(val==="Furniture"){
         document.getElementById('Furniture').style.display='block';
        document.getElementById('Furniture').classList.remove("d-none");
        document.getElementById('DVD').style.display='none';
        document.getElementById('Book').style.display='none';
        
    }
    else if(val=== "Book"){
        document.getElementById('DVD').classList.add("d-none");
        document.getElementById('Book').style.display='block';
        document.getElementById('Book').classList.remove("d-none");
        document.getElementById('Furniture').classList.add("d-none");
    }
    }