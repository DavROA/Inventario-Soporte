<script type="text/javascript">

    //**Funciones para redireccionar//

    function loadFileHome(fileName,loadPage){
        var request = new XMLHttpRequest();
        request.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('loadPage').innerHTML=this.responseText;
            }
        };
        request.open("GET"+fileName+".php",true);
        request.send();
    }
    
    function loadFileInventarioArt(fileName,loadPage){
        var request = new XMLHttpRequest();
        request.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('loadPage').innerHTML=this.responseText;
            }
        };
        request.open("GET","Inventario/InventarioArt/"+fileName+".php",true);
        request.send();
    }

    function loadFileInventario(fileName,loadPage){
        var request = new XMLHttpRequest();
        request.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('loadPage').innerHTML=this.responseText;
            }
        };
        request.open("GET","Inventario/"+fileName+".php",true);
        request.send();
    }

    function loadFileSoporteRedes(fileName,loadPage){
        var request = new XMLHttpRequest();
        request.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('loadPage').innerHTML=this.responseText;
            }
        };
        request.open("GET","Soporte/Redes/"+fileName+".php",true);
        request.send();
    }

    function loadFileSoporteMantenimiento(fileName,loadPage){
        var request = new XMLHttpRequest();
        request.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('loadPage').innerHTML=this.responseText;
            }
        };
        request.open("GET","Soporte/Mantenimiento/"+fileName+".php",true);
        request.send();
    }

    function loadFileInventarioReporte(fileName,loadPage){
        var request = new XMLHttpRequest();
        request.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('loadPage').innerHTML=this.responseText;
            }
        };
        request.open("GET","Inventario/Reportes/"+fileName+".php",true);
        request.send(); 
    }

    function loadFileSoporte(fileName,loadPage){
        var request = new XMLHttpRequest();
        request.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('loadPage').innerHTML=this.responseText;
            }
        };
        request.open("GET","Soporte/"+fileName+".php",true);
        request.send();
    }

    function loadFileUsuarios(fileName,loadPage){
        var request = new XMLHttpRequest();
        request.onreadystatechange = function (){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('loadPage').innerHTML=this.responseText;
            }
        };
        request.open("GET","Usuarios/"+fileName+".php",true);
        request.send();
    }
</script>