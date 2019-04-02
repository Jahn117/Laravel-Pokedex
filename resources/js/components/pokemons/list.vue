<template>
	<div class="row">
		<spinner v-show="loading"></spinner>	
		<div class="col-sm" v-for="pokemon in pokemons">
			<div class="card text-center" style="width: 18rem; margin-top: 50px">
				<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px" class="card-img-top rounded-circle mx-auto d-block" v-bind:src="pokemon.picture">
				<div class="card-body">
				<h5 class="card-title">{{pokemon.name}}</h5>
				<p class="card-text">Descripcion pedorra</p>
				<a href="/trainers" class="btn btn-primary">Ver más...</a>
				</div>
			</div>
		</div>	
	</div>
</template>

<script>
	import EventBus from '../../event-bus';
	export default{
		data(){
			return{
				pokemons: [],
				loading: true
			}
		},
		created(){
			EventBus.$on('pokemon-added', data =>{
				this.pokemons.push(data)
			})
		},
		mounted(){
			let currentRoute = window.location.pathname	
			axios
			.get(`http://localhost:8000${currentRoute}/pokemons`)
			.then((res) => {
				this.pokemons = res.data
				this.loading = false
			})
		}
	}
</script>
<style>
	
</style>