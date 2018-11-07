<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Ranking Televenda Coobrastur</title>
	    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.14.1/lodash.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <link rel="stylesheet" href="e.css">
</head>
<body>
<style type="text/css">
.flip-list-move {
  transition: transform 1s;
}
</style>
        <div class="outLista">
                <!-- DADOS LISTAGEM ORDER BY qnt_vendas DESC -->
                <div id="flip-list" class="demo">
                    <button v-on:click="shuffle">Refresh</button>
                    <transition-group name="flip-list" tag="ul">
                        <li v-for="item in items" v-bind:key="item" class='linha'>
                        {{ item }}
                        </li>
                    </transition-group>
                </div>
        </div>

        <!--div class="player">
            <audio autoplay="autoplay">
                <source src="javascript:tocamp3();" type="audio/mp3" />
                seu navegador não suporta HTML5
            </audio>
        </div-->
        
<?php

    $json           = file_get_contents('dados.json');
    $jsonDecode     = (json_decode($json, true));
    print_r($jsonDecode);
?>
<script type="text/javascript">
new Vue({
  el: '#flip-list',
  data: {
    //bancodedados: []
    items: ['Pessoa 1',
            'Pessoa 2',
            'Pessoa 3',
            'Pessoa 4',
            'Pessoa 5',
            'Pessoa 6',
            'Pessoa 7',
            'Pessoa 8',
            'Pessoa 9']

  },
  methods: {
    shuffle: function () {
      this.items = _.shuffle(this.items)
    }
  },
  created: function() {
    var self = this;
    self.$http.get('dados.json').then(function(response) {
      self.bancodedados = response.body;
    });
  },

})
</script>
</body>
</html>