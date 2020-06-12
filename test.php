<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
</head>
<body>

	<div id="app">
  {{ info }}
</div>

</body>
<script type="text/javascript">
	new Vue({
  el: '#app',
  data () {
    return {
      info: null
    }
  },
 mounted () {
   axios
      .get('http://localhost/stream/customers/get_vote_button')
      .then(response => (this.info = response))
  }
})

</script>
</html>