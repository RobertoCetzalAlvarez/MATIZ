function init() {
    var ruta = document.querySelector("[name=route]").value;

    var apiSupervicionAR= 'http://10.19.147.80/superac/RepartoCaptura.aspx';
    //var apiAlumno='http://127.0.0.1:8000/apiAlumno'
    
    new Vue({
    
    
        http: {
          headers: {
            'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
          }
        },
    
        el:"#supervicionAR",
    
        data:{
            CONTENIDO:'',
            CONTENIDO2:'',
           
        },
    
        // AL CREARSE LA PAGINA
        created:function(){

        },
    
        //Inicio metodo obtener
        methods:{
            abrirAframe:function(){

            },
            function:abrirAframe() {
                var iframe = document.getElementById('CONTENIDO');
                iframe.src = 'http://10.19.147.80/superac/RepartoCaptura.aspx';
            },
    
        },
        // FIN DE METHODS
    
    
    
        // INICIO COMPUTED
        computed:{

        }
        // FIN DE COMPUTED
    
    
    
    });
    } window.onload = init;