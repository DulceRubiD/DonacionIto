<!DOCTYPE html>
<html>

<head>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>



<script type="text/javascript">
  
  const inputOptions = new Promise((resolve) => {
  setTimeout(() => {
    resolve({
      '#ff0000': 'Red',
      '#00ff00': 'Green',
      '#0000ff': 'Blue'
    })
  }, 1000)
})




  function mensajeGuardado(){  

      Swal.mixin({
                
                confirmButtonText: 'Siguiente →',
                showCancelButton: false,
                progressSteps: ['1', '2', '3','4','5','6','7']
              }).queue([
                {
                  title: 'Donación Altruista',
                  text: 'Las personas que donan su sangre de manera voluntaria, anónima, no remunerada y en forma periódica son las que aportan la sangre “más segura”, esto es, la sangre que no puede complicar la salud del receptor.',
                 
                },
                {
                 
                  text: 'En una escala del 1-10 ¿Qué tan saludable te sientes?',
                 input: 'range',
                        inputAttributes: {
                                min: 1,
                                max: 10,
                                step: 1
                        },
                        inputValue: 5

                },

           


                {
              
                  text:'¿Sabías que la sangre constituye alrededor del 9% de tu cuerpo?',
                    input: 'select',
                    inputOptions: {
                      si: 'Si',
                      no: 'No'
                    },
                },

                {
              
                  text:'¿Consideras que tu cuerpo limpia por si solo la sangre?',
                    input: 'select',
                    inputOptions: {
                      si: 'Si',
                      no: 'No'
                    },
                },


                {
                  
                  text:'¿Sabías que en una donación que realices limpias tu sangre un 11.11%?',
                  input: 'select',
                    inputOptions: {
                      si: 'Si',
                      no: 'No'
                    },

                },

                {
                
                  text:'Convertirte en un donador voluntario no solo te va a ayudar a tener una vida más saludable, también te dará la satisfacción de saber que ayudaste a salvar vidas, que le diste la oportunidad a un niño de realizar sus sueños o ayudarlo a no quedar huérfano, la satisfacción de saber que gracias a tu sangre, una persona tiene una nueva oportunidad de vida … '
                  

                },
                {
                
                  text:'Probablemente te niegues a donar, y estas en tu derecho, pero ahora que eres consiente de los beneficios personales y sociales de la donación voluntaria… ¿Estas dispuesto a aportar tu granito de arena?',
                  input: 'select',
                    inputOptions: {
                      si: 'Si',
                      no: 'No'
                    },

                },


              ]).then((result) => {
                if (result.value) {
                  const answers = JSON.stringify(result.value)
                    Swal.fire({
                                title: 'Gracias',
                                html: `
                                  Your answers:
                                  <pre><code>${answers}</code></pre>
                                `,
                                confirmButtonText: 'Lovely!'
                              })
                }
              })

}

window.onload= mensajeGuardado;
</script>


</body>

<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

</html>
