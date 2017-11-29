<template>
	<div>
		<div  v-for="item in items">
			<h1>{{item.name}}を読んでくれてありがとうございます！</h1>
			<p v-if="JSON.parse(item.field).image != ''">
				<img :src="'/image' + JSON.parse(item.field).image"/>
			</p>
			<div v-if="is_enquate == true">
				<p>{{item.comment}}</p>
				<form >
					<p>よければアンケートにご協力ください。</p>
					<ul v-for="enquete in JSON.parse(item.field).enquete">
						<li v-if="enquete.type ==1">
							<p>どのページがよかったですか？</p>
							<select>
								<option v-for="n in parseInt(enquete.page)" :value="n">{{n + "ページ"}}</option>
							</select>
						</li>
						<li v-if="enquete.type ==2">
							<p>{{enquete.title}}</p>
							<span v-for="checkbox in enquete.item">
								<input type="checkbox" :name="enquete.id" :value="checkbox.id">{{checkbox.title}}</input>
							</span>
						</li>
						<li v-if="enquete.type ==3">
							<p>{{enquete.title}}</p>
							<span v-for="checkbox in enquete.item">
								<input type="radio" :name="enquete.id" :value="checkbox.id">{{checkbox.title}}</input>
							</span>
						</li>
					</ul>
					<input @click="submitdata()" type="button" value="アンケートを送信する"/>
				</form>
			</div>
			<p v-else>アンケートのご協力ありがとうございました。</p>
		</div>
	</div>
</template>
<script>
  import http from '../services/http'

  export default {
    mounted() {
      this.fetchTasks()
    },
  	data() {
      return {
        items: [],
        is_enquate: true
      }
    },
  	methods: {
    	fetchTasks () {
        	http.get('thread/' + this.$route.params.id + '/' + this.$route.params.param2, 
        	res => {this.items = res.data})
        },
        submitdata(){
        	this.is_enquate = false
        	this.$forceUpdate()
        }
    }
  }
</script>