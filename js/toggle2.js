    function mostra(theId){
        var theArray= new Array('todos','sinalizacao','brindes','fachadas','acrilico','letra','iluminado','mdf');
        w=document.getElementById(theId)
        if(w.style.display=="block"){w.style.display='block';}else{
            for(i=0; i<theArray.length; i++){
                if(theArray[i] == theId){
                    w.style.display='block';
                }else{
                    document.getElementById(theArray[i]).style.display='none';
                }
            }
        }
    }
