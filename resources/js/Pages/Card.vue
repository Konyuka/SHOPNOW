<!DOCTYPE html>
<html>
<head>
  <title>Cards Widget</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.min.js"></script>
</head>
<body>
  <div id="app">
    <cards  v-if=(showthisCard(theCard)) v-for=((card, index) in cards) :key="index" @click="showCard(index)" ></cards>
  </div>
  <script>
  import cards from '@/components/card.vue'
  components: {
    cards,  
  },
  computed(){
      showthisCard(){
          return parseInt(this.chosenCard)
      }
  },
  method(){
      showcard(cardNumber){
          this.choosenCard = cardNumber
      }
  },
  data(){
      return{
          cards:4;
          choosenCard: '',
      }
  }
    
    var vm = new Vue({
      el: '#app',
    });
    
    // Example case
    let row = document.getElementById("app").getElementsByTagName("tr")[0];
    if(row) {
      let cell = row.getElementsByTagName("td")[1];
      if(cell) {
        cell.click();
      }
    }
    setTimeout(() => console.log(document.getElementById("app").innerHTML));
  </script>
</body>
</html>