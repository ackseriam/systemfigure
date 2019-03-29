<template lang="">
	   <h2><span class="badge badge-success-lighten">{{status}}</span> </h2>
</template>

<script>
	export default{

		computed:{
			status(){
			return window.store.state.status
			}
		}
	}
</script>