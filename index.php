<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<h1 class="text-center">BannaTu</h1>

<div id="app" class="container">
  <div class="row">
    <div class="col-6 m-auto">
      
      <form action="./risposta.php" method="get">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" name="banna">Email address</label>
            <input type="text" class="form-control" name="banna" id="exampleFormControlInput1" :value="name">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="20" name="text">{{message}}</textarea>
          </div>
          <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<script>
 const { createApp } = Vue

createApp({
  data() {
    return {
      name: 'walter white',
      message: `Walter White è un professore di chimica di Albuquerque, New Mexico, che vive con la moglie Skyler, incinta della loro secondogenita, e il figlio Walter "Flynn" Junior, affetto da una paralisi cerebrale che gli causa problemi di linguaggio e lo costringe a camminare con l'aiuto di stampelle per muoversi. Alla soglia dei cinquant'anni scopre di avere un tumore e per far fronte alle difficoltà economiche della famiglia, Walter è costretto a svolgere un secondo lavoro come dipendente di un autolavaggio. A tutto questo si aggiunge il profondo senso di insoddisfazione di Walter, che deve sopportare le angherie del suo titolare, dei suoi amici e familiari, i quali lo vedono come un uomo debole e remissivo. In particolare suo cognato Hank, agente della DEA, con cui peraltro ha un buon rapporto, non perde occasione per mettere a confronto la sua vita avventurosa con quella di Walter, totalmente priva di soddisfazioni.

      Quando, il giorno dopo il suo cinquantesimo compleanno, a Walter viene diagnosticato un cancro ai polmoni, i suoi problemi sembrano precipitare, anche perché non dispone della necessaria copertura assicurativa per curarsi. Tuttavia, in seguito al casuale incontro con Jesse Pinkman, un suo ex studente diventato uno spacciatore di poco conto, Walter decide di cominciare a cucinare insieme a lui cristalli di metanfetamina. Grazie alla sua conoscenza della chimica, il prodotto di Walter si rivela di qualità nettamente superiore rispetto alla concorrenza, con una purezza del 99,1%. Decide quindi di sfruttare le sue capacità per farsi, a mano a mano, sempre più strada nel mercato della droga e ricavare una quantità di denaro tale da lasciare al sicuro la sua famiglia nel momento in cui la malattia avrebbe preso il sopravvento.`
    }
  }
}).mount('#app')

</script>
</body>
</html>