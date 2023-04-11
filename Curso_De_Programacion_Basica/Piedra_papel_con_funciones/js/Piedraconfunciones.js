

      function aleatoreo(min,max)
      {
         return Math.floor(Math.random()*(max-min+1)+min)
      }
      function eleccion(jugada)
      {
          let resultado = ""
          if (jugada==1)
           {
            resultado=  "Piedra"
           }
          else
          if (jugada==2)
          {
            resultado=  "Papel"
          }
          else
          if (jugada==3)
          {
            resultado=  "Tijiera"
          }
          else
          {
            resultado= "Solo se pueden selecionar valores del 1 al 3 GILIPOLLAS"
          }
            return resultado
      }
      let jugador=0
      let pc= 0
      let victorias=0
      let derrotas=0
      let empates =0
  while (victorias < 3 && derrotas < 3 && empates < 3)
  {

      pc = aleatoreo(1,3)
      jugador= prompt("Elige = 1 para Piedra, 2 para Papel, 3 para Tijiera")
      alert ("PC elige:" +eleccion(pc))
      alert ("Tu eliges: "+eleccion(jugador))

//PARA EL ENCUENTRO VS
             if (jugador==pc)
             {
              alert("EMPATE")
              empates= empates+1
             }
             else
             if (jugador==1 && pc==3)
             {
               alert("GANASTE PUERCO")
               victorias = victorias+1
             }
             else
             if (jugador==2 && pc==1)
             {
               alert("GANASTE CHANCHO")
               victorias = victorias+1
             }
             else
             if (jugador==3 && pc==2)
             {
               alert("GANASTE COCHINO")
               victorias = victorias+1
             }
             else
              alert("GANA LA PC HAHAHAHAH")
              derrotas=derrotas+1
        }
        alert ("Felicidades tuviste" + victorias +"victorias")
        alert ("Tuviste" + derrotas +"Derrotas")
        alert ("Tuviste" + empates +"Empates")
