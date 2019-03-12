<template>
	<div class="row">
		<div class="col-sm" v-for="pokemon in pokemons">
			<div class="card text-center" style="width: 18rem; margin-top: 50px">
				<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px" class="card-img-top rounded-circle mx-auto d-block" src="/images/">
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
	export default{
		data(){
			return{
				pokemons: [
				{id: 1, name: "Pikachu"},
				{id: 2, name: "Squirtle"},
				{id: 3, name: "Charizard"}
				]
			}
		},
		mounted(){
			console.log('Component mounted.')
		}
	}
</script>