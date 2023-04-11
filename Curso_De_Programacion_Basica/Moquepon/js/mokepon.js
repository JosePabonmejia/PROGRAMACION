//variables globales
let ataquejugador
let ataqueenemigo
let vidasjugador = 3
let vidasenemigo = 3
//ESTA LINEA SIRVE PARA EJECUTAR TODO LO QUE SE ENCUENTRA EN EL script ANTES DEL html
//ESTA LINEA SIRVE PARA EJECUTAR TODO LO QUE SE ENCUENTRA EN EL script ANTES DEL html
    function iniciarJuego()
    {

      // ESTA LINEA DE CODIGO(METODO) CREA UNA VARIABLE EN JAVASCRIPT QUE LLAMA A OTRA DEL DOCUMENTO HTML
      //let osea ESTA VARIABLE NUEVA VA A SER IGUAL A ESTE BOTON PARA SELECCIONAR DEL ARCHIVO HTML
         let bntSeleccionMokepon = document.getElementById('seleccionmokepon')
        //CREAMOS UN EVENTO CON LA VARIABLE QUE YA CREAMOS ARRIBA EL EVENTO CLICK "SI EL USUARIO HACE CLICK"
        bntSeleccionMokepon.addEventListener('click',seleccionmokepon)
        //VARIABLE CREADA . AÑADIR UN EVENTO QUE SEA CLICK
        let btnfuego = document.getElementById('btnfuego')
        btnfuego.addEventListener('click',ataquefuego)
        let btnagua =document.getElementById('btnawa')
        btnagua.addEventListener('click',ataqueagua)
        let btntierra = document.getElementById('btntierra')
        btntierra.addEventListener('click',ataquetierra)

      }
         function seleccionmokepon()
         {
         let inputscuartle = document.getElementById('scuartle')
         let inputchicorita = document.getElementById('chicorita')
         let inputcharmander = document.getElementById('charmander')
         let inputmiu = document.getElementById('miu')
         let inputonix = document.getElementById('onix')
         let inputpikachu = document.getElementById('pikachu')
        // PARA TRAER VARIABLE SPAM DE HTML
         let spanmokepon = document.getElementById('nombremokepon')
         //EN ESTA PARTE DEBEMOS SABER CUAL DE LOS IMPUTS FUE SELECIONADA CON EL COMANDO document.getElementById CHECK
                if (inputscuartle.checked)//Selecciona el Imput con id scuartle en el HTML y lo revisa
                {
                  alert ('Seleccionaste a SCUARTLE')
                  spanmokepon.innerHTML = 'SCUARTLE'
                }
                else if (inputchicorita.checked)
                {
                  alert ('Seleccionaste a CHICORITA')
                  spanmokepon.innerHTML = 'CHICORITA'
                }
                else if (inputcharmander.checked)
                {
                  alert ('Seleccionaste a CHARMANDER')
                  spanmokepon.innerHTML = 'CHARMANDER'
                }
                else if (inputmiu.checked)
                {
                  alert ('Seleccionaste a MIU')
                  spanmokepon.innerHTML = 'MIU'
                }
                else if (inputonix.checked)
                {
                  alert ('Seleccionaste a ONIX')
                  spanmokepon.innerHTML = 'ONIX'
                }
                else if (inputpikachu.checked)
                {
                  alert ('Seleccionaste a PIKACHU')
                  spanmokepon.innerHTML = 'PIKACHU'
                }
                else
                {
                alert ('Debes Seleccinar a un mokepon')
                }
              let ini = seleccionmokeponenemigo()

        }
        //FUNCION PARA SELECCION DEL ENEMIGO
          function seleccionmokeponenemigo ()
          {
              let mokeponaleatoreo= aleatoreo(1,3)//LLAMAMOS AL LA FUNCION ALEATOREO
              let spanmokeponene = document.getElementById('nombremokeponenemigo')

                if (mokeponaleatoreo==1)
                {
                    alert ('El contringante escojio a SCUARTLE')
                  spanmokeponene.innerHTML = ' SCUARTLE'
                }
                else if (mokeponaleatoreo==2)
                {
                      alert ('El contringante escojio a CHICORITA')
                  spanmokeponene.innerHTML = ' CHICORITA'
                }
                else if (mokeponaleatoreo==3)
                {
                  alert ('El contringante escojio a CHARMANDER')
                  spanmokeponene.innerHTML = ' CHARMANDER'
                }
                else if (mokeponaleatoreo==4)
                {
                  alert ('Seleccionaste a MIU')
                  spanmokeponene.innerHTML = 'MIU'
                }
                else if (mokeponaleatoreo==5)
                {
                  alert ('Seleccionaste a ONIX')
                  spanmokeponene.innerHTML = 'ONIX'
                }
                else if (mokeponaleatoreo==6)
                {
                  alert ('Seleccionaste a PIKACHU')
                  spanmokeponene.innerHTML = 'PIKACHU'
                }
              }
        function ataquefuego(){
         ataquejugador = 'FUEGO'
        ataquealeatoreoENE()
        }
        function ataqueagua(){
         ataquejugador = 'AGUA'
         ataquealeatoreoENE()
        }
        function ataquetierra(){
         ataquejugador = 'TIERRA'
         ataquealeatoreoENE()
        }

        function ataquealeatoreoENE()
        {
              let ataquealeatoreo= aleatoreo(1,3)
              if (ataquealeatoreo==1)
              {
               ataqueenemigo='FUEGO'
              }
               else if (ataquealeatoreo==2)
              {
              ataqueenemigo='AGUA'
              }
              else if (ataquealeatoreo==3)
              {
               ataqueenemigo='TIERRA'
              }

              combate()
        }

       function combate()
       {
         let spanVidasJugador = document.getElementById('vidasjugador')
         let spanVidasEnemigo = document.getElementById('vidasenemigo')

        if (vidasenemigo>0 && vidasjugador>0 )
        {
            if (ataqueenemigo==ataquejugador)
              {
                crearmensaje("🙌🏼EMPATE🙌🏼")

              }
            else
            if (ataquejugador=='FUEGO' && ataqueenemigo=='TIERRA')
              {
              crearmensaje("🏆GANASTE🏆")

              vidasenemigo--
              spanVidasEnemigo.innerHTML= vidasenemigo
              }
            else
            if (ataquejugador=='AGUA' && ataqueenemigo=='FUEGO')
            {
              crearmensaje("🏆GANASTE🏆")

              vidasenemigo--
              spanVidasEnemigo.innerHTML= vidasenemigo
            }
            else
            if (ataquejugador=='TIERRA' && ataqueenemigo=='AGUA')
            {
              crearmensaje("🏆GANASTE🏆")

              vidasenemigo--
              spanVidasEnemigo.innerHTML= vidasenemigo
            }
            else
            {
             crearmensaje("💔PERDISTE💔")
             vidasjugador--
             spanVidasJugador.innerHTML= vidasjugador
            }
           contarvidas()
          }

        }

          function contarvidas(resultadoFinal)
          {
            if (vidasjugador==0)
            {
              crearmensajeFinal('PERDISTE')
            }
            else if (vidasenemigo==0)
            {
              crearmensajeFinal('GANASTE')
            }

          }

    function crearmensaje(resultado)//parametro que mandaremos a imprimir
     {

      let sectionMensajes = document.getElementById('mensajes')
      let = parrafo = document.createElement('p')
      parrafo.innerHTML='Tu Pokemon ataco con ' + ataquejugador + ', El Pokemon enemigo ataco con ' + ataqueenemigo +'='+ resultado
      sectionMensajes.appendChild(parrafo)
     }

        function crearmensajeFinal(resultadoFinal)//parametro que mandaremos a imprimir
        {

          let sectionMensajes = document.getElementById('mensajes')
          let = parrafo = document.createElement('p')
          parrafo.innerHTML= resultadoFinal
          sectionMensajes.appendChild(parrafo)
        }
function aleatoreo(min,max)
{
   return Math.floor(Math.random()*(max-min+1)+min)
}

//ESTA LINEA SIRVE PARA EJECUTAR TODO LO QUE SE ENCUENTRA EN EL script ANTES DEL html
window.addEventListener('load', iniciarJuego)// Escuchador de enventos
